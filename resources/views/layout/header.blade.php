<header id="masthead" class="absolute inset-x-0 top-0 z-50">
    <div class="container py-5">
        <div class="flex items-center gap-x-5">
            <a href="{{  $site->url }}">
                <img src="{{  $site_settings->logo }}" class="h-14" alt="">
            </a>
            <div class="lg:flex">
                @include('navigation.main')
            </div>
        </div>
    </div>
</header>