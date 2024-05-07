<div @class(["h-screen"])>
    @if(isset($study_uid))
        <iframe src='{{ $url }}' title="EASL Viewer"
                id="easl_ohif_viewer" name="easl_ohif_viewer"
                style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
    @endif
    <p>hello</p>
    <!-- Listen to iframe -->
    <script></script>
</div>
