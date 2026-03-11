<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SyncAssetsToS3 extends Command
{
    protected $signature = 'assets:sync-to-s3';
    protected $description = 'Sync local assets to S3/R2 storage';

    public function handle()
    {
        $localDisk = Storage::disk('assets');
        $s3Disk = Storage::disk('s3');

        $files = $localDisk->allFiles();

        $this->info('Syncing ' . count($files) . ' files to S3...');

        $bar = $this->output->createProgressBar(count($files));
        $bar->start();

        foreach ($files as $file) {
            // Skip .meta folder
            if (str_starts_with($file, '.meta')) {
                $bar->advance();
                continue;
            }

            $s3Disk->put($file, $localDisk->get($file));
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Done!');

        return Command::SUCCESS;
    }
}
