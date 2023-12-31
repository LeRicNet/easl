<div>

    @switch($current_scene)
        @case('consent')
            <livewire:sid2302.session.entry />
            @break

        @case('persona_survey')
            <livewire:sid2302.session.persona-survey />
            @break

        @case('instructions')
            <livewire:sid2302.session.instructions />
            @break

        @case('trial_1')
            <livewire:sid2302.session.ui />
            @break

        @case('exit_survey')
            <livewire:sid2302.session.exit-survey />
            @break

        @case('end')
            <livewire:side2302.session.end />

        @default
            <livewire:sid2302.session.entry />

    @endswitch
</div>
