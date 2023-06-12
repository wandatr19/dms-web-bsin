@extends('main')
@section('utama')
<div class="overflow-auto" style="max-width: 100%; max-height: 100%">
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Description</th>
                <th>Dokumen</th>
                <th>Waktu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="{{ asset('vendor/jquery-validation-1.19.0/js/jquery.validate.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                    {
                        data: 'action', 
                        name: 'action', 
                        orderable: true, 
                        searchable: true
                    },
                ]
            });
            
        });
    </script>
</div>

@endsection