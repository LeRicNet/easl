<div>
    <div class="container mx-auto px-4 pt-3">

            <h2 class="text-2xl font-bold">Database</h2>
            <p class="text-gray-600">Add, edit, and explore the database.</p>

        <div class="flex flex-row justify-end">
            <button id="open-sample-modal" class="basis-1/4 bg-green-500 text-lg font-bold text-center text-white
                    border border-solid border-black shadow m-1 p-2 pr-3 pl-3 rounded-lg shadow-lg"
                    type="button">New Entry</button>
            <button class=" basis-1/4 bg-gray-500 text-lg text-center text-white
                    shadow m-1 p-2 pr-3 pl-3 rounded-lg shadow-lg">Export Manifest</button>
        </div>

        <livewire:database-table />

        <!-- View DICOM -->
{{--        <livewire:dicom-data />--}}
{{--        <livewire:sample-dicom-viewer />--}}

        <!-- Successful Save Graphic -->
        @if($saveSuccess)
            <div class="rounded-md bg-green-100 rounded-lg p-4 pt-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Successfully Saved Sample</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>Your new sample has been saved.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- END Successful Save Graphic -->

        <!-- Modals -->
        <livewire:sample />
{{--        <x-sample></x-sample>--}}

        <!-- Sample Modal Functionality -->
        <script>
            let sample_modal = document.getElementById("sampleModal");
            let open_sample_modal = document.getElementById("open-sample-modal");
            let cancel_sample_modal = document.getElementById("cancel-sample-modal");

            open_sample_modal.onclick = function() {
                sample_modal.style.display = 'block';
            }

            cancel_sample_modal.onclick = function(event) {
                event.preventDefault();
                sample_modal.style.display = 'none';
            }
            //
            // window.onclick = function(event) {
            //     if (event.target === sample_modal) {
            //         sample_modal.style.display = "none";
            //     }
            // }

        </script>
        <!-- END Sample Modal Functionality -->

    </div>
</div>
