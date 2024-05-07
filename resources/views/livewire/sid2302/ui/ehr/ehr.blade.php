<div wire:poll.1ms
     class="h-screen w-screen static">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @switch($current_scene)
{{--        @case('exit_survey' or 'consent' or 'persona_survey' or 'end' or 'instructions')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

        @case('trial_1')
            <div>
                <div class="flex flex-row">
                    <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                        <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                            <div class="font-medium text-lg text-slate-600">Available Patients</div>

                            <!-- Divider -->
                            <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                            @for ($i = 0; $i < count($test_patients_array); $i++)
                                <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                            @endfor

                        </div>
                    </div>
                    <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                        <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                            <div class="font-medium text-lg text-slate-600">
                                Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                            </div>
                            <!-- Divider -->
                            <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                            <div class="p-2 indent-4">
                                {{ $current_patient_note }}
                            </div>

                        </div>
                    </div>
                    <div class="basis-1/4">
                        <div class="text-right text-lg font-medium">
                            <div class="grid grid-auto-rows p-2">
                                <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                                <div>{{ now() }}</div>
                                <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
                                {{--                            @if ($time_limit_reached)--}}
                                {{--                                <div>--}}
                                {{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
                                {{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
                                {{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
                                {{--                                </div>--}}
                                {{--                            @endif--}}
                            </div>
                        </div>
                    </div>
                    @break
            
        @case('trial_2')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_3')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_4')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_5')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_6')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_7')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_8')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_9')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @case('trial_10')
            <div>
                <div class="flex flex-row">
                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">

                        <div class="font-medium text-lg text-slate-600">Available Patients</div>

                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        @for ($i = 0; $i < count($test_patients_array); $i++)
                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,
                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>
                        @endfor

                    </div>
                </div>
                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">
                        <div class="font-medium text-lg text-slate-600">
                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)
                        </div>
                        <!-- Divider -->
                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>

                        <div class="p-2 indent-4">
                            {{ $current_patient_note }}
                        </div>

                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="text-right text-lg font-medium">
                        <div class="grid grid-auto-rows p-2">
                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                            <div>{{ now() }}</div>
                            <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
{{--                            @if ($time_limit_reached)--}}
{{--                                <div>--}}
{{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
{{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
{{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                </div>
            </div>
            @break

        @default
            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200">
                <div class="flex flex-row">
                    <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">
                    </div>
                    <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">
                    </div>
                    <div class="basis-1/4">
                        @if($show_time)
                            <div class="text-right text-lg font-medium">
                                <div class="grid grid-auto-rows p-2">
                                    <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>
                                    <div>{{ now() }}</div>
                                    <div>{{ $remaining_time }}<span class="text-sm"> Remaining</span></div>
                                    {{--                            @if ($time_limit_reached)--}}
                                    {{--                                <div>--}}
                                    {{--                                    <button class="btn border border-slate-600 rounded shadow px-2 py-1 mr-1 mt-2--}}
                                    {{--                                    bg-gradient-to-br from-red-400 to-rose-300--}}
                                    {{--                                    hover:bg-gradient-to-br hover:from-rose-300 hover:to-red-400">Exit Session</button>--}}
                                    {{--                                </div>--}}
                                    {{--                            @endif--}}
                                </div>
                            </div>
                        @endif
                    </div>


{{--        @case('no_session')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

{{--        @case('persona_survey')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

{{--        @case('instructions')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

{{--        @case('exit_survey')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

{{--        @case('end')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

    @endswitch

    {{--            <div class="flex flex-row">--}}
{{--                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">--}}
{{--                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">--}}

{{--                        <div class="font-medium text-lg text-slate-600">Available Test Patients</div>--}}

{{--                        <!-- Divider -->--}}
{{--                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>--}}

{{--                        @for ($i = 0; $i < count($test_patients_array); $i++)--}}
{{--                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,--}}
{{--                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>--}}
{{--                        @endfor--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
{{--                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">--}}
{{--                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">--}}
{{--                        <div class="font-medium text-lg text-slate-600">--}}
{{--                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)--}}
{{--                        </div>--}}
{{--                        <!-- Divider -->--}}
{{--                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>--}}

{{--                        <div class="p-2 indent-4">--}}
{{--                            {{ $current_patient_note }}--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
{{--                <div class="basis-1/4">--}}
{{--                    <div class="text-right text-lg font-medium">--}}
{{--                        <div class="grid grid-auto-rows p-2">--}}
{{--                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>--}}
{{--                            <div>{{ now() }}</div>--}}
{{--                            <div>{{ $remaining_time }}<br><span class="text-sm">minutes remaining</span></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
{{--            </div>--}}
{{--            @break--}}
{{--    @switch($current_scene)--}}
{{--        @case('no_session' or 'consent' or 'persona_survey' or 'instructions' or 'exit_survey' or 'end')--}}
{{--            <div class="h-screen w-screen bg-gradient-to-tr from-sky-100 to-orange-200"></div>--}}
{{--            @break--}}

{{--        @case('trial_1')--}}
{{--            <div class="flex flex-row">--}}
{{--                <div class="basis-1/4 mt-[2.5%] ml-[1%] mr-[1%]">--}}
{{--                    <div class="justify-self-start border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">--}}

{{--                        <div class="font-medium text-lg text-slate-600">Available Test Patients</div>--}}

{{--                        <!-- Divider -->--}}
{{--                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>--}}

{{--                        @for ($i = 0; $i < count($test_patients_array); $i++)--}}
{{--                            <div @class(["bg-sky-200" => $test_patients_array[$i]['patient'] == $current_patient,--}}
{{--                            "ps-2"])>{{ $this->getPatientName($test_patients_array[$i]['patient']) }}</div>--}}
{{--                        @endfor--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="basis-1/2 mt-[2.5%] ml-[1%] mr-[15%]">--}}
{{--                    <div class="border border-slate-600 justify-center p-2 rounded-lg bg-white shadow">--}}
{{--                        <div class="font-medium text-lg text-slate-600">--}}
{{--                            Presentation Note (<span class="text-blue-500 font-bold">{{ $current_patient_name }}</span>)--}}
{{--                        </div>--}}
{{--                        <!-- Divider -->--}}
{{--                        <div class="border-t border-2 border-slate-600 mb-4 mt-1"></div>--}}

{{--                        <div class="p-2 indent-4">--}}
{{--                            {{ $current_patient_note }}--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="basis-1/4">--}}
{{--                    <div class="text-right text-lg font-medium">--}}
{{--                        <div class="grid grid-auto-rows p-2">--}}
{{--                            <div class="text-slate-400 text-sm">Session: {{ $sessionID }}</div>--}}
{{--                            <div>{{ now() }}</div>--}}
{{--                                <div>{{ $remaining_time }}<br><span class="text-sm">minutes remaining</span></div>--}}
{{--                        </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @break--}}

{{--    @endswitch--}}
</div>
