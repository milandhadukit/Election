@extends('layouts.all')
@section('login')
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Candidate</title>
</head>
<body>
    <div>
        

</div>
    
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                   
                    <th > Name</th>
                   
                    <th>Sir Name</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Area</th>
                    <th  width="20%">Manage</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($usercandidate as $data)
                <tr>
                   
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->sirname }}</td>
                    <td>{{ $data->father_name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->state }}</td>
                    <td>{{ $data->city }}</td>
                    <td>{{ $data->area }}</td>
                   
                    <td > 
                        <a href="{{ route('admin.edit-users-candidate',$data->id) }}" class="btn btn-info" >Edit</a>
                        <a href="{{ route('admin.delete-user-candidate',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>

                    
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        {{-- <div class="d-flex justify-content-center align-content-center custom-pagination-style">
            {!! $candidatesuser->links() !!}
        </div>
    </div>
    <style>
        .custom-pagination-style svg{
            width: 30px;
        }
    </style> --}}
</body>
</html>

@endsection