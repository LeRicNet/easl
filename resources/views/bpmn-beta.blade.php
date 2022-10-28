@extends('layouts.base-dashboard-component')

@section('content')

{{--    <div class="grid grid-flow-col border border-black border-solid" id="js-canvas">--}}
{{--    </div>--}}
    <button id="save-button"
{{--            wire:click="$emit('openModal', 'p-m-saver')"--}}
            style="position: absolute; top: 7px; right: 38px; z-index: 2;"
            class="fa fa-save items-end
            text-2xl text-gray-300 opacity-50 hover:text-gray-600">
    </button>
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

{{--                const path = "{{ Illuminate\Support\Facades\Storage::path('active-users/test/projects/project1/PM/diagram.bpmn') }}";--}}

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

        // $('#save-button').click(exportDiagram);
    // $('#save-button').click("Livewire.emit('openModal', 'p-m-saver')")
    </script>

@endsection
