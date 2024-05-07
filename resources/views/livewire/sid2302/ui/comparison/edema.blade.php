<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="flex flex-row gap-1 bg-transparent">
        <div @class([
        "basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 border-slate-600 bg-white shadow p-1 items-center"])>
            <div class="basis-1/2 text-lg font-bold text-center">Edema</div>
            <div class="basis-1/2 border-l-2 border-gray-300 ps-2">
                <div class="grid grid-auto-rows gap-1 text-lg text-center content-center">
                    <div>
                        Hyptohalamic
                    </div>
                    <div>
                        Optic Tract
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
                    <livewire:sid2302.utils.barchart2 feature="hypoedema_1" mode="target" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="chiasmedema_1" mode="target" />
                </div>
            </div>
        </div>

        <div @class([
        "hidden" => $show_comparison,
        "basis-1/4 flex border-2 border-slate-600 bg-white shadow p-1 justify-center"
        ])>
            <div class="grid grid-auto-rows gap-1 text-lg content-center">
                <div>
                    <livewire:sid2302.utils.barchart2 feature="hypoedema_1" mode="comparison" />
                </div>
                <div>
                    <livewire:sid2302.utils.barchart2 feature="chiasmedema_1" mode="comparison" />
                </div>
            </div>
        </div>

        <div @class(["basis-1/4" => ! $show_comparison,
        "basis-1/3" => $show_comparison,
        "flex border-2 border-slate-600 bg-white shadow p-1 justify-center"])>
            <div class="grid grid-auto-rows gap-2 content-center w-full">
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="hypothalamicedema" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="hypothalamicedema" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="hypothalamicedema" metric="weighted_recall" />
                    </div>
                </div>
                <div class="flex gap-1">
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="chiasmedema" metric="accuracy" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="chiasmedema" metric="weighted_precision" />
                    </div>
                    <div class="basis-1/3">
                        <livewire:sid2302.utils.model-performance-icon feature="chiasmedema" metric="weighted_recall" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
