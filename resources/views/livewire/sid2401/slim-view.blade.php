<div @class(["h-screen "])>
    @if(isset($study_uid))
        <iframe src='{{ $url }}' title="EASL Viewer"
                id="easl_ohif_viewer" name="easl_ohif_viewer"
                style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
    @endif
    <!-- Listen to iframe -->

        <script>
            window.addEventListener('message', function (event) {
                // Check the origin of the message
                if (event.origin !== 'http://amc-tensor1.ucdenver.pvt:808') {
                    // Not the expected origin: reject the message!
                    console.log('message heard but rejected');
                    console.log(event.origin);
                    return;
                }
                // Handle the message
                console.log('message heard');
                console.log(event.data);

                // Prepare the payload
                var payload = {
                    time: event.data.dateTime,
                    uid: event.data.imageId
                };

                // Create a POST request
                var xhr = new XMLHttpRequest();
                xhr.open("POST", 'http://amc-tensor1.ucdenver.pvt/eyetracking', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN',
                    document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                // Send the request
                xhr.send(JSON.stringify(payload));
            }, false);
        </script>
</div>
