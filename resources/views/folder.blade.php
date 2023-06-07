@extends('main')

@section('utama')
<!-- Back Button -->
<div class="row">
    <div class="input-group input-group-sm m-0 p-0">
      <a href="{{route('banbury')}}">
      <button class="input-group-text" id="inputGroup-sizing-sm" onclick="">Back</button>
      </a>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled />
    </div>
</div>
  <!-- Akhir Back Button -->
  <div id="pdf-viewer"></div>

  <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
  <script>
      // Skrip JavaScript untuk memuat dan menampilkan dokumen PDF
      var url = "{{ $contents }}";
      var pdfjsLib = window['pdfjs-dist/build/pdf'];

      pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

      var loadingTask = pdfjsLib.getDocument(url);
      loadingTask.promise.then(function(pdf) {
          var pageNumber = 1;
          pdf.getPage(pageNumber).then(function(page) {
              var scale = 1.5;
              var viewport = page.getViewport({ scale: scale });

              var canvas = document.createElement('canvas');
              var context = canvas.getContext('2d');
              canvas.height = viewport.height;
              canvas.width = viewport.width;

              var renderContext = {
                  canvasContext: context,
                  viewport: viewport
              };

              page.render(renderContext).promise.then(function() {
                  document.getElementById('pdf-viewer').appendChild(canvas);
              });
          });
      });
  </script>
  @endsection