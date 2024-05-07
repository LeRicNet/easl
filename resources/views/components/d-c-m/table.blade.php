<div
    class="m-2
shadow
border border-3 border-solid
overflow-scroll">

    <div class="row">
        <div class="col-4" style="margin-top: 5px; margin-bottom: 5px;">
            <div class="btn-group m-2" role="group" aria-label="dicom-level-toggle"
                style="border: solid #71797E 1px; border-radius: 6px;">
{{--                <button type="button" class="btn btn-light" style="border: solid #71797E 1px;">Patients</button>--}}
{{--                <button type="button" class="btn btn-light" style="border: solid #71797E 1px;">Studies</button>--}}
{{--                <button type="button" class="btn btn-light" style="border: solid #71797E 1px;">Studies</button>--}}
                <button type="button" class="btn btn-light" style="border: solid #71797E 1px;" name="dicom_series">Series</button>
                <button type="button" class="btn btn-secondary" style="border: solid #71797E 1px;" name="dicom_instances">Instances</button>
            </div>
        </div>
        <div class="col-8">

{{--            BEGIN SUMMARY STATS--}}
            <x-atpc.primary-summary-stats />
{{--END SUMMARY STATS--}}
        </div>
    </div>

    <table id="dcm_table" class="table table-sm table-responsive table-condensed table-hover data-table">
        <thead>
                <tr>
                    <th>ATPC ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Institution</th>
                    <th>Modality</th>
                    <th>Protocol</th>
                    <th>Manufacturer</th>
                    <th>Series ID</th>
                    <th>Instance ID</th>
{{--                    <th><!-- Button Cell --></th>--}}
                </tr>
        </thead>
        <tbody>
            <!-- Intentionally Blank -->
        </tbody>
    </table>



{{--    <script>--}}
{{--        console.log('Hello from table.blade.php');--}}
{{--        let data_json = '{{ $dicom_entries }}';--}}
{{--        // console.log(data_json);--}}

{{--        let data_json_clean = '{{ $dicom_json }}';--}}
{{--        // console.log(data_json_clean);--}}

{{--        let data_json_clean_2 = "{{ $dicom_json }}";--}}
{{--        data_json_clean_2 = data_json_clean_2.replace("&quot;", "").replace("[", "").replace("]", "");--}}
{{--        data_json_clean_2 = JSON.stringify(data_json_clean_2);--}}
{{--        data_json_clean_2 = JSON.parse(data_json_clean_2);--}}
{{--        console.log(data_json_clean_2);--}}

{{--        //--}}
{{--        // console.log('Attempting to render DataTable')--}}
{{--        // $(document).ready( function () {--}}
{{--        //     $('#dcm_table').DataTable(--}}
{{--        //         {--}}
{{--        //             // Options--}}
{{--        //             // "serverSide": true,--}}
{{--        //             // "ajax": "xhr.php",--}}
{{--        //             data: data_json_clean_2,--}}
{{--        //             scrollCollapse: true,--}}
{{--        //             paging: false,--}}
{{--        //             columns: [{"defaultContent": ""}],--}}
{{--        //             serverSide: true--}}
{{--        //         }--}}
{{--        //     );--}}
{{--        // } );--}}
{{--    </script>--}}
        {{--var dataset = {{ json_encode($dicom_entries) }};--}}

        {{--console.log(dataset);--}}
        {{--$(document).ready( function () {--}}
        {{--    $('#dcm_table').DataTable(--}}
        {{--        {--}}
        {{--            // Options--}}
        {{--            // "serverSide": true,--}}
        {{--            // "ajax": "xhr.php",--}}
        {{--            data: {{ $dicom_entries }},--}}
        {{--            scrollCollapse: true,--}}
        {{--            paging: false--}}
        {{--        }--}}
        {{--    );--}}
        {{--} );--}}
</div>


<!-- Original Code ---
**********************
This implementation is causing the website to crash. My current guess is that rendering in
JavaScript will fix this problem
-->

{{--<div class="m-2--}}
{{--shadow--}}
{{--border border-3 border-solid--}}
{{--overflow-scroll", style="height: 500px;">--}}
{{--    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->--}}
{{--    <table id="myTable" class="table table-sm table-responsive table-condensed table-hover">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>ATPC ID</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Gender</th>--}}
{{--            <th>Institution</th>--}}
{{--            <th>Modality</th>--}}
{{--            <th>Protocol</th>--}}
{{--            <th>Manufacturer</th>--}}
{{--            <th>Series ID</th>--}}
{{--            <th><!-- Button Cell --></th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}

{{--        @foreach($dicom_entries as $entry)--}}
{{--            <tr>--}}
{{--                <td>{{ $entry->PatientID }}</td>--}}
{{--                <td>{{ $entry->PatientName }}</td>--}}
{{--                <td>{{ $entry->PatientSex }}</td>--}}
{{--                <td>{{ $entry->InstitutionName }}</td>--}}
{{--                <td>{{ $entry->modality }}</td>--}}
{{--                <td>{{ $entry->ProtocolName }}</td>--}}
{{--                <td>{{ $entry->Manufacturer }}</td>--}}
{{--                <td>{{ $entry->parent_series }}</td>--}}
{{--                <td>--}}
{{--                    <div onmouseover="open_preview()">View</div>--}}
{{--                </td>--}}
{{--            </tr>--}}

{{--        @endforeach--}}

{{--        <!-- Intentionally Blank -->--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
