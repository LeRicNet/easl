<div class="h-full flex-grow overflow-y-auto p-1">
    <div class="m-1">

        <!-- Tumor Location -->
{{--        <div class="mb-4">--}}
{{--            <div class="items-center gap-x-1 ms-1">--}}
{{--                @livewire('sid2302.utils.checkbox', [--}}
{{--                    'inputType' => 'radio',--}}
{{--                    'radioHeader' => 'Tumor Location',--}}
{{--                    'featureGroup' => 'location',--}}
{{--                    'featureDBKeys' => array('location_1', 'location_2', 'location_1'),--}}
{{--                    'options' => array('Suprasellar', 'Intrasellar', 'Mixed')--}}
{{--                ])--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-4">Tumor Location</div>
            @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'location',
                'feature' => 'Suprasellar',
                'featureDBKey' => 'location_1',
                'autocomplete' => $autocomplete
            ])
            @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'location',
                'feature' => 'Intrasellar',
                'featureDBKey' => 'location_2',
                'autocomplete' => $autocomplete
            ])
{{--            @livewire('sid2302.utils.checkbox', [--}}
{{--                'inputType' => 'checkbox',--}}
{{--                'featureGroup' => 'involvement',--}}
{{--                'feature' => 'Mixed',--}}
{{--                'featureDBKey' => 'location_3',--}}
{{--                'autocomplete' => $autocomplete--}}
{{--            ])--}}
        </div>

        <div class="mt-2 mb-2 ps-8 gap-y-4">
            <div class="text-lg font-bold pt-4">Hyptothalamic Invasion</div>
            @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'hypothalamicinvasion',
                'feature' => 'Absent',
                'featureDBKey' => 'hypothalamicinvasion_1',
                'autocomplete' => $autocomplete
            ])
            @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'hypothalamicinvasion',
                'feature' => 'Moderate',
                'featureDBKey' => 'hypothalamicinvasion_2',
                'autocomplete' => $autocomplete
            ])
            @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'hypothalamicinvasion',
                'feature' => 'Aggressive',
                'featureDBKey' => 'hypothalamicinvasion_3',
                'autocomplete' => $autocomplete
            ])
        </div>

        <!-- Tumor Location -->
        <div class="mb-4">
            <div class="text-lg font-bold ps-8 pt-4">Other Involvement/Invasion</div>
{{--            <div class="items-center gap-x-1 ms-1">--}}
{{--                @livewire('sid2302.utils.checkbox', [--}}
{{--                    'inputType' => 'radio',--}}
{{--                    'radioHeader' => 'Hypothalamic Invasion',--}}
{{--                    'featureGroup' => 'hypothalamicinvasion',--}}
{{--                    'featureDBKeys' => array('hypothalamicinvasion_1', 'hypothalamicinvasion_2', 'hypothalamicinvasion_3'),--}}
{{--                    'options' => array('Absent', 'Moderate', 'Aggressive')--}}
{{--                ])--}}
{{--            </div>--}}

            <div class="mt-2 mb-2 ps-8 gap-y-4">
                @livewire('sid2302.utils.checkbox', [
                    'inputType' => 'checkbox',
                    'featureGroup' => 'involvement',
                    'feature' => 'Edema of Hypothalamus',
                    'featureDBKey' => 'hypothalamicedema_2',
                    'autocomplete' => $autocomplete
                ])

                @livewire('sid2302.utils.checkbox', [
                    'inputType' => 'checkbox',
                    'featureGroup' => 'involvement',
                    'feature' => 'Mamillary Body',
                    'featureDBKey' => 'mamillarybody_2',
                    'autocomplete' => $autocomplete
                ])
            </div>

            <div class="mt-2 mb-2 ps-8 gap-y-4">
                @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'involvement',
                'feature' => 'Optic Chiasm',
                'featureDBKey' => 'opticchiasm_2',
                'autocomplete' => $autocomplete
                ])

                @livewire('sid2302.utils.checkbox', [
                'inputType' => 'checkbox',
                'featureGroup' => 'involvement',
                'feature' => 'Chiasm Edema',
                'featureDBKey' => 'chiasmedema_2',
                'autocomplete' => $autocomplete
                ])
            </div>

            <div class="mt-2 mb-2 ps-8 gap-y-4">
                @livewire('sid2302.utils.checkbox', [
                    'inputType' => 'checkbox',
                    'featureGroup' => 'involvement',
                    'feature' => 'Anterior Cranial Fossa',
                    'featureDBKey' => 'acf_2',
                    'autocomplete' => $autocomplete
                ])
                @livewire('sid2302.utils.checkbox', [
                    'inputType' => 'checkbox',
                    'featureGroup' => 'involvement',
                    'feature' => 'Middle Cranial Fossa',
                    'featureDBKey' => 'mcf_2',
                    'autocomplete' => $autocomplete
                ])
                @livewire('sid2302.utils.checkbox', [
                    'inputType' => 'checkbox',
                    'featureGroup' => 'involvement',
                    'feature' => 'Posterior Cranial Fossa',
                    'featureDBKey' => 'pcf_2',
                    'autocomplete' => $autocomplete
                ])
            </div>

        </div>

