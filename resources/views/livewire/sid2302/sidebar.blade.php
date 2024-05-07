<div wire:poll.1ms
        class="basis-1/4 h-screen flex bg-white p-1 rounded-r-xl border-2 border-slate-950 grid grid-auto-rows">
    <!-- Left Sidebar: Tasks -->
    <!-- Header -->
    <div class="grid grid-rows-4 content-center">
        <div class="row-span-1">
            <livewire:sid2302.target-patient-header />
        </div>
        <div class="row-span-3">
{{--            <livewire:sid2302.patient-image-table />--}}
{{--            <livewire:sid2302.ui.sidebar.patient-image-table />--}}
            <livewire:sid2302.utils.patient-image-table />
        </div>
    </div>

    <!-- AI Buttons -->
    <div class="flex items-end w-full">
        <div class="w-full">
            <!-- Divider -->
            <div @class([
                "border-t" => ! $is_ai_enabled,
                "border-t-2" => $is_ai_enabled,
                "shadow-lg" => $is_ai_enabled,
                "border-green-400" => $is_ai_enabled
            ])></div>
            <div class="content-center">

                <div class="flex justify-center items-center h-10">
                    <!-- AI toggle -->
                    <label class="relative inline-flex items-center mb-2 cursor-pointer">
                        <input id="isAIenabled" type="checkbox" value="" class="sr-only peer" wire:click="updateAIStatus" @checked($is_ai_enabled) disabled>
                        <div class="w-9 h-5 bg-gray-200
                    peer-focus:outline-none peer-focus:ring-1
                     peer-focus:ring-grenn-400
                     rounded-full peer peer-checked:after:translate-x-full
                     rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white
                     after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                     after:bg-white after:border-gray-300 after:border after:rounded-full
                     after:h-4 after:w-4 after:transition-all peer-checked:bg-green-400"></div>
                        <span id="AISystemStatus" @class(["ms-3", "text-sm",
                        "font-normal" => $is_ai_enabled,
                        "font-medium" => $is_ai_enabled,
                         "text-gray-300" => ! $is_ai_enabled,
                         'text-green-400' => $is_ai_enabled
                         ])>
                            @if($is_ai_enabled)
                                AI Enabled
                            @else
                                AI Disabled
                            @endif
                        </span>
                    </label>
                </div>

                {{--            <div class="row-span-1">--}}
                <div class="flex justify-center items-center gap-x-2">

                    <livewire:sid2302.utils.autocomplete-button :is_ai_enabled="$is_ai_enabled" />
                    <livewire:sid2302.utils.comparison-button :is_ai_enabled="$is_ai_enabled" />

                </div>

                <!-- Divider -->
                <div @class([
                    "border-t" => ! $is_ai_enabled,
                    "border-t-2" => $is_ai_enabled,
                    "shadow-lg" => $is_ai_enabled,
                    "border-green-400" => $is_ai_enabled
                ])></div>
                <div class="content-center mx-1 mt-6 p-2 bg-gray-100 rounded-t-lg border-t border-r border-l border-gray-400 text-sm">
                    Complete the checklist below for <span class="font-medium">{{ $current_patient }}</span>.<br>Once complete, click 'Next Patient'.
                </div>
            </div>
        </div>
    </div>


    <!-- Form -->
    <div id="taskForm" @class(["grow", "border-2",
     "overflow-y-auto",
     "border-gray-300" => ! $is_ai_enabled,
     "border-green-400" => $is_ai_enabled,
     "shadow-lg" => $is_ai_enabled
     ])>
            @livewire('sid2302.utils.feature-form2', [
                'autocomplete' => false
            ])

    </div>

    <!-- Footer -->
    <div class="row-span-1 content-end mb-0 pb-0">
        <!-- Trial Progress Bar -->
{{--        <div class="flex justify-between mb-1">--}}
{{--            <span class="text-xs font-medium text-blue-700">{{ $current_patient }}</span>--}}
{{--            <span class="text-xs font-medium text-blue-700">10%</span>--}}
{{--        </div>--}}
{{--        <div class="w-full bg-gray-200 rounded-full h-2.5">--}}
{{--            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%"></div>--}}
{{--        </div>--}}

        <div class="invisible">{{ $required_fields_filled }}</div>

        <div class="flex justify-center items-center gap-x-1 pt-1">
            <button id="earlyExit"
                    wire:click="early_exit"
                    @disabled($time_limit_reached == 0)
                    @class(["invisible" => ($time_limit_reached == 0),
                    "flex flex-grow border border-gray-900 justify-center text-lg
                    text-slate-500 font-medium bg-gradient-to-br
                    from-zinc-100 to-zinc-200 hover:from-zinc-200 hover:to-zinc-100
                    active:shadow-inner active:from-zinc-100 active:to-zinc-50"])>Exit Study</button>
            <button @disabled($required_fields_filled == 0)
                    id="nextPatient"
                    wire:click="nextpatient"
                    class="flex flex-grow border border-gray-900 justify-center text-lg
                    text-slate-500 bg-gradient-to-br
                    from-slate-100 to-slate-200 hover:from-slate-200 hover:to-slate-100
                    active:shadow-inner active:from-slate-100 active:to-slate-50">Next Patient</button>
        </div>
    </div>
</div>