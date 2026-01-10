<section aria-label="Home Hero" class="relative">
    <div class="container">
      <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block dark:fill-gray-900">
          <polygon points="0,0 90,0 50,100 0,100" />
        </svg>

        <div class="relative py-32 sm:py-40 lg:py-56 lg:pr-0">
          <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
            <h1 class="">{{ $heading }}</h1>
            <p class="text-gray-400">{{ $text_area }}</p>
            <div class="mt-10 flex items-center gap-x-6">
              <a href="#" class="primary-button">Get started</a>
              {{-- <a href="#" class="text-sm/6 font-semibold">Learn more</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 dark:bg-gray-800">
      <img src="{{ $image->url }}" alt="" style="object-position: {{ $image->focus_css }}"  class="aspect-square object-cover lg:aspect-auto lg:size-full" />
    </div>
</section>