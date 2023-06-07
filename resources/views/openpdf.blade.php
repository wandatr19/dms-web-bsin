<!DOCTYPE html>
<html>
<head>
    <title>PDF Viewer</title>
    <style>
        #pdfViewer {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="pdfViewer"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        var url = '{{ $pdfUrl }}'; // Mengambil URL dokumen PDF dari controller

        // Fungsi untuk memuat dokumen PDF menggunakan PDF.js
        function renderPDF(url) {
            pdfjsLib.getDocument(url).promise.then(function(pdf) {
                pdf.getPage(1).then(function(page) {
                    var canvas = document.createElement('canvas');
                    var context = canvas.getContext('2d');
                    var viewport = page.getViewport({ scale: 1.5 });

                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };

                    page.render(renderContext).promise.then(function() {
                        document.getElementById('pdfViewer').appendChild(canvas);
                    });
                });
            });
        }

        // Memanggil fungsi renderPDF dengan URL dokumen PDF
        renderPDF(url);
    </script>
</body>
</html>
