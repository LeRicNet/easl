<div>
{{--     To attain knowledge, add things every day; To attain wisdom, subtract things every day.--}}

    <div class="text text-white bg-gray-900 pl-2 pt-1 pb-1">DICOM Database</div>

    <div class="border border-solid m-2 p-2">
        <div class="pl-2">
            <form wire:submit.prevent="save">
                <input type="file" wire:model="dicoms" multiple>

                @error('dicoms.*') <span class="error">{{ $message }}</span> @enderror
            </form>
        </div>

        <div class="pt-1 pl-2 pb-3">
            <label for="dicomDataId">Dataset Name:</label>
            <input class="border border-solid"
                   type="text" id="dicomDataId"
                   name="dicomDataId" wire:model="dicomDataId" required>

            <button class="border border-solid rounded-xl
             bg-blue-100 pt-0 pb-0 pr-2 pl-2
             hover:bg-blue-200 hover:border-gray-500"
                    type="submit" wire:click="save">Upload</button>
            <button class="border border-solid rounded-xl
             bg-green-100 pt-0 pb-0 pr-2 pl-2
             hover:bg-green-200 hover:border-gray-500"
                    type="submit">Activate</button>
        </div>

        <div class="pt-1 pl-2 border border-top border-solid">
            <table class="text-center table table-default">

                <thead>
                    <tr>
                        <th>Dataset</th>
                        <th>Attach</th>
                        <th>View</th>
                    </tr>
                </thead>

                @foreach($data_dirs as $data_dir)
                    <tr>
                        <td>{{ $data_dir }}</td>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>
                            <button class="text text-lg text-gray-300
                             fa fa-eye hover:text-gray-600"
                            wire:click="viewDataset('{{ $data_dir }}')"
                            onclick="window.open('http://140.226.123.129:3000', '_blank', 'modal=yes')" ></button>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>

{{--        <div>--}}
{{--            {{ $test_response }}--}}
{{--            <br>--}}
{{--            Path: {{ $file_path }}--}}
{{--            <br>--}}
{{--            Files in Dataset: {{ $files }}--}}
{{--            <br>--}}
{{--            File #1: {{ $test_file }}--}}
{{--        </div>--}}


    </div>

</div>
