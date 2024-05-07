<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>EASL sid2301 - Design D</title>

<!-- Styling --> 
<!--<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">-->
<link href="css/design-c-theme.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
<!-- Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<!-- jQuery & DataTables CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<!-- DataTables Plug-Ins -->
<script src="//cdn.datatables.net/plug-ins/1.13.4/dataRender/ellipsis.js"></script>

<!-- Chart.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
<main>
  <div class="container-fluid" id="mainContainer"> 
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Top Row -->
    <div class="row" id="topRow">

      <!-- ******************** -->
      <!-- Card 1 -->
      <!-- ******************** -->

{{--      <!-- Patient Info -->--}}
{{--      <div class="col-3 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Patient Info--}}
{{--        </div>--}}
{{--        <div class="row" style="padding-top: 30%;">--}}
{{--          <div class="col-5"> <img src="img/patient-icon.svg" id="patientImage"> </div>--}}
{{--          <!-- Patient Information -->--}}
{{--          <div class="col-7">--}}
{{--            <div class="row" id="patientInfo">--}}
{{--              <div class="col-12"> Name: <span class="fw-bold">el-Saber, Zaaid</span> </div>--}}
{{--              <div class="col-12"> DOB: <span class="fw-bold">2000-05-03 (23 yr 0 mo) </span></div>--}}
{{--              <div class="col-12"> Gender: <span class="fw-bold">Male </span></div>--}}
{{--              <div class="col-12"> Race: <span class="fw-bold">Black </span></div>--}}
{{--              <div class="col-12"> Ethnicity: <span class="fw-bold">Not White or Hispanic </span></div>--}}
{{--              <div class="col-12"> Vital Status <span class="fw-bold">Alive </span></div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <!-- End Patient Info -->--}}

      <!-- Predicted Diagnosis -->
      <div class="col-3 info-card">
        <div class="info-card-header">
          Predicted Diagnosis
        </div>
        <div class="text-justify p-1 ps-2">
          <p class="text-justify">
            Based on the analysis of PATIENT_NAME’s available medical data, the top N_DX potential diagnoses have been identified.<br>
          <div class="p-3 py-1">
            1. Glioma (64%)<br>
          </div>
          <div class="p-3 py-1">
            2. Craniopharyngioma (20%)<br>
          </div>
          <div class="p-3 py-1">
            3. Meningioma (10%)<br>
          </div>
          <div class="p-3 py-1">
            4. Germ Cell Tumor (4%)<br>
          </div>
          <div class="p-3 py-1">
            5. Other (2%)<br><br>
          </div>
            Predictions are solely based on the analysis of available data and should not replace the expertise and clinical judgment of a healthcare professional. We encourage you to thoroughly review these findings and make an accurate diagnosis after conducting a comprehensive evaluation.
          </p>
{{--          <p>--}}

{{--            --}}{{--            A type of tumor that originates in the supportive cells of the brain or spinal cord. It is important to perform additional examinations such as MRI or biopsy to confirm this diagnosis.<br><br>--}}

{{--            --}}
{{--            --}}{{--            This tumor arises near the pituitary gland, often affecting hormone regulation and causing symptoms like headaches and vision problems. Additional imaging or hormonal assessments may be necessary to confirm the presence of a craniopharyngioma.<br><br>--}}

{{--            --}}
{{--            --}}{{--            A slow-growing tumor that develops in the membranes covering the brain and spinal cord. Further assessments, including CT scans or MRI, are recommended to confirm the presence of a meningioma.<br><br>--}}

{{--            --}}
{{--            --}}{{--            A tumor originating in the reproductive cells, typically found in the central nervous system. Further examination through imaging or biopsy can help validate this diagnosis.<br><br>--}}

{{--            --}}
{{--            --}}{{--            Although the possibilities above are highly likely, there is still a chance that the patient's condition may fall outside the predicted diagnoses. This category allows for the consideration of alternative diagnoses that may not fall within the provided options.<br><br>--}}


        </div>
        {{--        <div id="pedicted-diagnosis" class="primary-view">--}}
{{--          <canvas id="predictedDiagnosisBarChart" width="60%" height="60%"></canvas>--}}
{{--        </div>--}}
      </div>
      <!-- End Predicted Diagnosis -->

      <!-- ******************** -->
      <!-- End Card 1 -->
      <!-- ******************** -->

      <!-- ******************** -->
      <!-- Card 2 -->
      <!-- ******************** -->

      <!-- Patient Comparison Table -->
      <div class="col-6 info-card">
        <div class="info-card-header">
          Select a Comparative Patient
        </div>
        <x-d-c-m.patient-table/>
      </div>
      <!-- End Patient Comparison Table -->

      <!-- Image Preview -->
      <div class="col-3 info-card">
        <div class="info-card-header">
          Image Preview
        </div>
        <div class="border border-solid shadow-lg rounded" style="background: black; height:450px; margin-top: 5px;">
            <iframe src="localhost:5000" id="primaryImageFrame" style="padding-left: 75px; padding-top: 75px;"></iframe>
        </div>
      </div>
      <!-- End Image Preview -->

      <!-- ******************** -->
      <!-- End Card 2 -->
      <!-- ******************** -->

      <!-- ******************** -->
      <!-- Card 3 -->
      <!-- ******************** -->



      <!-- ******************** -->
      <!-- End Card 3 -->
      <!-- ******************** -->

      <!-- ******************** -->
      <!-- Card 4 -->
      <!-- ******************** -->

{{--      <!-- AI Model Performance -->--}}
{{--      <div class="col-3 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          AI Model Diagnostic Performance--}}
{{--        </div>--}}
{{--        <div class="pt-4">--}}
{{--          <canvas id="modelPerformanceAUC" style="height: 400px; width: 400px;"></canvas>--}}
{{--        </div>--}}


{{--      </div>--}}
{{--      <!-- End AI Model Performance -->--}}



      <!-- ******************** -->
      <!-- End Card 4 -->
      <!-- ******************** -->

  </div>
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 

    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Bottom Row -->
{{--    <div class="row">--}}
      <div class="row" id="bottomRow">

      <!-- ******************** -->
      <!-- Card 5 -->
      <!-- ******************** -->

      <!-- AI Model Performance -->
      <div class="col-4 info-card">
        <div class="info-card-header">
          AI Model Diagnostic Performance
        </div>
        <div class="m-3">
          <div class="row me-0">
            <div class="col-6 p-0 py-1">
              <div class="card border-success" style="background: rgba(161,215,106, 0.5)">
                <div class="card-body">
                  <h5 class="card-title">Glioma</h5>
                  <p class="card-text">
                    Accuracy: 88.5%<br>
                    Sensitivity: 90.1%<br>
                    Specificity: 78.0%<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 p-0 py-1">
              <div class="card border-success" style="background: rgba(161,215,106, 0.5)">
                <div class="card-body">
                  <h5 class="card-title">Craniopharyngioma</h5>
                  <p class="card-text">
                    Accuracy: 93.5%<br>
                    Sensitivity: 93.1%<br>
                    Specificity: 94.2%<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 p-0 py-1">
              <div class="card border-success" style="background: rgba(161,215,106, 0.5)">
                <div class="card-body" ]>
                  <h5 class="card-title">Meningioma</h5>
                  <p class="card-text">
                    Accuracy: 89.3%<br>
                    Sensitivity: 93.1%<br>
                    Specificity: 84.2%<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 p-0 py-1">
              <div class="card border-warning" style="background: rgba(255,255,191, 0.5)">
                <div class="card-body">
                  <h5 class="card-title">Germ Cell Tumor</h5>
                  <p class="card-text">
                    Accuracy: 73.5%<br>
                    Sensitivity: 68.1%<br>
                    Specificity: 75.2%<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 p-0 py-1">
              <div class="card border-danger" style="background: rgba(233,163,201, 0.5)">
                <div class="card-body">
                  <h5 class="card-title">Other</h5>
                  <p class="card-text">
                    Accuracy: 56.5%<br>
                    Sensitivity: 53.1%<br>
                    Specificity: 64.2%<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
{{--          <canvas id="modelPerformanceAUC" height="100%" width="100%"></canvas>--}}
        </div>


      </div>
      <!-- End AI Model Performance -->

{{--      <!-- Patient Comparison Table -->--}}
{{--      <div class="col-6 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Select a Comparative Patient--}}
{{--        </div>--}}
{{--        <x-d-c-m.table-c/>--}}
{{--      </div>--}}
{{--      <!-- End Patient Comparison Table -->--}}

      <!-- ******************** -->
      <!-- End Card 5 -->
      <!-- ******************** -->

      <!-- ******************** -->
      <!-- Card 6 -->
      <!-- ******************** -->

      <!-- Comparative Plots -->
      <div class="col-8 info-card">
        <div class="info-card-header">
          Comparison
        </div>
        <div class="row m-3">
          <!-- Why -->
          <div class="col-6">
            <div class="row p-2">
              <div class="card text-black" style="background: rgba(127,191,123,0.7)">
                <div class="card-body">
                  <h5 class="card-title">Similarity 1</h5>
                  <p class="card-text" id="similarity_1"></p>
                </div>
              </div>
            </div>
            <div class="row p-2">
              <div class="card text-black" style="background: rgba(127,191,123,0.7)">
                <div class="card-body">
                  <h5 class="card-title">Similarity 2</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="row p-2">
              <div class="card text-black" style="background: rgba(127,191,123,0.7)">
                <div class="card-body">
                  <h5 class="card-title">Similarity 3</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
{{--            <canvas id="predictedDiagnosisRadarChart" width="100%" height="100%"></canvas>--}}
          </div>
          <!-- Why Not? -->
          <div class="col-6">
            <div class="row p-2">
              <div class="card text-black" style="background: rgba(175,141,195,0.7)">
                <div class="card-body">
                  <h5 class="card-title">Difference 1</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="row p-2">
              <div class="card text-black" style="background: rgba(175,141,195,0.7)">
                <div class="card-body">
                  <h5 class="card-title">Difference 2</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="row p-2">
              <div class="card text-black" style="background: rgba(175,141,195,0.7)">
                <div class="card-body">
                  <h5 class="card-title">Difference 3</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
{{--            <canvas id="predictedDiagnosisScatterplot" height="100%" width="100%"></canvas>--}}
          </div>
        </div>
{{--        <div class="primary-view">--}}
{{--          <iframe class="flex"--}}
{{--                  style="height: 100%; width: 100%;"--}}
{{--                  id="stats_display_iframe" src="localhost:5000"></iframe>--}}
{{--        </div>--}}
      </div>
      <!-- End Comparative Plots -->

      <!-- ******************** -->
      <!-- End Card 6 -->
      <!-- ******************** -->
    </div>
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ -->
  </div>

	
</main>
	<!-- JavaScript Functionality -->
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
        {data: "PredDx", name: "Pred. Diagnosis"},
        {data: "Similarity", name: "Similarity"},
        {data: "orthancid", name: "orthancid", visible: false},
      ],
      columnDefs: [{
        targets: [5],
        render: DataTable.render.ellipsis(10)
      }],
      searching: false,
      pageLength: 8,
      lengthChange: false
    });
    {{--let table = $('#dcm_table').DataTable({--}}
    {{--  processing: true,--}}
    {{--  // serverSide: true,--}}
    {{--  deferRender: true,--}}
    {{--  ajax: {--}}
    {{--    url: "{{ route('ajaxdicominfo.index') }}",--}}
    {{--    dataSrc: "data"--}}
    {{--  },--}}
    {{--  columns: [--}}
    {{--    {data: "PatientID", name: "ATPC ID"},--}}
    {{--    {data: "PatientName", name: "Name"},--}}
    {{--    {data: "PatientSex", name: "Gender"},--}}
    {{--    {data: "InstitutionName", name: "Institution"},--}}
    {{--    {data: "modality", name: "Modality"},--}}
    {{--    {data: "ProtocolName", name: "Protocol"},--}}
    {{--    {data: "Manufacturer", name: "Manufacturer", visible: false},--}}
    {{--    {data: "parent_series", name: "Series ID", visible: false},--}}
    {{--    {data: 'orthancid', name: 'InstanceID', visible: false},--}}
    {{--  ],--}}
    {{--  columnDefs: [{--}}
    {{--    targets: [0, 3, 5, 7, 8],--}}
    {{--    render: DataTable.render.ellipsis(10)--}}

    {{--  }],--}}
    {{--  searching: false,--}}
    {{--  pageLength: 10,--}}
    {{--  lengthChange: false--}}
    {{--});--}}

    // Row Selection
    $('#dcm_table').on('click', 'tr', function () {
      if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
      } else {
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
      }

      let dt = $("#dcm_table").DataTable();
      let sel = dt.rows(".selected");


      // let instance_id = this.lastChild.innerHTML;
      let instance_id = sel.data()[0].orthancid;

      console.log('Request to view instance: ' + instance_id);
      // Send to Flask
      fetchFlaskData('barchart', instance_id).then((data) => {
        const barchart_id = 'predictedDiagnosisBarChart';
        const chartStatus = Chart.getChart(barchart_id);
        if (chartStatus != undefined) {
          chartStatus.destroy();
        }
        const canvas = document.getElementById(barchart_id);
        const config = {
          type: 'bar',
          data: data['data']
        }
        new Chart(canvas, config)
      })

      fetchFlaskData('radarchart', instance_id).then((data) => {
        const barchart_id = 'predictedDiagnosisRadarChart';
        const chartStatus = Chart.getChart(barchart_id);
        if (chartStatus != undefined) {
          chartStatus.destroy();
        }
        const canvas = document.getElementById(barchart_id);
        const config = {
          type: 'radar',
          data: data['data']
        }
        new Chart(canvas, config)
      })

      fetchFlaskData('scatterplot', instance_id).then((data) => {
        const barchart_id = 'predictedDiagnosisScatterplot';
        const chartStatus = Chart.getChart(barchart_id);
        if (chartStatus != undefined) {
          chartStatus.destroy();
        }
        console.log(data['data']);
        const canvas = document.getElementById(barchart_id);
        const config = {
          type: 'scatter',
          data: {datasets: data['data']},
          options: {
            spanGaps: true,
            responsive: true,
            scales: {
              x: {
                type: 'linear',
                // min: -100,
                // max: 1,
                title: {
                  display: true,
                  text: 'X1'
                }
              },
              y: {
                type: 'linear',
                // min: 0,
                // max: 1,
                title: {
                  display: true,
                  text: 'X2'
                }
              }
            }
          }
        }
        new Chart(canvas, config)
      })

      fetchGptResponse(instance_id).then((data) => {
        let elem = document.getElementById('similarity_1');
        console.log(elem);
        console.log(data);
        console.log(data['data']);
        elem.innerHTML = data['data'];
      })





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


    document.addEventListener("hello", function(event) { // (1)
      console.log("Hello from " + event.target.tagName); // Hello from H1
    });
  });



  // How?
  $(document).ready(function () {

    const canvas = document.getElementById('modelPerformanceAUC');

    data = {
      datasets: [{
        label: 'Craniopharyngioma',
        data: [{
          x: 0, y: 0
        }, {
          x: 0.05, y: 0.41
        }, {
          x: 0.2, y: 0.83
        }, {
          x: 0.4, y: 0.93
        }, {
          x: 0.6, y: 0.96
        }, {
          x: 0.8, y: 0.99
        }, {
          x: 1, y: 1
        }],
        showLine: true,
        borderWidth: 3,
        fill: true,
        backgroundColor: 'rgba(190,174,212, 0.2)',
        borderColor: 'rgb(190,174,212)',
        pointBackgroundColor: 'rgb(190,174,212)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(190,174,212)'
      },
        {
          label: 'Glioma',
          data: [{
            x: 0, y: 0
          }, {
            x: 0.04, y: 0.38
          }, {
            x: 0.21, y: 0.85
          }, {
            x: 0.4, y: 0.93
          }, {
            x: 0.6, y: 0.99
          }, {
            x: 0.8, y: 0.999
          }, {
            x: 1, y: 1
          }],
          showLine: true,
          borderWidth: 3,
          fill: true,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 99, 132)',
          pointBackgroundColor: 'rgb(255, 99, 132)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgb(255, 99, 132)'
        }]
    };

    config = {
      type: 'scatter',
      data: data,
      options: {
        draggable: true,
        elements: {
          line: {
            borderWidth: 3
          }
        },


        scales: {
          x: {
            type: 'linear',
            min: 0,
            max: 1,
            title: {
              display: true,
              text: 'False Postive Rate'
            }
          },
          y: {
            type: 'linear',
            min: 0,
            max: 1,
            title: {
              display: true,
              text: 'True Positive Rate'
            }
          }
        }


      },
      plugins: [{
        id: 'myEventCatcher',
        beforeEvent(chart, args, pluginOptions) {
          const event = args.event;

          if (event.type === 'click') {
            console.log(event);
            console.log(chart);
            const canvasPosition = Chart.helpers.getRelativePosition(event, chart);

            console.log(canvasPosition.x + ", " + canvasPosition.y);

          }
        }
      }]
    };

    new Chart(canvas, config)
  });

  // System Status
  $( document ).ready(function() {
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time+' UTC';
    $('#system-status-time-overall').html(dateTime);

    $('#system-status-time-pacs').html(dateTime);
    $('#system-status-time-ehr').html(dateTime);
    $('#system-status-time-ai').html(dateTime);
  });

  // Barchart
  async function fetchFlaskData(mode, id) {
    let barchart_json = await fetch("/flask/" + mode + "/" + id);
    let barchart_data = await barchart_json.json();
    return barchart_data
  }
  async function fetchGptResponse(id) {
    let gpt_json = await fetch('/flask/gpt/' + id);
    let gpt_data = await gpt_json.json()
    return gpt_data
  }

  $(document).ready(function () {
    console.log('rendering chart');

    {{--data = {{ json_decode(file_get_contents('http://140.226.123.129:5000/phpbarchart/c921488f-cd651a4e-88483aaa-01683063-6338d780'), true) }}--}}

    // let barchart_data = fetchBarchartData();
    // console.log(barchart_data);
    {{--let labels = {{ labels|safe }};--}}
    {{--let datasets = {{ datasets|safe }};--}}
    // data = {
      {{--labels: labels,--}}
      {{--datasets: {{ datasets|safe }}--}}
        // data = {
        //     labels: labels,
        //     dataset: datasets
        // }
        //
        // data = {
        //     labels: labels,
        //     datasets: [{
        //     label: 'PT_P4ZEFY19',
        //     data: [15, 13, 20, 18, 13],
        //     fill: true,
        //     backgroundColor: 'rgba(255, 99, 132, 0.2)',
        //     borderColor: 'rgb(255, 99, 132)',
        //     pointBackgroundColor: 'rgb(255, 99, 132)',
        //     pointBorderColor: '#fff',
        //     pointHoverBackgroundColor: '#fff',
        //     pointHoverBorderColor: 'rgb(255, 99, 132)'
        // }]
    // }
    // const config = {
    //   type: 'bar',
    //   data: barchart_data
    // }
    // new Chart(canvas, config)
  });
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
