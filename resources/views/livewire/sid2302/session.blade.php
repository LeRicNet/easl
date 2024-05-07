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
            <livewire:sid2302.session.ui current_patient="35" />
            @break

        @case('trial_2')
            <livewire:sid2302.session.ui current_patient="9"/>
            @break

        @case('trial_3')
            <livewire:sid2302.session.ui current_patient="47"/>
            @break

        @case('trial_4')
            <livewire:sid2302.session.ui current_patient="16"/>
            @break

        @case('trial_5')
            <livewire:sid2302.session.ui current_patient="21"/>
            @break

        @case('trial_6')
            <livewire:sid2302.session.ui current_patient="38"/>
            @break

        @case('trial_7')
            <livewire:sid2302.session.ui current_patient="46"/>
            @break

        @case('trial_8')
            <livewire:sid2302.session.ui current_patient="5"/>
            @break

        @case('trial_9')
            <livewire:sid2302.session.ui current_patient="50"/>
            @break

        @case('trial_10')
            <livewire:sid2302.session.ui current_patient="53"/>
            @break

        @case('exit_survey')
            <livewire:sid2302.session.exit-survey />
            @break

        @case('end')
            <livewire:sid2302.session.end />

{{--        @default--}}
{{--            <livewire:sid2302.session.entry />--}}

    @endswitch
</div>
