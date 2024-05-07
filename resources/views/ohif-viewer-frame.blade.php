<iframe src='http://140.226.123.129:3000' title="EASL Viewer"
        id="easl_ohif_viewer" name="easl_ohif_viewer"
        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>

<script>
    const iframe = document.getElementById('easl_ohif_viewer');
    iframe.contentWindow.body.addEventListener('click',() => console.log('click'));

</script>
