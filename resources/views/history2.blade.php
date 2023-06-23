@extends('main')
@section('utama')
<div class="overflow-auto" style="max-width: 100%; max-height: 100%">
    <div class="d-flex justify-content-end mt-3">
        <a href="{{route('del-history')}}">
            <button class="btn btn-danger">Destroy</button>
        </a>
        <button id="exportBtn" class="btn btn-success ml-2">Export</button>
    </div>   
    <table class="table table-sm yajra-datatable">
        <thead>
            <tr>
                <th>Description</th>
                <th>Dokumen</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script src="{{ asset('vendor/jquery/jquery-1.9.1.js')}}"></script>
    <script src="{{ asset('vendor/jquery-validation-1.19.0/js/jquery.validate.js')}}"></script>
    <script src="{{ asset('vendor/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/DataTables/DataTables-1.13.4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get-history') }}",
                columns: [
                    {data: 'description', name: 'description'},
                    {data: 'properties', name: 'properties'},
                    {data: 'created_at', name: 'created_at'},
                ]
            });
        });
    </script>
</div>

@endsection
