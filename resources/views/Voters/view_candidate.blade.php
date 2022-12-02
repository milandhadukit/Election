@extends('layouts.all')
@section('login')
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Candidate</title>
</head>
<body>
    <div>
    {{-- <a href="" class="btn btn-success" id="delete">Add Candidate</a> --}}
</div>
    
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    {{-- <th scope="col">No</th> --}}
                    <th scope="col"> Name</th>
                    <th scope="col">SirName</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col">Area</th>
                    {{-- <th scope="col" width="20%">Action</th> --}}
                    

                </tr>
            </thead>
            <tbody>
                @foreach($candidate as $data)
                <tr>
                    {{-- <th scope="row">{{ $data->id }}</th> --}}
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->sirname }}</td>
                    <td>{{ $data->state }}</td>
                    <td>{{ $data->city }}</td>
                    <td>{{ $data->area }}</td>
                    {{-- <td><img src="{{asset('Candidate_Image/'.$data->image)}}" alt="" height="80px" width="80px"></td> --}}
                    {{-- <td >
                         <a href="{{ route('admin.edit-candidate',$data->id) }}" class="btn btn-info" id="delete">Edit</a>
                        <a href="{{ route('admin.delete-candidate',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>
                    </td> --}}
                </tr>
                @endforeach
               
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-content-center   custom-pagination-style">
            {!! $candidate->links() !!}
        </div>
    </div>
    <style>
        .custom-pagination-style svg{
            width: 30px;
        }
    </style>
</body>
</html>

@endsection