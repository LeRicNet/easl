<div>
    {{-- Stop trying to control. --}}
    <div class="flex flex-row gap-1 bg-transparent">
        <div @class([
        "basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 border-slate-600 bg-white shadow p-1 items-center"])>
            <div class="basis-3/5 text-lg font-bold text-center">Invasion/Involvement (Other)</div>
            <div class="basis-2/5 border-l-2 border-gray-300 ps-2">
                <div class="grid grid-auto-rows gap-1 text-lg text-center">
                    <div>
                        Skullbase
                    </div>
                    <div>
                        Mamillary Body
                    </div>
                    <div>
                        Optic Chiasm
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
                    <livewire:sid2302.utils.barchart2 feature="skullbase_1" mode="target" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="mamillarybody_1" mode="target" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="opticchiasm_1" mode="target" />
                </div>
            </div>
        </div>

        <div @class([
        "hidden" => $show_comparison,
        "basis-1/4 flex border-2 border-slate-600 bg-white shadow p-1 justify-center"
        ])>
            <div class="grid grid-auto-rows gap-1 text-lg content-center">
                <div>
                    <livewire:sid2302.utils.barchart2 feature="skullbase_1" mode="comparison" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="mamillarybody_1" mode="comparison" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="opticchiasm_1" mode="comparison" />
                </div>
            </div>
        </div>

        <div @class(["basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 border-slate-600 bg-white shadow p-1 justify-center"])>
            <div class="grid grid-auto-rows gap-2 content-center w-full">
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="skullbaseinvasion" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="skullbaseinvasion" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="skullbaseinvasion" metric="weighted_recall" />
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="mamillarybody" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="mamillarybody" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="mamillarybody" metric="weighted_recall" />
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="opticchiasm" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="opticchiasm" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="opticchiasm" metric="weighted_recall" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
