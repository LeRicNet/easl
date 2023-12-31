<div class="basis-1/4 h-full grid bg-white p-1 overflow-y-auto rounded-r-xl border-2 border-slate-950">
    <!-- Left Sidebar: Tasks -->
    <div class="bg-white">

        <livewire:sid2302.target-patient-header />

        <livewire:sid2302.patient-image-table />

        <!-- Divider -->
        <div class="border-t mt-4 mb-4"></div>

        <!-- AI Buttons -->
        <div class="mb-4">
            <div class="flex justify-center items-center gap-x-2">

                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden
                 text font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500
                 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white focus:ring-4
                 focus:outline-none focus:ring-cyan-200" wire:click="autocomplete">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white
                    rounded-md group-hover:bg-opacity-0">
                    Auto-Complete Form
                    </span>
                </button>

                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden
                 text font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400
                  group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white focus:ring-4
                  focus:outline-none focus:ring-pink-200">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white
                     rounded-md group-hover:bg-opacity-0" wire:click="showcomparison">
                    Compare Patients
                    </span>
                </button>

            </div>
        </div>

        <!-- Divider -->
        <div class="border-t my-4"></div>

        <!-- Form -->
        <div class="border-2 border-gray-300">
            @livewire('sid2302.feature-form', [
                'autocomplete' => false
            ])
        </div>

        
    </div>

    <!-- Footer -->
    <div class="content-end mb-0 pb-0">
        <!-- Trial Progress Bar -->
        <div class="flex justify-between mb-1">
            <span class="text-xs font-medium text-blue-700">{{ $current_patient }}</span>
            <span class="text-xs font-medium text-blue-700">10%</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%"></div>
        </div>

        <div class="flex justify-center items-center gap-x-1 pt-1">
            <button wire:click="previouspatient"
                    class="flex flex-grow border border-gray-900 justify-center text-lg">Previous</button>
            <button wire:click="nextpatient"
                    class="flex flex-grow border border-gray-900 justify-center text-lg">Next</button>
        </div>
    </div>

</div>