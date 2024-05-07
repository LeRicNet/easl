<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ATPCDB</title>
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
<div>
    <div class="row" id="navBar">

        <div class="col-md-2" style="font-size: x-large; font-weight: bolder; margin-left: 5px;">
            ATPC Database
        </div>
{{--        <div class="col pt-2 pb-2">--}}
{{--            <div class="dropdown">--}}
{{--                <button class="btn btn-sm btn-secondary dropdown-toggle"--}}
{{--                        type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                    Menu--}}
{{--                </button>--}}
{{--                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">--}}
{{--                    <li>--}}
{{--                        <!-- Button trigger modal -->--}}
{{--                        <button type="button" class="btn btn-primary w-full" data-bs-toggle="modal" data-bs-target="#dicomMenu">--}}
{{--                            Add Data--}}
{{--                        </button>--}}

{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>

    <!-- Summary Stats -->
    <div class="row">
        <div id= "stats_display" class="col border border-solid">
            <iframe class="flex"
                    style="height: 100%; width: 100%;"
                    id="stats_display_iframe" src="localhost:5000"></iframe>
        </div>
        <div class="col border border-solid" style="height: 450px; padding-top: 35px; padding-left: 280px; margin-right: 20px; background-color: black">
            <iframe class="flex"
                    style="height: 100%; width: 100%;"
                id="preview_window" src="localhost:5000"></iframe>
        </div>
    </div>

    <x-d-c-m.table/>

{{--    @livewire('atpcdb-data')--}}
    @livewire('dicom-menu')
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

        let table = $('#dcm_table').DataTable({
            processing: true,
            // serverSide: true,
            deferRender: true,
            ajax: {
                url: "{{ route('ajaxdicominfo.index') }}",
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
            }]
            // columns: [
            //     {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            //     {data: 'name', name: 'name'},
            //     {data: 'detail', name: 'detail'},
            //     {data: 'action', name: 'action', orderable: false, searchable: false},
            // ]
        });



        // Row Selection
        $('#dcm_table').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

           // let instance_id = this.lastChild.innerHTML;


            let instance_id = this.lastChild.lastChild.title; // if using DataTable.ellipsis, the value is moved to the title attribute.

           console.log('Request to view instance: ' + instance_id);
           // Send to Flask

            // Update Stats Display
            let stats_display = document.getElementById('stats_display_iframe');
            // stats_display.innerHTML = 'Request to view instance: ' + instance_id;
            // $.ajax({
            //     url: 'http://140.226.123.129:5000/display_stats',
            //     contentType: 'application/json;charset=UTF-8',
            //     data: {'instance': instance_id},
            //     type: 'POST',
            //     success: function(response){
            //         console.log(response);
            //     },
            //     error: function(error){
            //         console.log(error);
            //     }
            // })
            stats_display.src = 'http://140.226.123.129:5000/predict_acp/' + instance_id;
            console.log('Changing iframe src to ' + stats_display.src);

            // Update Preview Window
            let preview_window = document.getElementById('preview_window');
            console.log(preview_window.src);
            console.log('Changing iframe src to http://140.226.123.129:5000/preview/' + instance_id);
            preview_window.src = 'http://140.226.123.129:5000/preview/' + instance_id;

        });
    })
</script>

</body>
</html>
