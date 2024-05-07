@extends('layouts.base-dashboard-component')
@section('content')

    <div class="border border-solid">
        <div>
            Project Data {{ $count }}
            <div style="text-align: center">
                <button type='submit' wire:click.prevent="increment">+</button>
            </div>
        </div>
        <table class="table-auto text-center align-content-center ml-1">
            <tr>
                <th class="border border-gray-500">Dataset Name</th>
                <th class="border border-gray-500">Version</th>
                <th class="border border-gray-500">Type</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>ATPC50-MRI</td>
                <td>1</td>
                <td>DICOM</td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        View
                    </div>
                </td>
                <td>
                    <div style="text-align: center">
                        <button wire:click="increment">+</button>
                        <h1>{{ $count }}</h1>
{{--                        <button wire:click="view"--}}
{{--                                class="border border-solid--}}
{{--                    border-gray-500 rounded shadow--}}
{{--                    m-1 pl-1 pr-1--}}
{{--                    hover:bg-gray-200 hover:text-gray-800">--}}
{{--                            view--}}
{{--                        </button>--}}
{{--                        <h1>--}}
{{--                            {{ $count }}--}}
{{--                        </h1>--}}
                    </div>
                </td>
            </tr>
            <tr>
                <td>ATPC50-RNA</td>
                <td></td>
                <td>DESeq2 (RDS)</td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        View
                    </div>
                </td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        Info
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="border border-solid mt-5">
        Project Models
        <table class="table-auto text-center align-content-center ml-1">
            <tr>
                <th class="border border-gray-500">Name</th>
                <th class="border border-gray-500">Version</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>ACP-example</td>
                <td>1</td>
                <td></td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        View
                    </div>
                </td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        Info
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="border border-solid mt-5">
        Project Visualizations
        <table class="table-auto text-center align-content-center ml-1">
            <tr>
                <th class="border border-gray-500">Name</th>
                <th class="border border-gray-500">Version</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>TensorFlow WIT Example</td>
                <td>1</td>
                <td></td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        View
                    </div>
                </td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1
                    hover:bg-gray-200 hover:text-gray-800">
                        Info
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="border border-solid mt-5">
        <button class="button" onclick="logging('{{ storage_path('user1') }}')">Controller!</button>
    </div>

@endsection

<script>
    function logging(msg) {
        console.log(msg)
    }
</script>
