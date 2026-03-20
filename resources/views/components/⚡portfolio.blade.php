<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use Statamic\Facades\Entry;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public $heading = '';
    public $textarea = '';
    public $section_id = '';
    public $limit = 6;

    #[Computed]
    public function portfolioItems() 
    {
        return Entry::query()
            ->where('collection', 'portfolio_items')
            ->whereStatus('published')
            ->limit($this->limit)
            ->get();
    }

    public function loadMore()
    {
        $this->limit += 3;
        unset($this->portfolioItems);
    }
};
?>
<section class="pb-12 lg:pb-24" {!! $this->section_id ? "id=\"$this->section_id\"" : '' !!} aria-label="Portfolio">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            @if($this->heading)
                <h2>{{ $this->heading }}</h2>
            @endif
            @if($this->textarea)
                <p>{{ $this->textarea }}</p>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($this->portfolioItems as $portfolioItem )
                <article wire:key="{{ $portfolioItem->id }}">
                    @if ($portfolioItem->screenshot->is_image)
                        <img class="aspect-video object-cover rounded-lg" src="{{ $portfolioItem->screenshot }}" alt="">
                    @else
                        <video src="{{ $portfolioItem->screenshot }}" poster="{{ $portfolioItem->poster_image->url }}" class="aspect-video object-cover rounded-lg" onmouseover="this.play()" onmouseout="this.pause()" preload="auto" loop muted playsline></video>
                    @endif
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">{{ $portfolioItem->title }}</h3>
                </article>
            @endforeach
        </div>
        @if ($this->portfolioItems->count() >= $limit)
        <div class="text-center">
            <button wire:click="loadMore" class="secondary-button">
                <span>Load More</span>
            </button>        
        </div>
        @endif
    </div>
</section>
