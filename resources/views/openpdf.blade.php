<!DOCTYPE html>
<html>
<head>
    <title>PDF Viewer</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #pdf-container {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="pdf-container" style="width: 100%; height:100vh"></div>

    <script src="{{ asset('vendor/pdfjs-dist/build/pdf.js') }}"> </script>
    <script>
        const pdfData = "{{ $pdfData }}";
        const pdfjsLib = window['pdfjs-dist/build/pdf'];

        // pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';
        // pdfjsLib.GlobalWorkerOptions.workerSrc ='{{asset('node_modules/pdfjs-dist/build/pdf.worker.js')}}';
        const container = document.getElementById('pdf-container');

        function renderPDF(data) {
            const loadingTask = pdfjsLib.getDocument({ data });
            loadingTask.promise.then((pdf) => {
                for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                    pdf.getPage(pageNumber).then((page) => {
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        const viewport = page.getViewport({ scale: 1 });

                        canvas.width = viewport.width;
                        canvas.height = viewport.height;

                        container.appendChild(canvas);

                        page.render({
                            canvasContext: context,
                            viewport: viewport
                        });
                    });
                }
            });
        }

        renderPDF(atob(pdfData));
    </script>
</body>
</html>
