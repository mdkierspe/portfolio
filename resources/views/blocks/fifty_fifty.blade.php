<section class="py-12 lg:py-24" {!! $section_id ? "id=\"$section_id\"" : '' !!}>
    <div class="container">
        <div class="flex flex-col-reverse lg:flex-row gap-x-24 gap-y-12 items-center">
            <div class="lg:basis-1/2">
                @if($image)
                    <img src="{{ $image->url }}" alt="{{ $image->alt }}" class="aspect-square object-cover">
                @endif
            </div>
            <div class="lg:basis-1/2 space-y-7">
                {!! $content !!}
            </div>
        </div>
    </div>
</section>