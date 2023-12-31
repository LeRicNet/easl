<div class="flex flex-row h-screen static">
    <!-- Container for content -->

    <!-- Left Sidebar: Tasks -->
    <livewire:sid2302.sidebar />

    <div class="basis-3/4 h-full bg-[#f7fbff] content-center">
        <div class="ms-16 mt-96 px-4 py-10 border border-gray-900 shadow-lg rounded-lg w-1/4 bg-white">
            <div class="text-lg font-semibold mx-4">
                Your goal is to identify the characteristics shown in the form to the left.
            </div>
            <div class="flex justify-end mt-8">
                <button wire:click="nextscene"
                        class="bg-blue-500 py-2 px-4 text-lg font-semibold rounded border-2 border-blue-900">Next</button>
            </div>

        </div>
    </div>

</div>