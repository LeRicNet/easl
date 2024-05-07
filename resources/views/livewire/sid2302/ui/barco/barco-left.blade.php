<div wire:poll.1ms wire:keep.alive
     @class([
        "h-screen",
        "border-double",
        "border-[12px]"  => $considering_view,
        "border-purple-500" => $considering_view
    ])>

    @switch($current_scene)

        @case('trial_1')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_2')
            @if(isset($study_uid))
            <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                    id="easl_ohif_viewer" name="easl_ohif_viewer"
                    style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
            @break
            @endif

        @case('trial_3')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_4')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_5')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_6')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_7')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_8')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_9')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_10')
            @if(isset($study_uid))
                <iframe src='http://amc-tensor1.ucdenver.pvt:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif


        @default
            <div class="h-screen w-screen bg-gradient-to-br from-slate-900 to-slate-700"></div>

    @endswitch


    <!-- Listen to iframe -->
    <script>
        // Get the iframe element
        var iframe = document.getElementById('easl_ohif_viewer');

        // Add event listener to the iframe
        iframe.addEventListener('load', function() {
            // Access the iframe's window object
            var iframeWindow = iframe.contentWindow || iframe.contentDocument.defaultView;

            // Access the Cornerstone element within the iframe
            var element = iframeWindow.document.querySelector('#cornerstone-canvas');

            // Listen to a Cornerstone event in the iframe
            element.addEventListener('cornerstoneimagerendered', function(event) {
                console.log('Cornerstone Image Rendered event detected in iframe');
            });
        }, false);

    </script>
</div>
