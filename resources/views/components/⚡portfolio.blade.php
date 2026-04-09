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
    public $limit = 4;

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
        $this->limit += 2;
        unset($this->portfolioItems);
    }
};
?>
<section class="py-12 lg:py-24" {!! $this->section_id ? "id=\"$this->section_id\"" : '' !!} aria-label="Portfolio">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            @if($this->heading)
                <h2>{{ $this->heading }}</h2>
            @endif
            @if($this->textarea)
                <p class="text-gray-400">{{ $this->textarea }}</p>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @foreach ($this->portfolioItems as $portfolioItem )
                <article wire:key="{{ $portfolioItem->id }}">
                    @if ($portfolioItem->screenshot->is_image)
                        <img class="aspect-video object-cover rounded-lg" src="{{ $portfolioItem->screenshot }}" alt="">
                    @else
                        <video src="{{ $portfolioItem->screenshot }}" poster="{{ $portfolioItem->poster_image->url }}" class="aspect-video object-cover rounded-lg" onmouseover="this.play()" onmouseout="this.pause()" preload="auto" loop muted playsline></video>
                    @endif
                    @if ($portfolioItem->site_url)
                        <a target="_blank" href="{{ $portfolioItem->site_url }}">
                            <h3 class="mt-3 text-lg/6 font-semibold text-white hover:text-sky-500">{{ $portfolioItem->title }}</h3>
                        </a>
                    @else
                        <h3 class="mt-3 text-lg/6 font-semibold text-white hover:text-sky-500">{{ $portfolioItem->title }}</h3>
                    @endif                    
                </article>
            @endforeach
        </div>
        @if ($this->portfolioItems->count() >= $limit)
        <div class="text-center">
            <button wire:click="loadMore" class="primary-button">
                <span>Load More</span>
            </button>        
        </div>
        @endif
    </div>
</section>
