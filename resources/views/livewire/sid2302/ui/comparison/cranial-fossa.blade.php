<div>
    {{-- Stop trying to control. --}}
    <div class="flex flex-row gap-1 bg-transparent">
        <div @class([
        "basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 rounded-bl-lg border-slate-600 bg-white shadow p-1 items-center"])>
            <div class="basis-2/5 text-lg font-bold text-center">Cranial Fossa Involvement</div>
            <div class="basis-3/5 border-l-2 border-gray-300 ps-2">
                <div class="grid grid-auto-rows gap-1 text-lg text-center content-center">
                    <div>
                        Anterior Cranial Fossa
                    </div>
                    <div>
                        Middle Cranial Fossa
                    </div>
                    <div>
                        Posterior Cranial Fossa
                    </div>
                </div>
            </div>
        </div>

        <div @class([
        "basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 border-slate-600 bg-white shadow p-1 justify-center"])>
            <div class="grid grid-auto-rows gap-1 text-lg content-center">
                <div>
                    <livewire:sid2302.utils.barchart2 feature="acf_1" mode="target" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="mcf_1" mode="target" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="pcf_1" mode="target" />
                </div>
            </div>
        </div>

        <div @class([
        "hidden" => $show_comparison,
         "basis-1/4 flex border-2 border-slate-600 bg-white shadow p-1 justify-center"
        ])>
            <div class="grid grid-auto-rows gap-1 text-lg content-center">
                <div>
                    <livewire:sid2302.utils.barchart2 feature="acf_1" mode="comparison" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="mcf_1" mode="comparison" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="pcf_1" mode="comparison" />
                </div>
            </div>
        </div>

        <div @class(["basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 rounded-br-lg border-slate-600 bg-white shadow p-1 justify-center"])>
            <div class="grid grid-auto-rows gap-2 content-center w-full">
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="acf" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="acf" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="acf" metric="weighted_recall" />
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="mcf" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="mcf" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="mcf" metric="weighted_recall" />
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="pcf" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="pcf" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="pcf" metric="weighted_recall" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
