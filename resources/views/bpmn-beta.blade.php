@extends('layouts.survey-instrument')

@section('content')

{{--    <div class="grid grid-flow-col border border-black border-solid" id="js-canvas">--}}
{{--    </div>--}}
    <button id="save-button">print to console</button>
    <div class="h-screen" id="js-canvas"></div>

    <script>

        var diagramUrl = 'https://cdn.staticaly.com/gh/bpmn-io/bpmn-js-examples/dfceecba/starter/diagram.bpmn';

        // modeler instance
        var bpmnModeler = new BpmnJS({
            container: '#js-canvas',
            keyboard: {
                bindTo: window
            }
        });

        async function exportDiagram() {

            try {
                var result = await bpmnModeler.saveXML({ format: true});
                console.log('DIAGRAM', result.xml);
            } catch (err) {
                console.error('could not save BPMN 2.0 diagram', err);
            }

        }

        async function openDiagram(bpmnXML) {

            // import diagram
            try {

                await bpmnModeler.importXML(bpmnXML);

                // access modeler components
                var canvas = bpmnModeler.get('canvas');
                var overlays = bpmnModeler.get('overlays');

                canvas.zoom('fit-viewport');

                overlays.add('SCAN_OK', 'needs-discussion');

            } catch (err) {
                console.error('could not import BPMN 2.0 diagram', err)
            }
        }

        $.get(diagramUrl, openDiagram, 'text');

        $('#save-button').click(exportDiagram);

    </script>

@endsection

{{--<script>--}}
{{--    window.onload = function(){--}}
{{--        render();--}}

{{--        function render() {--}}
{{--            document.getElementById("hello").innerHTML = 'hello';--}}
{{--        };--}}

{{--    };--}}
{{--</script>--}}
