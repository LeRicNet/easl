@extends('layouts.base-dashboard-component')
@section('content')

    <div class="border border-solid">
        Project Data
        <table class="table-bordered text-center">
            <tr>
                <th>Dataset Name</th>
                <th>Version</th>
                <th>Type</th>
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
                    m-1 pl-1 pr-1">
                        View
                    </div>
                </td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1">
                        Info
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
                    m-1 pl-1 pr-1">
                        View
                    </div>
                </td>
                <td>
                    <div class="border border-solid
                    border-gray-500 rounded shadow
                    m-1 pl-1 pr-1">
                        Info
                    </div>
                </td>
            </tr>
        </table>
    </div>

@endsection
