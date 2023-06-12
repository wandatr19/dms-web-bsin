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
                  @foreach ($folders as $folder)
                    @if ($folder->id === 3)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                    @endif
                  @endforeach
                  <ul class="nested">
                    <!-- BANBURY -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 38)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "banbury")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
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
                    @foreach ($folders as $folder)
                      @if ($folder->id === 39)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "strainer")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
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
                    @foreach ($folders as $folder)
                      @if ($folder->id === 40)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "polyfilm")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
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
                    @foreach ($folders as $folder)
                      @if ($folder->id === 41)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "calender")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR CALENDER -->

                    <!-- BEXTER -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 42)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
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
                    @foreach ($folders as $folder)
                      @if ($folder->id === 43)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "QCT")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR QCT -->

                    <!-- 1/N DCT -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 44)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "1N-DCT")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>

                    </li>
                    <!-- AKHIR 1/N DCT -->

                    <!-- 8CT -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 45)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "8CT")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR 8CT -->

                    <!-- BEAD -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 46)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "bead")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>

                    </li>
                    <!-- AKHIR BEAD -->

                    <!-- MONOWIRE -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 47)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "monowire")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>

                    </li>
                    <!-- AKHIR MONOWIRE -->

                    <!-- RTB -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 48)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "RTB")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR RTB -->

                    <!-- PLY CUTTING NO.1 -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 49)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "PlyCutting1")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR PLY CUTTING NO.1 -->

                    <!-- PLY CUTTING NO.2 -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 50)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "PlyCutting2")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                      </ul>
                    </li>
                    <!-- AKHIR PLY CUTTING NO.2 -->

                    <!-- SR BELT 1 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 51)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "SRBelt1")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
  
                    <!-- AKHIR SR BELT 1 -->

                    <!-- SR BELT 2 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 52)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                        @foreach ($documents as $document)
                          @if ($document->category == "SRBelt2")
                          <li>
                            <span>
                              <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                              <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                              {{ $document->doc_name }}</a>
                            </span>
                          </li>
                          @endif
                        @endforeach
                        </ul>
                      </li>
  
                    <!-- AKHIR SR BELT 2 -->

                    <!-- PSP -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 53)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "PSP")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR PSP -->

                    <!-- IL 2RH -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 54)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "IL2RH")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR IL 2RH -->

                    <!-- KBN2 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 55)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "KBN2")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR KBN2 -->

                    <!-- IL K1-S -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 56)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "K1S")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR K1-S -->

                    <!-- HF-1 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 57)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "HF1")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR HF-1 -->

                    <!-- CURE -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 58)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "cure")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR CURE -->
                    <!-- APDD-1 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 59)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "APPD1")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR APDD-1 -->

                    <!-- INNER APDD-1 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 60)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "InnerAPPD1")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR INNER APDD-1 -->

                    <!-- WHITE BUFF-2 -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 61)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "WhiteBuff2")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR WHITE BUFF-2 -->

                    <!-- RIM FLOW -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 62)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "RimFlow")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>                    
                    <!-- AKHIR RIM FLOW -->

                    <!-- UNIFORMITY -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 63)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "Uniformity")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>
                    <!-- AKHIR UNIFORMITY -->

                    <!-- HP LRP -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 64)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "HPLRP")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>                    
                    <!-- AKHIR HP LRP -->

                    <!-- LW BUFF -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 65)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "LWBuff")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>                     
                    <!-- AKHIR LW BUFF -->

                    <!-- REWORK -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 66)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "Rework")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li> 
                    <!-- AKHIR REWORK -->

                    <!-- TIRE REPAIR -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 67)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "TireRepair")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li> 
                    <!-- AKHIR TIRE REPAIR -->

                    <!-- FURNITURE -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 68)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "Furniture")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li> 
                    <!-- AKHIR FURNITURE -->

                    <!-- CEMENT HOUSE -->
                    <li>
                      @foreach ($folders as $folder)
                        @if ($folder->id === 69)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "CementHouse")
                            <li>
                              <span>
                                <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                                <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                                {{ $document->doc_name }}</a>
                              </span>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                    </li>                     
                    <!-- AKHIR CEMENT HOUSE -->
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
                @foreach ($folders as $folder)
                  @if ($folder->id === 5)
                    <span class="caret">
                      <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                      {{$folder->name}}
                    </span>
                  @endif
                @endforeach
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "utility")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
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
                @foreach ($folders as $folder)
                  @if ($folder->id === 6)
                    <span class="caret">
                      <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                      {{$folder->name}}
                    </span>
                  @endif
                @endforeach
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "civil")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
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
                @foreach ($folders as $folder)
                  @if ($folder->id === 7)
                    <span class="caret">
                      <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                      {{$folder->name}}
                    </span>
                  @endif
                @endforeach
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "others")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                  </ul>
              </li>
              <!-- AKHIR OTHERS -->
              <!-- Area6 -->
              <li>
                @foreach ($folders as $folder)
                  @if ($folder->id === 8)
                    <span class="caret">
                      <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                      {{$folder->name}}
                    </span>
                  @endif
                @endforeach
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "Area6")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                  </ul>
              </li>
              <!-- AKHIR Area6 -->

              <!-- Area7 -->
              <li>
                @foreach ($folders as $folder)
                  @if ($folder->id === 9)
                    <span class="caret">
                      <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                      {{$folder->name}}
                    </span>
                  @endif
                @endforeach
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "Area7")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                  </ul>
              </li>
              <!-- AKHIR Area7 -->
              <!-- Area8 -->
              <li>
                @foreach ($folders as $folder)
                  @if ($folder->id === 9)
                    <span class="caret">
                      <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                      {{$folder->name}}
                    </span>
                  @endif
                @endforeach
                  <ul class="nested">
                    @foreach ($documents as $document)
                        @if ($document->category == "Area8")
                        <li>
                          <span>
                            <a href="{{route('view-tr', $document->id)}}" target="_blank" style="text-decoration: none; color:black">
                            <i class="bi bi-filetype-pdf text-danger fs-6 me-1"></i>
                            {{ $document->doc_name }}</a>
                          </span>
                        </li>
                        @endif
                      @endforeach
                  </ul>
              </li>
              <!-- AKHIR Area8 -->



            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Akhir scroll -->
@endsection