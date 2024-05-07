<div class="basis-3/4 h-full bg-[#f7fbff]">
    <!-- Main View -->
    <div class="container h-full">

        @switch($mode)
            @case('off')
                <div></div>
                @break

            @case('comparison')
                <livewire:sid2302.ui.comparison-view />
                @break

            @case('autocomplete')
                <livewire:sid2302.ui.autocomplete-view />
                @break

            @case('survey')
                <livewire:sid2302.utils.task-survey />
                @break

        @endswitch


    </div>
</div>