@extends('main')
@section('utama')
@php
  $userAccess = explode(',', auth()->user()->user_access); 
  $role = auth()->user()->role == "admin"  
@endphp


  <!-- scroll -->
  <div class="overflow-auto" style="max-width: 100%; max-height: 100%">
    <section class="container-fluid">
      <div class="row content d-flex">
        <div class="col-lg-10 py-4">
          <div class="box p-4 rounded-3">
            <ul id="myUL">
              <!-- MECHANICAL -->
              @if (in_array('mech', $userAccess) || $role)
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
                            @foreach ($documents as $document)
                              @if ($document->category == "bexter")
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
              @endif
              <!-- AKHIR MECHANICAL -->

              <!-- ELECTRICAL -->
              @if (in_array('elect', $userAccess) || $role)
                <li>
                  @foreach ($folders as $folder)
                    @if ($folder->id === 4)
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
                      @if ($folder->id === 71)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EBanbury")
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
                      @if ($folder->id === 72)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EStrainer")
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
                      @if ($folder->id === 73)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EPolyfilm")
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
                      @if ($folder->id === 74)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "ECalender")
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
                        @if ($folder->id === 75)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EBexter")
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
                    <!-- AKHIR BEXTER -->

                    <!-- QCT -->
                    <li>
                    @foreach ($folders as $folder)
                      @if ($folder->id === 76)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EQCT")
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
                      @if ($folder->id === 77)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "E1/N-DCT")
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
                      @if ($folder->id === 78)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "E8CT")
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
                      @if ($folder->id === 79)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EBead")
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
                      @if ($folder->id === 80)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EMonowire")
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
                      @if ($folder->id === 81)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "ERTB")
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
                      @if ($folder->id === 82)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EPlyCutting1")
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
                      @if ($folder->id === 83)
                      <span class="caret">
                        <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                        {{$folder->name}}
                      </span>
                      @endif
                    @endforeach
                      <ul class="nested">
                      @foreach ($documents as $document)
                        @if ($document->category == "EPlyCutting2")
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
                        @if ($folder->id === 84)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ESRBelt1")
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
                        @if ($folder->id === 85)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                        @foreach ($documents as $document)
                          @if ($document->category == "ESRBelt2")
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
                        @if ($folder->id === 86)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EPSP")
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
                        @if ($folder->id === 87)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EIL2RH")
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
                        @if ($folder->id === 88)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EKBN2")
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
                        @if ($folder->id === 89)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EK1S")
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
                        @if ($folder->id === 90)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EHF1")
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
                        @if ($folder->id === 91)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ECure")
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
                        @if ($folder->id === 92)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EAPPD1")
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
                        @if ($folder->id === 93)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EInnerAPPD1")
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
                        @if ($folder->id === 94)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EWhiteBuff2")
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
                        @if ($folder->id === 95)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ERimFlow")
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
                        @if ($folder->id === 96)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EUniformity")
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
                        @if ($folder->id === 97)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EHPLRP")
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
                        @if ($folder->id === 98)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ELWBuff")
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
                        @if ($folder->id === 99)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ERework")
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
                        @if ($folder->id === 100)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ETireRepair")
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
                        @if ($folder->id === 101)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "EFurniture")
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
                        @if ($folder->id === 102)
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                        @endif
                      @endforeach
                        <ul class="nested">
                          @foreach ($documents as $document)
                            @if ($document->category == "ECementHouse")
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
              @endif
              <!-- AKHIR ELECTRICAL -->

              <!-- UTILITY -->
              @foreach ($folders as $folder)
                @if ($folder->id === 5)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
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
                  @endif
                @endif
              @endforeach    
              <!-- AKHIR UTILITY -->

              <!-- CIVIL -->
              @foreach ($folders as $folder)
                @if ($folder->id === 6)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR CIVIL -->

              <!-- OTHERS -->
              @foreach ($folders as $folder)
                @if ($folder->id === 7)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR OTHERS -->
              <!-- Area6 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 8)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area6 -->

              <!-- Area7 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 9)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area7 -->
              <!-- Area8 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 10)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area8 -->
              <!-- Area9 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 11)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area9")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area9 -->
              <!-- Area10 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 12)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area10")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area10 -->
              <!-- Area11 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 13)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area11")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area11 -->
              <!-- Area12 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 14)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area12")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area12 -->
              <!-- Area13 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 15)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area13")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area13 -->
              <!-- Area14 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 16)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area14")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area14 -->
              <!-- Area15 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 17)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area15")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area15 -->
              <!-- Area16 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 18)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area16")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area16 -->
              <!-- Area17 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 19)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area17")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area17 -->
              <!-- Area18 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 20)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area18")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area18 -->
              <!-- Area19 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 12)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area19")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area19 -->
              <!-- Area20 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 22)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area20")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area20 -->
              <!-- Area21 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 23)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area21")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area21 -->
              <!-- Area22 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 24)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area22")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area22 -->
              <!-- Area23 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 25)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area23")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area23 -->
              <!-- Area24 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 26)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area24")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area24 -->
              <!-- Area25 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 27)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area25")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area25 -->
              <!-- Area26 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 28)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area26")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area26 -->
              <!-- Area27 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 29)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area27")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area27 -->
              <!-- Area28 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 30)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area28")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area28 -->
              <!-- Area29 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 31)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area29")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area29 -->
              <!-- Area30 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 32)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area30")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area30 -->
              <!-- Area31 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 33)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area31")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area31 -->
              <!-- Area32 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 34)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area32")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area32 -->
              <!-- Area33 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 35)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area33")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area33 -->
              <!-- Area34 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 36)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area34")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area34 -->
              <!-- Area35 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 37)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area35")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area35 -->
              <!-- Area36 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 114)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area36")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area36 -->
              <!-- Area37 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 115)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area37")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area37 -->
              <!-- Area38 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 116)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area38")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area38 -->
              <!-- Area39 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 117)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area39")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area39 -->
              <!-- Area40 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 118)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area40")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area40 -->
              <!-- Area41 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 119)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area41")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area41 -->
              <!-- Area42 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 120)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area42")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area42 -->
              <!-- Area43 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 121)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area43")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area43 -->
              <!-- Area44 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 122)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area44")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area44 -->
              <!-- Area45 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 123)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area45")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area45 -->
              <!-- Area46 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 124)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area46")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area46 -->
              <!-- Area47 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 125)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area47")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area47 -->
              <!-- Area48 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 126)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area48")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area48 -->
              <!-- Area49 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 127)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area49")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area49 -->
              <!-- Area50 -->
              @foreach ($folders as $folder)
                @if ($folder->id === 128)
                  @if (in_array("$folder->name", $userAccess) || $role)
                    <li>
                        <span class="caret">
                          <i class="bi bi-folder-fill text-warning fs-5 me-1"></i>
                          {{$folder->name}}
                        </span>
                      <ul class="nested">
                        @foreach ($documents as $document)
                            @if ($document->category == "Area50")
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
                  @endif
                @endif
              @endforeach
              <!-- AKHIR Area50 -->
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Akhir scroll -->
@endsection