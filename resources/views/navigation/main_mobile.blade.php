<nav
    x-data="{ mobileNavOpen: false }"
    class="lg:hidden"
    x-trap.inert.noscroll.noautofocus="mobileNavOpen"
    @keyup.escape.stop.prevent="mobileNavOpen = false"
>
    <button @click.prevent.stop="mobileNavOpen = !mobileNavOpen" class="fa-sharp fa-light text-white text-2xl z-30 relative"  :aria-label="mobileNavOpen ? 'Close Mobile Nav Menu' : 'Open Mobile Nav Menu'" :aria-expanded="mobileNavOpen">
        <span x-show="!mobileNavOpen" class="material-symbols-outlined">menu</span>
        <span x-show="mobileNavOpen" class="material-symbols-outlined">close</span>
    </button>

    <div class=" fixed inset-0 z-20 p-12 bg-gray-900" x-show="mobileNavOpen" x-transition.origin.bottom.right x-cloak>
        <ul class="flex flex-col max-w-[80%]">
            <s:nav:main_nav select="title|url">
                <li class=" py-3 relative">
                    <a x-on:click="mobileNavOpen = !mobileNavOpen" class="text-white block" href="{{ $url }}">
                        {{ $title }}
                    </a>
                </li>
            </s:nav:main_nav>
        </ul>
    </div>
</nav>