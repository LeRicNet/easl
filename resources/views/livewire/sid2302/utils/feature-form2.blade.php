<div class="h-full flex-grow overflow-y-auto p-1">
    <div class="m-1">
        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold">Tumor Location <span class="text-sm text-red-500">*required</span></div>
            <livewire:sid2302.utils.radio
                    option_group="tumor_location"
                    value_options="Suprasellar,Intrasellar,Mixed"
                    feature_keys="suprasellar,intrasellar,mixed_loc"
                    type="radio"
            />
        </div>
        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-4">Tumor Type <span class="text-sm text-red-500">*required</span></div>
            <livewire:sid2302.utils.radio
                    option_group="tumor_type"
                    value_options="Solid,Cystic,Mixed"
                    feature_keys="solid,cystic,mixed_type"
                    type="radio"
            />
        </div>
        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-2">Hypothalamic Invasion/Involvement <span class="text-sm text-red-500">*required</span></div>
            <livewire:sid2302.utils.radio
                    option_group="hypoinvasion"
                    value_options="Absent,Present"
                    feature_keys="hypothalamic_0,hypothalamic_1"
                    type="radio"
            />
        </div>
        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-2">Invasion/Involvement (Other)</div>
            <livewire:sid2302.utils.radio
                    option_group="skullbase_invasion_involvement"
                    value_options="Skullbase"
                    feature_keys="skullbase_1"
                    type="checkbox"
            />
            <livewire:sid2302.utils.radio
                    option_group="mamillarybody_invasion_involvement"
                    value_options="Mamillary Body"
                    feature_keys="mamillarybody_1"
                    type="checkbox"
            />
            <livewire:sid2302.utils.radio
                    option_group="opticchiasm_invasion_involvement"
                    value_options="Optic Chiasm"
                    feature_keys="opticchiasm_1"
                    type="checkbox"
            />
        </div>
        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-2">Edema</div>
            <livewire:sid2302.utils.radio
                    option_group="hypo_edema"
                    value_options="Hypothalamic"
                    feature_keys="hypoedema_1"
                    type="checkbox"
            />
            <livewire:sid2302.utils.radio
                    option_group="chiasm_edema"
                    value_options="Optic Tract"
                    feature_keys="chiasmedema_1"
                    type="checkbox"
            />
        </div>
        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-2">Cranial Fossa Involvement</div>
            <livewire:sid2302.utils.radio
                    option_group="acf_involvement"
                    value_options="Anterior Cranial Fossa"
                    feature_keys="acf_1"
                    type="checkbox"
            />
            <livewire:sid2302.utils.radio
                    option_group="mcf_involvement"
                    value_options="Middle Cranial Fossa"
                    feature_keys="mcf_1"
                    type="checkbox"
            />
            <livewire:sid2302.utils.radio
                    option_group="pcf_involvement"
                    value_options="Posterior Cranial Fossa"
                    feature_keys="pcf_1"
                    type="checkbox"
            />
        </div>
    </div>
</div>