{{--        <div class="mb-4">--}}
{{--            <div class="items-center gap-x-1 ms-1">--}}
{{--                @livewire('sid2302.utils.checkbox', [--}}
{{--                'inputType' => 'radio',--}}
{{--                'radioHeader' => 'Anterior Cranial Fossa',--}}
{{--                'featureGroup' => 'acf',--}}
{{--                'featureDBKeys' => array('acf_1'),--}}
{{--                'options' => array('')--}}
{{--                ])--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="border-t my-4"></div>


{{--        <!-- Impression: Radiographic Findings -->--}}
{{--        <div class="mb-4">--}}
{{--            <div class="flex items-center mb-4 border border-slate-200 rounded">--}}
{{--                <div class="items-center ms-2">Tumor Location</div>--}}
{{--                <div class="items-center gap-x-1 ms-1">--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'location',--}}
{{--                        'feature' => 'Suprasellar',--}}
{{--                        'featureDBKey' => 'location_1',--}}
{{--                        'predictionDisagreement' => true--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'location',--}}
{{--                        'feature' => 'Intrasellar'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'location',--}}
{{--                        'feature' => 'Mixed',--}}
{{--                        'featureDBKey' => 'location_2',--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                    'featureGroup' => 'location',--}}
{{--                    'feature' => 'Skullbase Invasion'--}}
{{--                    ])--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex items-center mb-4 border border-slate-200 rounded">--}}
{{--                <div class="items-center ms-2">Tumor Involvement/Invasion</div>--}}
{{--                <div class="items-center gap-x-1 ms-1">--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Hypothalamus'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Edema of hypothalamus'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Mamillary Body'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Optic Chiasm'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Edema of chiasm and/or tracts'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Anterior Cranial Fossa'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Middle Cranial Fossa'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'involvement',--}}
{{--                        'feature' => 'Posterior Cranial Fossa/Retroclival'--}}
{{--                    ])--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex items-center mb-4 border border-slate-200 rounded">--}}
{{--                <div class="items-center ms-2">Tumor Characteristics</div>--}}
{{--                <div class="items-center gap-x-1 ms-1">--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'characteristics',--}}
{{--                        'feature' => 'Cystic'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'location',--}}
{{--                        'feature' => 'Solid'--}}
{{--                    ])--}}
{{--                    @livewire('sid2302.utils.checkbox', [--}}
{{--                        'featureGroup' => 'location',--}}
{{--                        'feature' => 'Mixed'--}}
{{--                    ])--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Divider -->--}}
{{--    <div class="border-t my-4"></div>--}}

{{--    <!-- Save Buttom -->--}}
{{--    <div class="mb-4">--}}

{{--        <div class="flex justify-end mt-6">--}}
{{--            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save--}}
{{--            </button>--}}
{{--        </div>--}}

    </div>
</div>