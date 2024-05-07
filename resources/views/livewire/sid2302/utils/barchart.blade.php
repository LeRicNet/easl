<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div id="{{ $chartId }}"></div>
    
    <script>
        function drawBarchart(elem, updateChart=false) {

            var pos  = @json($featureValue)*100
            pos = pos.toFixed(2);
            var neg = 100 - pos;

            var trace1 = {
                x: [pos],
                y: ['y'],
                name: 'true',
                type: 'bar',
                orientation: 'h',
                marker: {color: 'rgb(161,215,106)'},
                text: [pos],
                textposition: 'auto'
            };
            var trace2 = {
                x: [neg],
                y: ['y'],
                name: 'false',
                type: 'bar',
                orientation: 'h',
                marker: {color: 'rgb(233,163,201)'}
            };

            var data = [trace1, trace2];

            var layout = {
                autosize: false,
                width: 124,
                height: 40,
                margin: {
                    l:2, r: 2, b: 2, t: 2, p: 0
                },
                barmode: 'stack',
                showlegend: false,
                xaxis: {
                    autorange: true,
                    showgrid: false,
                    zeroline: false,
                    showline: false,
                    autotick: true,
                    ticks: '',
                    showticklabels: false
                },
                yaxis: {
                    autorange: true,
                    showgrid: false,
                    zeroline: false,
                    showline: false,
                    autotick: true,
                    ticks: '',
                    showticklabels: false
                }
            };

                Plotly.purge(elem);
                Plotly.newPlot(elem, data, layout, {staticPlot: true});
        };

        let chartDiv = document.getElementById(@json($chartId));
        drawBarchart(chartDiv);
        
        document.addEventListener('refreshBarchart', function(e) {
            let elem = document.querySelector('#{{ $divKey }}');
            var pos  = elem.value*100
            pos = pos.toFixed(2);
            var neg = 100 - pos;

            var trace1 = {
                x: [pos],
                y: ['y'],
                name: 'true',
                type: 'bar',
                orientation: 'h',
                marker: {color: 'rgb(161,215,106)'},
                text: [pos],
                textposition: 'auto'
            };
            var trace2 = {
                x: [neg],
                y: ['y'],
                name: 'false',
                type: 'bar',
                orientation: 'h',
                marker: {color: 'rgb(233,163,201)'}
            };

            var data = [trace1, trace2];

            var layout = {
                autosize: false,
                width: 124,
                height: 40,
                margin: {
                    l:2, r: 2, b: 2, t: 2, p: 0
                },
                barmode: 'stack',
                showlegend: false,
                xaxis: {
                    autorange: true,
                    showgrid: false,
                    zeroline: false,
                    showline: false,
                    autotick: true,
                    ticks: '',
                    showticklabels: false
                },
                yaxis: {
                    autorange: true,
                    showgrid: false,
                    zeroline: false,
                    showline: false,
                    autotick: true,
                    ticks: '',
                    showticklabels: false
                }
            };
            Plotly.purge(chartDiv);
            Plotly.newPlot(chartDiv, data, layout, {staticPlot: true});


            {{--console.log({{ $divKey }});--}}
            // console.log(featureValue);
            // drawBarchart(elem, true);
        });
    </script>

</div>
