@extends('layouts.all')
@section('login')

<!DOCTYPE html>
<html>
<head>
    <title>View-Voters</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Voters </h2>
    <div  class="text-center">
    <a href="{{ route('admin.voters-register') }}" class="btn btn-outline-info btn-lg "> ADD </a>
</div>


    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>sir Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Address</th>
                <th>State</th>
                <th>City</th>
                <th>Area</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,   
        ajax: "{{ route('admin.voters-list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'sirname', name: 'sirname'},
            {data: 'father_name', name: 'father_name'},
            {data: 'email', name: 'email'},
            {data: 'username', name: 'username'},
            {data: 'address', name: 'address'},
            {data: 'state', name: 'state'},
            {data: 'city', name: 'city'},
            {data: 'area', name: 'area'},
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

</html>
@endsection