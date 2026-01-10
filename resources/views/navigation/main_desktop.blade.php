<nav class="hidden lg:block">
    <ul class="flex items-center gap-x-5">
        <s:nav:main_nav select="title|url">
            <li>
                <a href="{{ $url }}" class="">{{ $title }}</a>
            </li>
        </s:nav:main_nav>
    </ul>
</nav>