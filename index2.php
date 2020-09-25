<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find My IP</title>
</head>
<body>
    <div id="output" style="text-align: center"></div>

    <script src="https://jsgetip.appspot.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    <script>
        function ipv() { return -1!=ip().indexOf(":")?6:4 };
        document.getElementById('output').innerHTML =
        "<h3>Your IP Address is</h3><h1> " + ip() + " (IPv" + ipv() + ")</h1><button type='button' class='cp-btn' data-clipboard-text=" + ip() + ">Copy</button>";

        var clipboard = new ClipboardJS('.cp-btn');
        clipboard.on('success', function(e) {
            alert('Copied to Clipboard');
            console.log(e);
        });
        clipboard.on('error', function(e) {
            console.log(e);
        });
    </script>
</body>
</html>