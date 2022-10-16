<div class="grid grid-cols-1 grid-flow-row pt-3">
    <table class="table table-striped border border-top border-solid border-black border-8">
        <thead class="border border-bottom border-solid border-black border-4">
        <tr>
            <th></th>
            <th>PIN</th>
            <th>Alternate IDs</th>
            <th>Metadata</th>
            <th>Images</th>
        </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Sample::all() as $sample)
                <tr class="justify-content-center">
                    <td class="text-center"><input type="checkbox" /></td>
                    <td class="text-center">{{ $sample->primary_id }}</td>
                    <td class="text-center">{{ $sample->alternate_id }}</td>

                    <td class="text-center">
                        <button class="bg-blue-500 text-white w-72
                    border border-solid border-black shadow m-1 p-1 pl-2 pr-2 rounded">
                            View
                        </button>
                        <button class="bg-red-500 text-white
                    border border-solid border-black shadow m-1 p-1 pl-3 pr-3 rounded">
                            Edit
                        </button></td>

                    <td class="text-center">
                        <button class="bg-blue-500 text-white w-72
                    border border-solid border-black shadow m-1 p-1 pl-2 pr-2 rounded">
                            View
                        </button>
                        <button class="bg-red-500 text-white
                    border border-solid border-black shadow m-1 p-1 pl-3 pr-3 rounded">
                            Edit
                        </button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
