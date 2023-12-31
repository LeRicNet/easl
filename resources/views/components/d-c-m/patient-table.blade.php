<div
        class="m-0
shadow overflow-scroll
border border-3 border-solid">
    <table id="dcm_table" class="table table-sm table-responsive table-condensed table-hover text-sm data-table">
        <thead>
        <tr>
            <th>Patient Name</th>
            <th>Date of Birth</th>
            <th>Sex</th>
            <th>Primary Symptom</th>
            <th>Modality</th>
            <th>Protocol</th>
{{--            <th>Pred. Diagnosis</th>--}}
            <th>Similarity</th>
        </tr>
        </thead>
        <tbody>
        <!-- Intentionally Blank -->
        </tbody>
    </table>

    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Table
            let table = $('#dcm_table').DataTable({
                processing: true,
                // serverSide: true,
                deferRender: true,
                ajax: {
                    url: "{{ route('patientview.index') }}",
                    dataSrc: "data"
                },
                columns: [
                    {data: "Name", name: "Patient Name"},
                    {data: "DateOfBirth", name: "Date of Birth"},
                    {data: "Sex", name: "Sex"},
                    {data: "PrimarySymptom", name: "Primary Symptom"},
                    {data: "Modality", name: "Modality"},
                    {data: "ProtocolName", name: "Protocol"},
                    // {data: "PredDx", name: "Pred. Diagnosis"},
                    {data: "Similarity", name: "Similarity"},
                    {data: "orthancid", name: "orthancid", visible: false},
                ],
                columnDefs: [{
                    targets: [5],
                    render: DataTable.render.ellipsis(10)
                }],
                searching: false,
                pageLength: 5,
                lengthChange: false
            });
        });
    </script>

</div>
