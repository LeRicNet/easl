<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Project</title>

<!-- Styling --> 
<!--<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">-->
<link href="css/design-b-theme.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://d3js.org/d3.v4.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<!-- Chart.JS --> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
	
<!-- Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<!-- jQuery & DataTables CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.13.4/dataRender/ellipsis.js"></script>

</head>

<body>
<main>
  <div class="container-fluid" id="mainContainer"> 
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Top Row -->
    <div class="row" id="topRow">
      <div class="col-4">
        <div class="row" id="demoCard"> 
          <!-- Top Left Box -->
          
<!--
          <div class="col-12" id="fileUpload">
            <input type="file" name="file" id="file" accept=".txt" multiple>
            <input type="button" id="btnsubmit" value="Submit" onclick="renderTable();" >
          </div>
-->
          
          <!-- Patient Image -->
          <div class="col-6 primary-view"> <img src="img/patient-icon.svg" id="patientImage"> </div>
          <!-- Patient Information -->
          <div class="col-6 primary-view">
            <div class="row" id="patientInfo">
              <div class="col-12"> Name: <span class="fw-bold">el-Saber, Zaaid</span> </div>
              <div class="col-12"> DOB: <span class="fw-bold">2000-05-03 (23 yr 0 mo) </span></div>
              <div class="col-12"> Gender: <span class="fw-bold">Male </span></div>
              <div class="col-12"> Race: <span class="fw-bold">Black </span></div>
              <div class="col-12"> Ethnicity: <span class="fw-bold">Not White or Hispanic </span></div>
              <div class="col-12"> Vital Status <span class="fw-bold">Alive </span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-8">
        <div class="row" id="topRight">
          <div class="col-5 primary-view">
{{--            <canvas id="radarChart_init" height="350"></canvas>--}}
              <iframe class="flex"
                      style="height: 100%; width: 100%;"
                      id="stats_display_iframe" src="localhost:5000"></iframe>
          </div>
          <div class="col-7 primary-view">
{{--            <div class="col-12">--}}
{{--              <div class="form-check form-switch mt-2 ms-3">--}}
{{--                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onChange="updateTable()">--}}
{{--                <label class="form-check-label" for="flexSwitchCheckDefault"></label>--}}
{{--              </div>--}}
{{--            </div>--}}
            <div class="col-12">
              <x-d-c-m.table-c/>
{{--              <div class="ms-2" id="tableLabel"> --}}
{{--                <!-- Blank --> --}}
{{--              </div>--}}
            </div>


            </table>

{{--            --}}
{{--            --}}
{{--            <table id="myTable" class="table table-sm table-responsive w-auto table-condensed table-hover">--}}
{{--              <thead>--}}
{{--                <tr>--}}
{{--                  <th>MRN</th>--}}
{{--                  <th>Name</th>--}}
{{--                  <th>Gender</th>--}}
{{--                  <th>Ethnicity</th>--}}
{{--                  <th>Race</th>--}}
{{--                  <th>Diagnosis</th>--}}
{{--                  <th>Similarity</th>--}}
{{--                </tr>--}}
{{--              </thead>--}}
{{--              <tbody>--}}
{{--                <!-- Intentionally Blank -->--}}
{{--              </tbody>--}}
{{--            </table>--}}
{{--            --}}
{{--            --}}
          </div>
        </div>
      </div>
    </div>
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Control Bar -->
    <div class="row" id="controlBar">
      <div class="col-12">
        <div class="row">
          <div class="col btn-group">
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm btn-tlbr" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Visual Filter </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
			  <!-- Advanced Options -->
			  			  <div class="dropdown ps-1">
  <button class="btn btn-secondary btn-sm btn-tlbr" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Settings
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li id="fileUpload">

			<input type="file" name="file" id="file" accept=".txt" multiple>
            <input type="button" id="btnsubmit" class="btn-success" value="load" onclick="updateTable();" >
	  </li>
  </ul>
</div>
          </div>
						  


        </div>
      </div>
    </div>
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Bottom Row -->
    <div class="row" id="bottomRow">
      <div class="col primary-view" id="primaryImageView">
        <iframe src="localhost:5000" id="primaryImageFrame" class="flex" style="height: 100%; width: 100%; padding-top: 100px; padding-left: 200px;"></iframe>
      </div>
      <div class="col primary-view" id="secondaryImageView">
        <iframe src="localhost:5000" id="secondaryImageFrame" class="flex" style="height: 100%; width: 100%; padding-top: 100px; padding-left: 200px;"></iframe>
      </div>
    </div>
  </div>
	
	    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Context Menu -->
{{--	<div id="contextMenu">--}}
{{--	<iframe src="http://www.google.com/search?q=google+scholar%3A+medulloblastoma&igu=1" style="width: 500px; height: 399px;"></iframe>--}}
{{--	</div>--}}
	
</main>
	<!-- JavaScript Functionality -->
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
        {data: "Manufacturer", name: "Manufacturer", visible: false},
        {data: "parent_series", name: "Series ID", visible: false},
        {data: 'orthancid', name: 'InstanceID', visible: false},
      ],
      columnDefs: [{
        targets: [0, 3, 5, 7, 8],
        render: DataTable.render.ellipsis(10)
      }],
      searching: false,
      pageLength: 6,
      lengthChange: false,
      dom: 'pt'
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
      let dt = $("#dcm_table").DataTable();
      let sel = dt.rows(".selected");


      // let instance_id = this.lastChild.innerHTML;
      let instance_id = sel.data()[0].orthancid;

      // let instance_id = this.lastChild.lastChild.title; // if using DataTable.ellipsis, the value is moved to the title attribute.

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
      // stats_display.src = 'http://140.226.123.129:5000/predict_diagnosis_radar/' + instance_id;
      stats_display.src = 'http://140.226.123.129:5000/summarizePatient/' + instance_id;
      // console.log('Changing iframe src to ' + stats_display.src);

      // Update Preview Window
      let preview_window = document.getElementById('primaryImageFrame');
      console.log(preview_window.src);
      console.log('Changing iframe src to http://140.226.123.129:5000/preview/' + instance_id);
      preview_window.src = 'http://140.226.123.129:5000/preview/' + instance_id;

      let preview_window_2 = document.getElementById('secondaryImageFrame');
      preview_window_2.src = 'http://140.226.123.129:5000/preview/' + instance_id;

    });
  })
</script>



<script src="js/table-4.js"></script> 
<script src="js/radar-4.js"></script>
<script src="js/utils.js"></script>
<!-- Bootstrap JS Functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- FontAwesome Icons -->
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</body>
</html>
