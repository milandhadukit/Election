@extends('layouts.all')
@section('login')
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Candidate</title>
</head>
<body>
    <div>
    <a href="{{ route('admin.add-candidate') }}" class="btn btn-success" >Add Candidate</a>
    <a href="{{ route('admin.view-candidates-user') }}" class="btn btn-info" >View Candidate User</a>

</div>
    
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                   
                   
                    <th scope="col">info</th>
                    <th scope="col">Image</th>
                    <th scope="col" width="20%">Manage</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($candidate as $data)
                <tr>
                    {{-- <th scope="row">{{ $data->id }}</th> --}}
                   
                    <td>{{ $data->info }}</td>
                    <td><img src="{{asset('Candidate_Image/'.$data->image)}}" alt="" height="80px" width="80px"></td>
                    <td > <a href="{{ route('admin.edit-candidate',$data->id) }}" class="btn btn-info" >Edit</a>
                        <a href="{{ route('admin.delete-candidate',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>

                    
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-content-center custom-pagination-style">
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