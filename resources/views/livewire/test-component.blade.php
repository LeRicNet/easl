<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <div class="grid grid-cols-1 grid-rows-3 border border-solid m-5 p-2">
        <div>
            <form wire:submit.prevent="save">
                <input type="file" wire:model="dicoms" multiple>

                @error('dicoms.*') <span class="error">{{ $message }}</span> @enderror
            </form>
        </div>

        <div>
            <label for="dicomDataId">Dataset Name:</label>
            <input class="border border-solid"
                   type="text" id="dicomDataId"
                   name="dicomDataId" wire:model="dicomDataId" required>

            <button class="border border-solid rounded-xl
             bg-blue-100 pt-1 pb-1 pr-2 pl-2
             hover:bg-blue-200 hover:border-gray-500"
                    type="submit" wire:click="save">Upload</button>
        </div>

        <div>
            <table>
                <tr>
                    <th>Dataset</th>
                    <th>Attach</th>
                </tr>
                @foreach($data_dirs as $data_dir)
                    <tr>
                        <td>{{ $data_dir }}</td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </div>

</div>
