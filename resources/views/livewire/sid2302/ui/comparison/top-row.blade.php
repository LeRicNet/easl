<div class="flex grid grid-cols-12 border-2 border-slate-500 rounded shadow-xl h-full items-center bg-gradient-to-r from-orange-100 to-orange-200">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

        <div class="col-span-7">
            <div class="ps-1">
                <div class="text-slate-600 text-sm font-medium ps-2 py-1">
                    The table below displays previously observed patients ranked from most to least similar.
                </div>
{{--                <livewire:sid2302.ui.comparison.table2 hide-pagination />--}}
                <livewire:sid2302.utils.comparison-patient-table />
            </div>
        </div>

        <div class="col-span-5 grid grid-rows-2 h-full p-1 rounded-r bg-gradient-to-r from-orange-200 to-orange-100 content-center">

            <div class="bg-white border-2 border-slate-500 rounded flex mb-1">
                <livewire:sid2302.ui.comparison.comparison-patient-info />
            </div>

            <div class="overflow-y-auto">
{{--                <livewire:sid2302.ui.comparison.comparison-patient-image-table2 />--}}
                <livewire:sid2302.utils.comparison-patient-image-table />
            </div>


        </div>


</div>
