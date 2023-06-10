@extends('main')
@section('utama')

  <!-- scroll -->
  <div class="overflow-auto" style="max-width: 100%; max-height: 100%">
    <section class="container-fluid">
      <div class="row content d-flex">
        <div class="col-lg-10 py-4">
          <div class="box p-4 rounded-3">
            <ul id="myUL">
              <!-- MECHANICAL -->
              <li>
                  <span class="caret">
                    <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                    MECHANICAL
                  </span>
                  <ul class="nested">
                    <!-- BANBURY -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        BANBURY
                      </span>
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "banbury")
                        <li>
                          <span>
                            <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR BANBURY -->

                    <!-- STRAINER -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        STRAINER
                      </span>
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "strainer")
                        <li>
                          <span>
                            <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR STRAINER -->

                    <!-- POLYFILM -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        POLYFILM
                      </span>
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "polyfilm")
                        <li>
                          <span>
                            <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR POLYFILM -->

                    <!-- CALENDER -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        CALENDER
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR CALENDER -->

                    <!-- BEXTER -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        BEXTER
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR BEXTER -->

                    <!-- QCT -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        QCT
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR QCT -->

                    <!-- 1/N DCT -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        1/N DCT
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR 1/N DCT -->

                    <!-- 8CT -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        8CT
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR 8CT -->

                    <!-- BEAD -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        BEAD
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR BEAD -->

                    <!-- MONOWIRE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        MONOWIRE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR MONOWIRE -->

                    <!-- RTB -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        RTB
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR RTB -->

                    <!-- PLY CUTTING NO.1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        PLY CUTTING NO.1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR PLY CUTTING NO.1 -->

                    <!-- PLY CUTTING NO.2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        PLY CUTTING NO.2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR PLY CUTTING NO.2 -->

                    <!-- SR BELT 1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        SR BELT 1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR SR BELT 1 -->

                    <!-- SR BELT 2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        SR BELT 2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR SR BELT 2 -->

                    <!-- PSP -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        PSP
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR PSP -->

                    <!-- IL 2RH -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        IL 2RH
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR IL 2RH -->

                    <!-- KBN2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        KBN2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR KBN2 -->

                    <!-- IL K1-S -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        K1-S
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR K1-S -->

                    <!-- HF-1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HF-1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HF-1 -->

                    <!-- CURE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        CURE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR CURE -->

                    <!-- INNER APDD-1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        INNER APDD-1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR INNER APDD-1 -->

                    <!-- APDD-1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        APDD-1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR APDD-1 -->

                    <!-- WHITE BUFF-2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        WHITE BUFF-2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR WHITE BUFF-2 -->

                    <!-- RIM FLOW -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        RIM FLOW
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR RIM FLOW -->

                    <!-- UNIFORMITY -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        UNIFORMITY
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR UNIFORMITY -->

                    <!-- HP LRP -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HP LRP
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HP LRP -->

                    <!-- LW BUFF -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        LW BUFF
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR LW BUFF -->

                    <!-- REWORK -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        REWORK
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR REWORK -->

                    <!-- TIRE REPAIR -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        TIRE REPAIR
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR TIRE REPAIR -->

                    <!-- FURNITURE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        FURNITURE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR FURNITURE -->

                    <!-- CEMENT HOUSE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        CEMENT HOUSE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR CEMENT HOUSE -->

                    <!-- HATSUGAMA M/C -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HATSUGAMA M/C
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HATSUGAMA M/C -->

                    <!-- HP LRP 3 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HP LRP 3
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HP LRP 3 -->
                  </ul>
              </li>
              <!-- AKHIR MECHANICAL -->

              <!-- ELECTRICAL -->
              <li>
                  <span class="caret">
                    <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                    ELECTRICAL
                  </span>
                  <ul class="nested">
                    <!-- BANBURY -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        BANBURY
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR BANBURY -->

                    <!-- STRAINER -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        STRAINER
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR STRAINER -->

                    <!-- POLYFILM -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        POLYFILM
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR POLYFILM -->

                    <!-- CALENDER -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        CALENDER
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR CALENDER -->

                    <!-- BEXTER -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        BEXTER
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR BEXTER -->

                    <!-- QCT -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        QCT
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR QCT -->

                    <!-- 1/N DCT -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        1/N DCT
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR 1/N DCT -->

                    <!-- 8CT -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        8CT
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR 8CT -->

                    <!-- BEAD -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        BEAD
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR BEAD -->

                    <!-- MONOWIRE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        MONOWIRE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR MONOWIRE -->

                    <!-- RTB -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        RTB
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR RTB -->

                    <!-- PLY CUTTING NO.1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        PLY CUTTING NO.1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR PLY CUTTING NO.1 -->

                    <!-- PLY CUTTING NO.2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        PLY CUTTING NO.2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR PLY CUTTING NO.2 -->

                    <!-- SR BELT 1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        SR BELT 1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR SR BELT 1 -->

                    <!-- SR BELT 2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        SR BELT 2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR SR BELT 2 -->

                    <!-- PSP -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        PSP
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR PSP -->

                    <!-- IL 2RH -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        IL 2RH
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR IL 2RH -->

                    <!-- KBN2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        KBN2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR KBN2 -->

                    <!-- IL K1-S -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        K1-S
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR K1-S -->

                    <!-- HF-1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HF-1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HF-1 -->

                    <!-- CURE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        CURE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR CURE -->

                    <!-- INNER APDD-1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        INNER APDD-1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR INNER APDD-1 -->

                    <!-- APDD-1 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        APDD-1
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR APDD-1 -->

                    <!-- WHITE BUFF-2 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        WHITE BUFF-2
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR WHITE BUFF-2 -->

                    <!-- RIM FLOW -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        RIM FLOW
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR RIM FLOW -->

                    <!-- UNIFORMITY -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        UNIFORMITY
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR UNIFORMITY -->

                    <!-- HP LRP -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HP LRP
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HP LRP -->

                    <!-- LW BUFF -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        LW BUFF
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR LW BUFF -->

                    <!-- REWORK -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        REWORK
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR REWORK -->

                    <!-- TIRE REPAIR -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        TIRE REPAIR
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR TIRE REPAIR -->

                    <!-- FURNITURE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        FURNITURE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR FURNITURE -->

                    <!-- CEMENT HOUSE -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        CEMENT HOUSE
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR CEMENT HOUSE -->

                    <!-- HATSUGAMA M/C -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HATSUGAMA M/C
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HATSUGAMA M/C -->

                    <!-- HP LRP 3 -->
                    <li>
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        HP LRP 3
                      </span>
                      <ul class="nested">
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 1
                          </span>
                        </li>
                        <li>
                          <span class="caret">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            Doc Item 2
                          </span>
                        </li>
                      </ul>
                    </li>
                    <!-- AKHIR HP LRP 3 -->
                  </ul>
              </li>
              <!-- AKHIR ELECTRICAL -->

              <!-- UTILITY -->
              <li>
                  <span class="caret">
                    <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                    UTILITY
                  </span>
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "utility")
                        <li>
                          <span>
                            <a href="{{route('show-banbury', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                      @endif
                    @endforeach
                  </ul>
              </li>
              <!-- AKHIR UTILITY -->

              <!-- CIVIL -->
              <li>
                  <span class="caret">
                    <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                    CIVIL
                  </span>
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "civil")
                        <li>
                          <span>
                            <a href="{{route('open-bb', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                  </ul>
              </li>
              <!-- AKHIR CIVIL -->

              <!-- OTHERS -->
              <li>
                  <span class="caret">
                    <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                    OTHERS
                  </span>
                  <ul class="nested">
                    <li>
                      <span class="caret">
                        <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                        Doc Item 1
                      </span>
                    </li>
                    <li>
                      <span class="caret">
                        <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                        Doc Item 2
                      </span>
                    </li>
                  </ul>
              </li>
              <!-- AKHIR OTHERS -->
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Akhir scroll -->
@endsection