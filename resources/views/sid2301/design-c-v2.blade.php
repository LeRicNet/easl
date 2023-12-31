<!doctype html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>EASL sid2301 - Design C</title>

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
<!-- Plotly -->
<script src="https://cdn.plot.ly/plotly-2.24.1.min.js" charset="utf-8"></script>
</head>

<body>
<main>
  <div class="container-fluid" id="mainContainer" style="height: 100vh;">
    <div class="row h-100">
      <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ -->
      <!-- Left Column -->
      <div class="col-4 border-3 border-3 border-solid rounded shadow"
      style="border: 2px solid black; border-radius: 0px 15px 15px 0px; background: rgba(189,189,189,0.12); border-color: rgba(99,99,99,0.5)">
        <!-- Top Row -->
        <div class="row h-50">
            <!-- Predicted Diagnosis -->
            <div class="info-card g-0">
              <div class="info-card-header">
                Predicted Diagnosis
              </div>
              <div class="m-2" style="height: 91% !important; width: 91% !important; padding-left: 8%;">
                <canvas id="predictedDiagnosisBarChart" width="100%" height="100%"></canvas>
              </div>
            </div>
            <!-- End Predicted Diagnosis -->
        </div>
        <!-- Bottom Row -->
        <div class="row h-50">
          <!-- AI Model Performance -->
          <div class="info-card">
            <div class="info-card-header border-top border-dark">
              AI Model Diagnostic Performance
            </div>
            <div class="m-2" style="height: 91% !important; width: 91% !important; padding-left: 8%;">
              <canvas id="modelPerformanceAUC" width="100%" height="100%"></canvas>
            </div>


          </div>
          <!-- End AI Model Performance -->
        </div>
      </div>
      <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ -->
      <!-- Right Column -->
      <div class="col-8">
        <!-- Top Row -->
        <div class="row h-50">
          <div class="col-8 g-0">
            <!-- Patient Comparison Table -->
            <div class="info-card">
              <div class="info-card-header mb-3">
                Select a Comparative Patient
              </div>
              <div class="ps-2">
                <x-d-c-m.patient-table/>
              </div>
            </div>
            <!-- End Patient Comparison Table -->
          </div>
          <div class="col-4 g-0">
            <!-- Patient Comparison Table -->
            <div class="info-card">
              <div class="info-card-header mb-3">
                Comparative Patient
              </div>
              <div class="w-100 h-100 mx-auto pt-4">
                <div class="text-center pb-1">
                  Comparing <span class="fw-bold">Baumgarten, Norma</span> to
                </div>
                <img class="mx-5" src="img/boy-1.jpg" alt="patient-image">
                <div class="text-center">
                  Comparative Patient Info<br><span class="fw-bold">Carter Foster</span>
                </div>
              </div>
            </div>
            <!-- End Patient Comparison Table -->
          </div>
        </div>
        <!-- Bottom Row -->
        <div class="row h-50">
          <div class="col-5">
{{--          <div class="col-6 m-2" style="height: 91% !important; width: 91% !important; padding-left: 8%; padding-top:20px;">--}}
              <canvas id="predictedDiagnosisRadarChart" width="100%" height="100%"></canvas>
          </div>
          <div class="col-7">
            <div id="boxplot-view"></div>
          </div>
        </div>
      </div>
    </div>









    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ -->
    <!-- Top Row -->
{{--    <div class="row" id="topRow">--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- Card 1 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- Predicted Diagnosis -->--}}
{{--      <div class="col-3 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Predicted Diagnosis--}}
{{--        </div>--}}
{{--        <div id="pedicted-diagnosis" class="primary-view">--}}
{{--          <canvas id="predictedDiagnosisBarChart" width="60%" height="60%"></canvas>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <!-- End Predicted Diagnosis -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- End Card 1 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- Card 2 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- Patient Comparison Table -->--}}
{{--      <div class="col-6 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Select a Comparative Patient--}}
{{--        </div>--}}
{{--        <x-d-c-m.table-c/>--}}
{{--      </div>--}}
{{--      <!-- End Patient Comparison Table -->--}}

{{--      <!-- Image Preview -->--}}
{{--      <div class="col-3 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Image Preview--}}
{{--        </div>--}}
{{--        <div class="border border-solid shadow-lg rounded" style="background: black; height:450px; margin-top: 5px;">--}}
{{--            <iframe src="localhost:5000" id="primaryImageFrame" style="padding-left: 75px; padding-top: 75px;"></iframe>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <!-- End Image Preview -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- End Card 2 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- Card 3 -->--}}
{{--      <!-- ******************** -->--}}



{{--      <!-- ******************** -->--}}
{{--      <!-- End Card 3 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- Card 4 -->--}}
{{--      <!-- ******************** -->--}}
{{--      --}}

{{--      <!-- ******************** -->--}}
{{--      <!-- End Card 4 -->--}}
{{--      <!-- ******************** -->--}}

{{--  </div>--}}
    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 

    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/ --> 
    <!-- Bottom Row -->
{{--    <div class="row">--}}
{{--      <div class="row" id="bottomRow">--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- Card 5 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- AI Model Performance -->--}}
{{--      <div class="col-5 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          AI Model Diagnostic Performance--}}
{{--        </div>--}}
{{--        <div class="pt-4" style="height: 450px !important; width: 450px !important;">--}}
{{--          <canvas id="modelPerformanceAUC" height="100%" width="100%"></canvas>--}}
{{--        </div>--}}


{{--      </div>--}}
{{--      <!-- End AI Model Performance -->--}}

{{--      <!-- Patient Comparison Table -->--}}
{{--      <div class="col-6 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Select a Comparative Patient--}}
{{--        </div>--}}
{{--        <x-d-c-m.table-c/>--}}
{{--      </div>--}}
{{--      <!-- End Patient Comparison Table -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- End Card 5 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- Card 6 -->--}}
{{--      <!-- ******************** -->--}}

{{--      <!-- Comparative Plots -->--}}
{{--      <div class="col-7 info-card">--}}
{{--        <div class="info-card-header">--}}
{{--          Comparison--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--          <div class="col-6" style="height: 450px !important; width: 450px !important;">--}}
{{--            <canvas id="predictedDiagnosisRadarChart" width="100%" height="100%"></canvas>--}}
{{--          </div>--}}
{{--          <div class="col-6" style="height: 450px !important; width: 450px !important;">--}}
{{--            <canvas id="predictedDiagnosisScatterplot" height="100%" width="100%"></canvas>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="primary-view">--}}
{{--          <iframe class="flex"--}}
{{--                  style="height: 100%; width: 100%;"--}}
{{--                  id="stats_display_iframe" src="localhost:5000"></iframe>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <!-- End Comparative Plots -->--}}

{{--      <!-- ******************** -->--}}
{{--      <!-- End Card 6 -->--}}
{{--      <!-- ******************** -->--}}
{{--    </div>--}}
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
      pageLength: 5,
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
    {{--  pageLength: 8,--}}
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
          data: data['data'],
          options: {
            plugins: {
              legend: {
                display: false
              }
            }
          }
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
          data: data['data'],
          // options: {
          //   plugins: {
          //     legend: {
          //       display: false
          //     }
          //   }
          // }
        }
        new Chart(canvas, config)
      })

      fetchFlaskData('boxplot', instance_id).then((data) => {
        const boxplot_id = 'boxplot-view';
        console.log('Calling Plotly');
        console.log(data);
        var trace1 = {
          x: data['data']['age']['global'],
          type: 'box',
          name: 'Age at<br>Diagnosis',
          xaxis: 'x1',
          yaxis: 'y1',
          hoverinfo: 'none',
          fillcolor: 'rgba(189,189,189, 0.5)',
          line: {color: 'rgba(99,99,99, .75)'},
          showlegend: false,
        }
        var trace2 = {
          x: data['data']['height']['global'],
          type: 'box',
          name: 'Height',
          xaxis: 'x2',
          yaxis: 'y2',
          hoverinfo: 'none',
          fillcolor: 'rgba(189,189,189, 0.5)',
          line: {color: 'rgba(99,99,99, .75)'},
          showlegend: false,
        }
        var trace3 = {
          x: data['data']['weight']['global'],
          type: 'box',
          name: 'Weight',
          xaxis: 'x3',
          yaxis: 'y3',
          hoverinfo: 'none',
          fillcolor: 'rgb(189,189,189,0.5)',
          line: {color: 'rgba(99,99,99, .75)'},
          showlegend: false,
        }

        var scatter_trace_target_age = {
          x: [data['data']['age']['target']],
          y: ['Age at<br>Diagnosis'],
          mode: 'markers',
          type: 'scatter',
          xaxis: 'x1',
          yaxis: 'y1',
          name: 'target patient',
          marker: {
            size: 16,
            symbol: 'x',
            color: 'rgb(252,141,98)'
          }
        }

        var scatter_trace_target_height = {
          x: [data['data']['height']['target']],
          y: ['Height'],
          mode: 'markers',
          type: 'scatter',
          xaxis: 'x2',
          yaxis: 'y2',
          name: 'target patient height',
          marker: {
            size: 16,
            symbol: 'x',
            color: 'rgb(252,141,98)'
          },
          showlegend: false,
        }

        var scatter_trace_target_weight = {
          x: [data['data']['weight']['target']],
          y: ['Weight'],
          mode: 'markers',
          type: 'scatter',
          xaxis: 'x3',
          yaxis: 'y3',
          name: 'target patient weight',
          marker: {
            size: 16,
            symbol: 'x',
            color: 'rgb(252,141,98)'
          },
          showlegend: false,
        }

        var scatter_trace_compare_age = {
          x: [data['data']['age']['compare']],
          y: ['Age at<br>Diagnosis'],
          mode: 'markers',
          type: 'scatter',
          xaxis: 'x1',
          yaxis: 'y1',
          name: 'comparison patient',
          marker: {
            size: 16,
            symbol: 'diamond',
            color: 'rgb(141,160,203)'
          }
        }

        var scatter_trace_compare_height = {
          x: [data['data']['height']['compare']],
          y: ['Height'],
          mode: 'markers',
          type: 'scatter',
          xaxis: 'x2',
          yaxis: 'y2',
          name: 'comparison patient height',
          marker: {
            size: 16,
            symbol: 'diamond',
            color: 'rgb(141,160,203)'
          },
          showlegend: false,
        }

        var scatter_trace_compare_weight = {
          x: [data['data']['weight']['compare']],
          y: ['Weight'],
          mode: 'markers',
          type: 'scatter',
          xaxis: 'x3',
          yaxis: 'y3',
          name: 'comparison patient height',
          marker: {
            size: 16,
            symbol: 'diamond',
            color: 'rgb(141,160,203)'
          },
          showlegend: false,
        }

        var layout = {
          paper_bgcolor: 'rgba(0,0,0,0)',
          plot_bgcolor: 'rgba(0,0,0,0)',
          grid: {rows: 3, columns: 1, pattern: 'independent'},
          legend: {"orientation": "h"}
        }
        var config = {
          displayModeBar: false // this is the line that hides the bar.
        }

        Plotly.newPlot(boxplot_id, [trace1, trace2, trace3, scatter_trace_target_age, scatter_trace_target_height, scatter_trace_target_weight, scatter_trace_compare_age, scatter_trace_compare_height, scatter_trace_compare_weight], layout, config)
        console.log('End Plotly Call');
      })

      fetchFlaskData('scatterplot', instance_id).then((data) => {
        const barchart_id = 'predictedDiagnosisScatterplot';
        const chartStatus = Chart.getChart(barchart_id);
        if (chartStatus != undefined) {
          chartStatus.destroy();
        }
        const canvas = document.getElementById(barchart_id);
        const config = {
          type: 'scatter',
          data: {datasets: data['data']},
          options: {
            spanGaps: true,
            // responsive: true,
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
        // responsive: true,
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
