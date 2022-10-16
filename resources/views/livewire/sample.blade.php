<div wire:ignore.self
    class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"
    id="sampleModal"
    {{--    wire:model="#"--}}
>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!--
          Background overlay, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!--
          Modal panel, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
        <div class="relative inline-block align-bottom bg-white rounded-lg text-left
        overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full pl-5 pr-5">

            <!-- Body -->
            <h1 class="text-2xl text-center mt-6 tracking-tight leading-10 font-extrabold
            text-gray-900 sm:text-1xl sm:leading-none md:text-1xl pb-5">Add New Sample</h1>

            <form>
                <h1 class="text-md text-gray-500 mt-5 pl-2">Basic Info</h1>
                <hr class="border border-gray-300 border-4">
                <div class="grid grid-cols-2 grid-rows-1 mt-5">

                    <!-- Sample ID -->
                    <div class="flex justify-left">
                        <div class="mb-3 xl:w-96">
                            <label for="exampleText0"
                                   class="form-label inline-block mb-2 text-gray-700">Primary Identification Number
                                (PIN)</label>
                            <input
                                wire:model="sample.primary_id"
                                name="primary_id"
                                type="text"
                                class="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="primary_id"
                                placeholder="Enter PIN"
                            />
                        </div>
                    </div>
                    <!-- END Sample ID -->

                    <!-- Alternate ID -->
                    <div class="flex justify-left self-end pl-2">
                        <div class="mb-3 xl:w-96">
                            <label for="exampleText0"
                                   class="form-label inline-block mb-2 text-gray-700">Alternate ID (AID)</label>
                            <input
                                wire:model="sample.alternate_id"
                                type="text"
                                class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="input_alternate_id"
                                placeholder="Enter AID (optional)"
                            />
                        </div>
                    </div>
                    <!-- END Alternate ID -->
                </div>


                <!-- METADATA SECTION -->
                <h1 class="text-md text-gray-500 mt-5 pl-2">Metadata</h1>
                <hr class="border border-gray-300 border-4">

                <div class="grid grid-cols-2 grid-flow-row">
                    <!-- Diagnosis/Description -->
                    <div class="flex justify-left">
                        <div class="mb-3 xl:w-96">
                            <label for="exampleText0"
                                   class="form-label inline-block mb-2 text-gray-700">Diagnosis</label>
                            <input
                                {{--                        wire:model="sample.alternate_id"--}}
                                type="text"
                                class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="input_description_id"
                                placeholder="Diagnosis"
                            />
                        </div>
                    </div>
                    <!-- END Diagnosis/Description -->

                    <!-- Sex -->
                    <div class="grid grid-cols-1 grid-rows-2 justify-center">
                        <h1 class="text-center">Sex</h1>
                        <div class="mb-3 xl:w-96 text-center">
                            <input type="radio" value="Female" id="female" name="sample_sex">
                            <label for="female">Female</label>
                            <input type="radio" value="Male" id="Male" name="sample_sex">
                            <label for="male">Male</label>
                        </div>
                    </div>
                    <!-- END Sex -->

                    <!-- Description -->
                    <div class="grid grid-cols-1 grid-flow-row">
                        <label for="sample_description">Description</label>
                        <textarea id="sample_description"
                                  class="border border-solid border-gray-300 rounded-lg"></textarea>
                    </div>

                </div>
                <!-- END METADATA SECTION -->

                <!-- IMAGING -->
                <h1 class="text-md text-gray-500 mt-10 pl-2">Imaging</h1>
                <hr class="border border-gray-300 border-4">

                <!-- DICOM Upload -->
                <livewire:dicom-data />
                <!-- END DICOM Upload -->
                <!-- END IMAGING -->

                <hr class="border border-gray-300 border-4 mt-10">
                <div class="flex flex-row justify-end bg-gray-50 px-4 py-5 sm:px-6 sm:flex sm:flex-row">

                    <div class="divide-y divide-solid divide-black"></div>

                    <!-- Submission Button -->
                    <button type="submit"
                            class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white
                     transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md
                     hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo
                     active:bg-indigo-700 cursor-pointer" wire:click="saveSample">Submit
                    </button>
                    <!-- END Submission Button -->

                    <button type="button"
                            id="cancel-sample-modal"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm
                            px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none
                         focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Cancel
                    </button>
                </div>


            </form>


        </div>
    </div>
</div>
</div>

