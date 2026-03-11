<section aria-label="Portfolio">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            @if($heading)
                <h2>{{ $heading }}</h2>
            @endif
            @if($textarea)
                <p>{{ $textarea }}</p>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <statamic:collection from="portfolio_items">
                <article>
                    @if ($screenshot->is_image)
                        <img src="{{ $screenshot }}" alt="">
                    @else
                        <video src="{{ $screenshot }}" class="aspect-video object-cover rounded-lg" onmouseover="this.play()" onmouseout="this.pause()" loop muted playsline></video>
                    @endif
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">{{ $title }}</h3>
                </article>
            </statamic:collection>
        </div>
    </div>
</section>