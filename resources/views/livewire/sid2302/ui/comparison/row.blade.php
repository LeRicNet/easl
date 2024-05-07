<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-row gap-1 bg-transparent">
        <div class="basis-1/4 flex ps-4 border-2 border-slate-600 bg-white shadow p-2 items-center">
            <div class="basis-1/2 text-lg font-bold text-center">Invasion/Involvement (Other)</div>
            <div class="basis-1/2 border-l-2 border-gray-300 ps-2">
                <div class="grid grid-auto-rows gap-2 text-lg text-center">
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

        <div class="basis-1/4 flex border-2 border-slate-600 bg-white shadow p-2 justify-center">
            <div class="grid grid-auto-rows gap-2 text-lg">
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

        <div class="basis-1/4 flex border-2 border-slate-600 bg-white shadow p-2 justify-center">
            <div class="grid grid-auto-rows gap-2 text-lg">
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

        <div class="basis-1/4 flex border-2 border-slate-600 bg-white shadow p-2 justify-center">
            <div class="grid grid-auto-rows gap-2 text-lg">
                <div>
                    MISSING
                </div>
                <div>
                    MISSING
                </div>
                <div>
                    MISSING
                </div>
            </div>
        </div>

    </div>
</div>
