<div class="flex border-2 border-slate-500
bg-gradient-to-r from-slate-200 to-slate-300
rounded shadow-xl h-full">
    {{-- The whole world belongs to you. --}}

    <div class="grid grid-auto-rows gap-1 m-1 w-full content-start pt-4">

        <!-- Header -->
        <div class="flex font-medium text-slate-600">
            <div class="basis-1/4 self-center text-center">Features/Value</div>
            <div class="basis-1/4 self-center text-center">
                <div class="grid grid-auto-rows justify-center
                bg-white border border-blue-500 mx-20 shadow-inner
                text-blue-500 text-lg font-bold">
                    {{ $current_target_patient }}
                </div>
                Target Patient
            </div>
            <div class="basis-1/4 self-center text-center">
                <div class="grid grid-auto-rows justify-center
                bg-white border border-orange-500 mx-20 shadow-inner
                text-orange-500 text-lg font-bold">
                    {{ $current_comparison_patient }}
                </div>
                Comparison Patient
            </div>
            <div class="basis-1/4 ps-2 pe-4 items-center">
                <div class="grid grid-rows-2">
                    <div class="text-center border-dotted border-b border-slate-600">Model Performance</div>
                    <div class="grid grid-cols-3 text-center content-center items-center">
                        <div>Accuracy</div>
                        <div>Sensitivity</div>
                        <div>Specificity</div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="grid items-center grid-cols-12 h-20 font-medium text-slate-600">--}}
{{--            <div class="col-span-2 ps-4">--}}
{{--                <div class="text">Feature</div>--}}
{{--            </div>--}}
{{--            <div class="col-span-2 ps-2">--}}
{{--                <div class="text">Option</div>--}}
{{--            </div>--}}
{{--            <div class="col-span-2 ps-2">--}}
{{--                <div class="text">Predicted Value<br>(<span class="font-bold text-blue-500">Patient</span>)</div>--}}
{{--            </div>--}}
{{--            <div class="col-span-2 ps-2">--}}
{{--                <div class="text">Predicted Value<br>(<span class="font-bold text-orange-500">Comparison Patient</span>)</div>--}}
{{--            </div>--}}
{{--            <div class="col-span-2 ps-2">--}}
{{--                <div class="text">Actual Value<br>(<span class="font-bold text-orange-500">Comparison Patient</span>)</div>--}}
{{--            </div>--}}
{{--            <div class="col-span-2 grid grid-cols-3 ps-2">--}}
{{--                <div class="text -rotate-45">Accuracy</div>--}}
{{--                <div class="text -rotate-45">Sensitivity</div>--}}
{{--                <div class="text -rotate-45">Specificity</div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="grid grid-auto-rows gap-2 m-1 w-full content-start overflow-y-auto pe-2">

{{--            <!-- Test Row -->--}}
{{--            <livewire:sid2302.ui.comparison.row />--}}

            <!-- Tumor Location -->
            <livewire:sid2302.ui.comparison.tumor-location />

            <!-- Tumor Type -->
            <livewire:sid2302.ui.comparison.tumor-type />

            <!-- Hypothalamic Invasion/Involvement -->
            <livewire:sid2302.ui.comparison.hypo-invasion />

            <!-- Other Invasion/Involvement -->
            <livewire:sid2302.ui.comparison.other-invasion />

            <!-- Edema -->
            <livewire:sid2302.ui.comparison.edema />

            <!-- Cranial Fossa -->
            <livewire:sid2302.ui.comparison.cranial-fossa />

        </div>

    </div>
</div>
