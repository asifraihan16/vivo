<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipbook Example</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Include Flipbook Plugin -->
    <script src="path/to/flipbook-plugin.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('build/css/flipbook.min.css') }}">
</head>
<body>
    <div id="container"></div>
    <script src="{{ URL::asset('build/js/flipbook.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            var pdfUrl = @json($chronicle_magazines->file_path ? Storage::url($chronicle_magazines->file_path) : '');
            jQuery('#container').flipBook({
                pdfUrl: pdfUrl,
            });
        });
    </script>
</body>
</html>
