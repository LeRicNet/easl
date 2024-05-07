<div class="h-screen w-screen static bg-gradient-to-br from-sky-100 to-orange-200">

    @switch($instruction_slide)
        @case(1)
            <div class="flex justify-center content-center">
                <div class="fixed top-[250px] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[40rem]">
                    <!-- Header -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700 ">Study Instructions</span>
                            <span class="text-sm font-medium text-blue-700">1/10</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="indent-4 mb-2">
                            Radiographic image interpretation is a common task for clinical providers who care for patients
                            with CNS tumors.
                        </div>
                        <div class="indent-4 my-2">
                            Typically, you might evaluate radiographic images alongside clinical presentation
                            to determine a radiographic differential diagnosis or to derive a preoperative surgical plan.
                        </div>
                        <div class="indent-4 mt-2 mb-4">
                            Here, your task is to assess the radiographic features that you might use as evidence to make
                            a clinical decision.
                        </div>
                        <div class="text-center text-lg font-bold border border-slate-300 px-2 py-1">
                            Importantly, you will not be generating a differential diagnosis nor a surgical plan.
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-2 my-4"></div>

                    <!-- Footer -->
                    <div class="flex justify-end">
                        <button id="next_instructions"
                                wire:click="next_instruction_slide"
                                class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                            Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            @break
        @case(2)
            <div class="flex justify-center content-center">
                <div class="fixed top-[200px] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[40rem]">
                    <!-- Header -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700">Study Instructions</span>
                            <span class="text-sm font-medium text-blue-700">2/10</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 20%"></div>
                        </div>
                    </div>
{{--                    <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                        <div class="text-xl font-bold">--}}
{{--                            Instructions--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- Body -->
                    <div class="p-4">
                        <div>
                            <div class="mb-2">
                                The radiographic features and possible options you will predict are:
                            </div>

                            <div class="flex flex-row w-full justify-center items-center border-t border-dashed border-b border-slate-300">
                                    <div class="basis-1/2 text-center font-medium">Tumor Location</div>
                                    <div class="basis-1/2 grid grid-auto-rows gap-1 my-1 items-center">
                                        <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Suprasellar</div>
                                        <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Intrasellar</div>
                                        <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Mixed</div>
                                    </div>
                            </div>
                            <div class="flex flex-row w-full justify-center items-center border-dashed border-b border-slate-300">
                                <div class="basis-1/2 text-center font-medium">Tumor Type</div>
                                <div class="basis-1/2 grid grid-auto-rows gap-1 my-1">
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Solid</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Cystic</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Mixed</div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-center items-center border-dashed border-b border-slate-300">
                                <div class="basis-1/2 text-center font-medium">Hypothalamic Invasion/Involvement</div>
                                <div class="basis-1/2 grid grid-auto-rows gap-1 my-1">
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Absent</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Present</div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-center items-center border-dashed border-b border-slate-300">
                                <div class="basis-1/2 text-center font-medium">Other Invasion/Involvement</div>
                                <div class="basis-1/2 grid grid-auto-rows gap-1 my-1">
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Skullbase</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Mamillary Body</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Optic Chiasm</div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-center items-center border-dashed border-b border-slate-300">
                                <div class="basis-1/2 text-center font-medium">Edema</div>
                                <div class="basis-1/2 grid grid-auto-rows gap-1 my-1">
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Hypothalamic</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Optic Tract</div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-center items-center border-dashed border-b border-slate-300">
                                <div class="basis-1/2 text-center font-medium text-slate-900">Cranial Fossa Invasion/Involvement</div>
                                <div class="basis-1/2 grid grid-auto-rows gap-1 my-1">
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Anterior Cranial Fossa</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Middle Cranial Fossa</div>
                                    <div><i class="fa-solid fa-diamond pe-1 text-slate-500 text-[10px]"></i>Posterior Cranial Fossa</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-2 my-4"></div>

                    <!-- Footer -->
                    <div class="flex justify-between">
                        <button id="previous_instructions"
                                wire:click="previous_instruction_slide"
                                class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                            <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                        </button>
                        <button id="next_instructions"
                                wire:click="next_instruction_slide"
                                class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                            Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            @break

        @case(3)
            <div class="flex justify-center content-center">
                <div class="fixed top-[250px] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[30rem]">
                    <!-- Header -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-blue-700">Study Instructions</span>
                            <span class="text-sm font-medium text-blue-700">3/10</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
{{--                    <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                        <div class="text-xl font-bold">--}}
{{--                            Instructions--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- Body -->
                    <div class="p-4">
                        <div class="indent-4 mb-2">
                            The dataset contains data from 10 patients pathologically diagnosed with Adamantinomatous
                            Craniopharyngioma (ACP) seen at Children's Hospital Colorado as well as other instutitions.
                        </div>
                        <div class="indent-4 mb-2">
                            Patient names have been anonymized.
                        </div>
                        <div class="indent-4 mb-2">
                            This session is limited to 30 minutes; the remaining time is displayed at the top right.
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-2 my-4"></div>

                    <!-- Footer -->
                    <div class="flex justify-between">
                        <button id="previous_instructions"
                                wire:click="previous_instruction_slide"
                                class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                            <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                        </button>
                        <button id="next_instructions"
                                wire:click="next_instruction_slide"
                                class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                            Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            @break

        @case(4)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div class="absolute w-screen static z-1 flex">
                    <div class="basis-1/4 h-screen">
                        <div class="bg-white opacity-[.95] h-[31%]"></div>
                        <div class="bg-transparent h-[63%] border-4 border-orange-600 animate-pulse"></div>
                        <div class="bg-white opacity-[.95] h-[2.55%]"></div>
                        <div class="flex h-[3%] w-full">
                            <div class="bg-white opacity-[.95] w-[53%] "></div>
                            <div class="bg-transparent w-[47%] border-4 border-orange-600 animate-pulse"></div>
                        </div>
                        <div class="bg-white opacity-[.95] h-[0.45%]"></div>
                    </div>
                    <div class="basis-3/4 h-screen bg-white opacity-[.5]"></div>
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed top-[63%] left-[30%] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[30rem]">
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">4/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 40%"></div>
                                </div>
                            </div>
{{--                            <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                                <div class="text-xl font-bold">--}}
{{--                                    Instructions--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Body -->
                            <div class="p-4">
                                <div class="indent-4 mb-2">
                                    Your task is to complete the form on the left. After you complete the form, click the ‘Next Patient’ button below the form.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <button id="previous_instructions"
                                        wire:click="previous_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                </button>
                                <button id="next_instructions"
                                        wire:click="next_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break

        @case(5)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div class="absolute w-screen static z-1 flex">
                    <div class="basis-1/4 h-screen">
                        <div class="h-[31%]">
                            <div class="h-[70%] w-full bg-transparent border-4 border-orange-600 animate-pulse"></div>
                            <div class="h-[30%] w-full bg-white opacity-[.95]"></div>
                        </div>
                        <div class="bg-white opacity-[.5] h-[63%]"></div>
                        <div class="bg-white opacity-[.95] h-[2.55%]"></div>
                        <div class="flex h-[3%] w-full">
                            <div class="bg-white opacity-[.95] w-[53%] "></div>
                            <div class="bg-white opacity-[.5] w-[47%]"></div>
                        </div>
                        <div class="bg-white opacity-[.95] h-[0.45%]"></div>
                    </div>
                    <div class="basis-3/4 h-screen bg-white opacity-[.5]"></div>
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed top-[8%] left-[30%] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[30rem]">
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">5/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>
{{--                            <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                                <div class="text-xl font-bold">--}}
{{--                                    Instructions--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Body -->
                            <div class="p-4">
                                <div class="indent-4 mb-2">
                                    For each patient, you will be provided basic clinical information (name, age, sex,
                                    height, weight) as well as a clinical presentation note in the EHR. In addition, preoperative
                                    radiographic imaging is available and can be displayed on the Barco monitor to your right.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <button id="previous_instructions"
                                        wire:click="previous_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                </button>
                                <button id="next_instructions"
                                        wire:click="next_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break

        @case(6)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div class="absolute w-screen static z-1 flex">
                    <div class="basis-1/4 h-screen">
                        <div class="h-[31%]">
                            <div class="h-[67%] w-full bg-white opacity-[.5]"></div>
                            <div class="h-[29%] w-full bg-transparent border-4 border-orange-600 animate-pulse"></div>
                            <div class="h-[4%] w-full bg-white opacity-[.5]"></div>
                        </div>
                        <div class="bg-white opacity-[.5] h-[63%]"></div>
                        <div class="bg-white opacity-[.95] h-[2.55%]"></div>
                        <div class="flex h-[3%] w-full">
                            <div class="bg-white opacity-[.95] w-[53%] "></div>
                            <div class="bg-white opacity-[.5] w-[47%]"></div>
                        </div>
                        <div class="bg-white opacity-[.95] h-[0.45%]"></div>
                    </div>
                    <div class="basis-3/4 h-screen bg-white opacity-[.5]"></div>
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed top-[8%] left-[30%] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[30rem]">
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">6/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
{{--                            <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                                <div class="text-xl font-bold">--}}
{{--                                    Instructions--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Body -->
                            <div class="p-4">
                                <div class="indent-4 mb-2">
                                    For some patients you will have access to an AI decision support tool, which can be
                                    activated by pressing either of these two buttons.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <button id="previous_instructions"
                                        wire:click="previous_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                </button>
                                <button id="next_instructions"
                                        wire:click="next_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break

        @case(7)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div>{{ $this->emitTo('sid2302.mainview', 'autocomplete') }}</div>
                <div class="absolute w-screen static z-1 flex">
                    <div class="basis-1/4 h-screen bg-white opacity-[.85]">
{{--                        <div class="h-[31%]">--}}
{{--                            <div class="h-[66%] w-full bg-white opacity-[.5]"></div>--}}
{{--                            <div class="h-[30%] w-full bg-transparent border-4 border-orange-600"></div>--}}
{{--                            <div class="h-[4%] w-full bg-white opacity-[.5]"></div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white opacity-[.5] h-[63%]"></div>--}}
{{--                        <div class="bg-white opacity-[.95] h-[2.55%]"></div>--}}
{{--                        <div class="flex h-[3%] w-full">--}}
{{--                            <div class="bg-white opacity-[.95] w-[53%] "></div>--}}
{{--                            <div class="bg-white opacity-[.5] w-[47%]"></div>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white opacity-[.95] h-[0.45%]"></div>--}}
                    </div>
                    <div class="basis-3/4 h-screen bg-transparent">
                        <div class="h-full w-full">
                            <div class="absolute z-2 mt-[10.75%] ml-[19%] border-4 border-orange-500 h-[61%] w-[18.5%] bg-transparent animate-pulse"></div>
                            <div class="mt-[45%] ml-[24.5%] absolute grid grid-auto-rows text-center text-lg text-orange-500 font-bold">
                                <div class="animate-bounce"><i class="fa-solid fa-arrow-up"></i></div>
                                <div>AI Predictions</div>
                            </div>
                            <div class="absolute z-2 mt-[10.75%] ml-[37.5%] border-4 border-orange-500 h-[61%] w-[19%] bg-transparent animate-pulse"></div>
                            <div class="mt-[45%] ml-[40%] absolute grid grid-auto-rows text-center text-lg text-orange-500 font-bold">
                                <div class="animate-bounce"><i class="fa-solid fa-arrow-up"></i></div>
                                <div>AI Model Performance Metrics</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[50rem]">
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">7/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
{{--                            <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                                <div class="text-xl font-bold">--}}
{{--                                    Instructions--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Body -->
                            <div class="p-4 pb-2">
                                <div class="indent-4">
                                    This screen presents AI-generated predictions for the patient, displayed as probabilities.
                                    Each prediction is accompanied by model performance metrics on the right.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <button id="previous_instructions"
                                        wire:click="previous_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                </button>
                                <button id="next_instructions"
                                        wire:click="next_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @break

        @case(8)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div>{{ $this->emitTo('sid2302.mainview', 'showComparison') }}</div>
                <div class="absolute w-screen static z-1 flex">
                    <div class="basis-1/4 h-screen bg-white opacity-[.85]"></div>
                    <div class="basis-3/4 h-screen bg-transparent border-4 border-orange-600"></div>
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed top-[22%] left-[0.75%] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[30rem]">
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">8/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="p-4">
                                <div class="indent-4 mb-4">
                                    This screen mirrors the prior one in content but also includes additional data for a
                                    comparative patient. Patients are ranked from most similar to least within the table
                                    in the top row.
                                </div>
                                <div class="indent-4 mb-2 pt-1 border-t border-dashed border-slate-500">
                                    <i class="fa-solid fa-arrow-pointer pe-2"></i>Select the corresponding table row to refresh the screen with the
                                    comparative patient information and prediction models.
                                </div>
                                <div class="indent-4 mb-2">
                                    <i class="fa-solid fa-arrow-pointer pe-2"></i>Select the desired rows in the comparison patient imaging table to view the
                                    comparison patient's radiographic images. This action will update the Barco monitor
                                    on your right side accordingly.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <button id="previous_instructions"
                                        wire:click="previous_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                </button>
                                <button id="next_instructions"
                                        wire:click="next_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break

        @case(9)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div class="absolute w-screen static z-1 flex">
                    <div class="basis-1/4 h-screen bg-white opacity-[.85]"></div>
                    <div class="basis-3/4 h-screen bg-transparent">
                        <div class="fixed top-[32%] left-[45.5%] border-4 border-orange-600 h-[36%] w-[34%] animate-pulse"></div>
                    </div>
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed top-[8%] left-[50%] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[30rem]">
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">9/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
{{--                            <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                                <div class="text-xl font-bold">--}}
{{--                                    Instructions--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Body -->
                            <div class="p-4">
                                <div>{{ $this->emitTo('sid2302.mainview', 'showTaskSurvey') }}</div>
                                <div class="indent-4 mb-2">
                                    After each patient you will be asked to provide your perceived confidence and difficulty.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <button id="previous_instructions"
                                        wire:click="previous_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                </button>
                                <button id="next_instructions"
                                        wire:click="next_instruction_slide"
                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                    Next<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break

        @case(10)
            <div>
                <div class="absolute static z-0 w-screen h-screen">
                    <livewire:sid2302.session.ui />
                </div>
                <div class="absolute w-screen static z-1 flex bg-white opacity-[.85] h-screen">
{{--                    <div class="basis-1/4 h-screen bg-white opacity-[.85]"></div>--}}
{{--                    <div class="basis-3/4 h-screen bg-transparent border-4 border-orange-600"></div>--}}
                </div>
                <div class="absolute static z-2 w-screen h-screen">
                    <div class="flex justify-center content-center">
                        <div class="fixed top-[25%] left-[45%] bg-white border-2 border-slate-500 rounded-lg shadow-lg p-4 w-[35rem]">
                            <!-- Header -->
                            <!-- Header -->
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700">Study Instructions</span>
                                    <span class="text-sm font-medium text-blue-700">10/10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gradient-to-b from-blue-500 via-sky-300 to-blue-500 h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
{{--                            <div class="flex justify-center bg-gradient-to-br from-slate-200 to-slate-300 mb-2 border border-slate-400">--}}
{{--                                <div class="text-xl font-bold">--}}
{{--                                    Instructions--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <!-- Body -->
                            <div class="p-4">
                                <div class="indent-4 mb-2">
                                    At the end of the session, there is a final closing survey regarding the usability of the software.
                                </div>
                                <div class="indent-4 mb-2">
                                    Instructions can be replayed, or you are welcome to ask Eric Prince if you have any questions during the study.
                                </div>
                                <div class="text-center border border-slate-400 py-2 font-medium mt-2">
                                    If you are ready to continue, press Begin.
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-2 my-4"></div>

                            <!-- Footer -->
                            <div class="flex justify-between">
                                <div>
                                    <button id="previous_instructions"
                                            wire:click="previous_instruction_slide"
                                            class="btn bg-gradient-to-br from-sky-300 to-sky-400 hover:from-sky-400 hover:to-sky-300 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                        <span class="pe-2"><i class="fa-solid fa-caret-left"></i></span>Previous
                                    </button>
                                    <button id="replay_instructions"
                                            wire:click="replay_instructions"
                                            class="btn bg-gradient-to-br from-purple-400 to-purple-500 hover:from-purple-500 hover:to-fuschia-500 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">
                                        Replay<span class="ps-2"><i class="fa-solid fa-rotate-left active:animate-spin"></i></span>
                                    </button>
                                </div>

                                <button id="beginStudy"
                                        wire:click="nextscene"
                                        class="btn bg-gradient-to-br from-green-400 to-green-500 hover:from-green-500 hover:to-green-400 text-zinc-50
                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1 animate-pulse">
                                    Begin<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>
                                </button>
                            </div>
{{--                            <!-- Footer -->--}}
{{--                            <div class="flex justify-end">--}}
{{--                                <button wire:click="replay_instructions"--}}
{{--                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50--}}
{{--                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">--}}
{{--                                    Replay<span class="ps-2"><i class="fa-solid fa-rotate-left"></i></span>--}}
{{--                                </button>--}}
{{--                                <button wire:click="previous_instruction_slide"--}}
{{--                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50--}}
{{--                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">--}}
{{--                                    <span class="pe-2"><i class="fa-solid fa-caret-right"></i></span>Previous--}}
{{--                                </button>--}}
{{--                                <button wire:click="nextscene"--}}
{{--                                        class="btn bg-gradient-to-br from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-400 text-zinc-50--}}
{{--                        border border-2 border-slate-500 font-medium rounded-lg px-2 py-1">--}}
{{--                                    Begin<span class="ps-2"><i class="fa-solid fa-caret-right"></i></span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            @break


    @endswitch



{{--    <div class="basis-3/4 h-full bg-[#f7fbff] content-center">--}}
{{--        <div class="ms-16 mt-96 px-4 py-10 border border-gray-900 shadow-lg rounded-lg w-1/4 bg-white">--}}
{{--            <div class="text-lg font-semibold mx-4">--}}
{{--                Your goal is to identify the characteristics shown in the form to the left.--}}
{{--            </div>--}}
{{--            <div class="flex justify-end mt-8">--}}
{{--                <button wire:click="nextscene"--}}
{{--                        class="bg-blue-500 py-2 px-4 text-lg font-semibold rounded border-2 border-blue-900">Next</button>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

</div>