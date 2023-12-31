<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EASL EHR</title>
    <!-- Custom CSS	-->
{{--    <link href="css/theme.css" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap" rel="stylesheet">
    <!-- Bootstrap v5.0.2	-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery & DataTables CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.13.4/dataRender/ellipsis.js"></script>

@livewireStyles
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Order Requests -->
        <div class="col-5 p-2 pb-1 pe-1 my-auto">
            <div class="p-1
                        shadow overflow-scroll
                        border border-3 border-solid">
                <div class="w-100 fs-5 fw-bold border border-1 border-solid border-dark" style="background: linear-gradient( 95.2deg, rgba(192,229,246,.3) 64%, rgba(173,252,234,.3) 26.8%); padding-left: 5px;">Order Requests</div>
                <table id="order-request-table" class="table table-sm table-responsive table-condensed table-hover data-table">
                    <thead>
                    <tr>
                        <th>MRN</th>
                        <th>Name</th>
                        <th>Primary Symptom</th>
                        {{--                    <th><!-- Button Cell --></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Intentionally Blank -->
                    </tbody>
                </table>
            </div>

        </div>
        <!-- Order Text -->
        <div class="col-4 p-1">
            <div class="shadow overflow-scroll
                        border border-1 border-solid border-dark">
                {{--<div class="w-100 fs-5 fw-bold" style="background: linear-gradient(to right, #00b09b, #96c93d); padding-left: 5px;">Order Requests</div>--}}

                <div class="fs-6 overflow-scroll pt-2 ps-1" style="height: 297px; background-image: linear-gradient( 95.2deg, rgba(173,252,234,.3) 26.8%, rgba(192,229,246,.3) 64% );">
                    Order Request:<br>
                    -------------------------------<br>
                    Date: [Current Date]<br>
                    To: Clinical Neuro-Radiology Department<br><br>

                    Please interpret the MRI/CT of the brain for the following patient:<br><br>

                    Patient Information:<br>
                    ---------------------------<br>
                    Name: [Patient's Full Name]<br>
                    Age: [Patient's Age]<br>
                    Sex: [Patient's Sex]<br>

                    Clinical Details:<br>
                    ------------------------<br>
                    Reason for Examination: Suspected brain tumor<br><br>

                    Imaging Study:<br>
                    ----------------------<br>
                    Type: [MRI/CT]<br>
                    Contrast: [With/Without Contrast]<br><br>

                    Thank you for your prompt attention to this matter.<br><br><br>


                    [Referring Physician's Name]<br>
                    [Referring Physician's Department/Clinic]<br>
                    [Contact Information]<br>
                </div>

            </div>
        </div>
        <div class="col-3 p-3 w-full mx-auto">
            <img class="mx-5" src="img/girl-1.jpg" alt="patient-image">
        </div>
    </div>
    <div class="row">
        <x-d-c-m.table/>
    </div>
    
</div>

@livewireScripts
<!-- Bootstrap JS functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Viewer Functionality -->

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        // Order Request Table
        let order_request_table = $('#order-request-table').DataTable({
            processing: true,
            // serverSide: true,
            deferRender: true,
            ajax: {
                url: "{{ route('order-request-data.index') }}",
                dataSrc: "data"
            },
            columns: [
                {data: "id", name: "MRN"},
                {data: "name", name: "Name"},
                {data: "reason", name: "Primary Symptom"},
            ],
            searching: false,
            pageLength: 5,
            lengthChange: false,
            dom: 't'
            // columnDefs: [{
            //     targets: [0, 7, 8],
            //     render: DataTable.render.ellipsis(10)
            // }]
        });
        let table = $('#dcm_table');
        {{--order_request_table.row(':eq(0)', { page: 'current' }).select();--}}

        // Row Selection
        $('#dcm_table').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

            // let dt = $("#dcm_table").DataTable();
            // let sel = dt.rows(".selected");
            //
            //
            // // let instance_id = this.lastChild.innerHTML;
            // let instance_id = sel.data()[0].orthancid;
            //
            // console.log('Request to view instance: ' + instance_id);
            // // Send to Flask
            //
            // // Update Stats Display
            // let stats_display = document.getElementById('stats_display_iframe');
            //
            // stats_display.src = 'http://140.226.123.129:5000/design_c_comparison/' + instance_id;
            //
            // let radarChart = document.getElementById('predictedDiagnosisRadarChart');
            // radarChart.src = 'http://140.226.123.129:5000/predict_diagnosis_bar/' + instance_id;
            // // console.log('Changing iframe src to ' + stats_display.src);
            //
            // // Update Preview Window
            // let preview_window = document.getElementById('primaryImageFrame');
            // console.log(preview_window.src);
            // console.log('Changing iframe src to http://140.226.123.129:5000/preview/' + instance_id);
            // preview_window.src = 'http://140.226.123.129:5000/preview/' + instance_id;
        });

        // Row Selection
        $('#order-request-table').on('click', 'tr', function () {
            // Select Row
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                order_request_table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

            let requested_patient = $(this)[0].children[1].innerHTML;
            let table = $('#dcm_table');
            if ( $.fn.dataTable.isDataTable( '#dcm_table' ) ) {
                // table = $('#example').DataTable();
                table.DataTable().destroy();
            }
            // else {
            //     table = $('#example').DataTable( {
            //         paging: false
            //     } );
            // }

            // Set Main Table
            table.DataTable({
                processing: true,
                // serverSide: true,
                deferRender: true,
                ajax: {
                    {{--url: "{{ route('ajaxdicominfo.show') }}",--}}
                    url: "/dicoms/" + requested_patient,
                    dataSrc: "data"
                },
                columns: [
                    {data: "PatientID", name: "ATPC ID"},
                    {data: "PatientName", name: "Name"},
                    {data: "PatientSex", name: "Gender"},
                    {data: "InstitutionName", name: "Institution"},
                    {data: "modality", name: "Modality"},
                    {data: "ProtocolName", name: "Protocol"},
                    {data: "Manufacturer", name: "Manufacturer"},
                    {data: "parent_series", name: "Series ID"},
                    {data: 'orthancid', name: 'InstanceID'},
                ],
                columnDefs: [{
                    targets: [0, 7, 8],
                    render: DataTable.render.ellipsis(10)
                }],
                pageLength: 12,
                lengthChange: false,
            });

            // Set Comparative Table (View 2)
            let event = new Event("hello");
            let elem = document.getElementsByClassName('order-request-table selected');
            $(this).dispatchEvent(event);
        });


        // Table View Selection
        $('.btn-group .btn').on('click', function() {
            console.log('button clicked.');
            console.log($(this));
            let view_mode = $(this)[0].name;
            console.log('View Mode = ' + view_mode);
            if (view_mode == 'dicom_instances') {
                url = "/dicoms/" + requested_patient
            } else if (view_mode == 'dicom_series') {
                url = "/dicoms/show_series/" + requested_patient;
            }
            console.log('URL = ' + url);
            let table = $('#dcm_table');
            if ( $.fn.dataTable.isDataTable( '#dcm_table' ) ) {
                table.DataTable().destroy();
            }

            // Set Main Table
            table.DataTable({
                processing: true,
                // serverSide: true,
                deferRender: true,
                ajax: {
                    {{--url: "{{ route('ajaxdicominfo.show') }}",--}}
                    // url: "/dicoms/" + requested_patient,
                    url: url,
                    dataSrc: "data"
                },
                columns: [
                    {data: "PatientID", name: "ATPC ID"},
                    {data: "PatientName", name: "Name"},
                    {data: "PatientSex", name: "Gender"},
                    {data: "InstitutionName", name: "Institution"},
                    {data: "modality", name: "Modality"},
                    {data: "ProtocolName", name: "Protocol"},
                    {data: "Manufacturer", name: "Manufacturer"},
                    {data: "parent_series", name: "Series ID"},
                    {data: 'orthancid', name: 'InstanceID'},
                ],
                // columnDefs: [{
                //     targets: [0, 7, 8],
                //     render: DataTable.render.ellipsis(10)
                // }],
                searching: false,
                pageLength: 10,
                lengthChange: false,
            });
        })

        //
        //     // let instance_id = this.lastChild.innerHTML;
        //     let instance_id = sel.data()[0].orthancid;
        //
        //     console.log('Request to view instance: ' + instance_id);
        //     // Send to Flask
        //
        //     // Update Stats Display
        //     let stats_display = document.getElementById('stats_display_iframe');
        //
        //     stats_display.src = 'http://140.226.123.129:5000/design_c_comparison/' + instance_id;
        //
        //     let radarChart = document.getElementById('predictedDiagnosisRadarChart');
        //     radarChart.src = 'http://140.226.123.129:5000/predict_diagnosis_bar/' + instance_id;
        //     // console.log('Changing iframe src to ' + stats_display.src);
        //
        //     // Update Preview Window
        //     let preview_window = document.getElementById('primaryImageFrame');
        //     console.log(preview_window.src);
        //     console.log('Changing iframe src to http://140.226.123.129:5000/preview/' + instance_id);
        //     preview_window.src = 'http://140.226.123.129:5000/preview/' + instance_id;
        // });
    })

</script>

</body>
</html>
