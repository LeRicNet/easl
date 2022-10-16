<div class="grid grid-rows-2 grid-cols-1">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <!-- DICOM File upload -->
    <div class="grid justify-left">
        <div class="mb-3 w-96 mt-5">
            <label for="formFileMultiple" class="form-label inline-block mb-2 text-gray-700">Select DICOM Files for Upload</label>
            <input class="form-control
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
                   type="file"
                   id="formFileMultiple"
                   wire:model="dicomDataset.files" multiple>
        </div>
    </div>
    <!-- End File Upload -->
</div>
