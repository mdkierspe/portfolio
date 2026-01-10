<section>
    <div class="container" x-data="{activeGroup:'{{ $icon_groups[0]->group_label }}'}">
        <div class="group-labels">
            @foreach ($icon_groups as $icon_group )
                <h3 x-on:click="activeGroup = '{{ $icon_group->group_label }}'">{{ $icon_group->group_label }}</h3>
            @endforeach
        </div>
        @foreach ($icon_groups as $icon_group )
            {{-- Figure out why x-cloak won't work --}}
            <div x-show="activeGroup === '{{ $icon_group->group_label }}'" {{ !$loop->first ? 'x-cloak' : '' }} class="flex flex-wrap justify-center items-center">
                @foreach ($icon_group->icons as $icon )
                    <div class="basis-1/6 text-center *:text-8xl">
                        <i class="{{ $icon->devicon_class }}"></i>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>