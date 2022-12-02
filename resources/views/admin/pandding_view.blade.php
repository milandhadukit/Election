@extends('layouts.all')
@section('login')
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Pandding Users</title>
</head>
<body>
    <div>
    {{-- <a href="{{ route('admin.add-candidate') }}" class="btn btn-success" >Add Candidate</a> --}}
</div>
    
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th >Name</th>
                    <th >Sirname</th>
                    <th >Address</th>
                    <th >State</th>
                    <th >City</th>
                    <th >Area</th>
                    <th>Status</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($pandding as $data)
                <tr>
                    <th >{{ $data->name }}</th>
                    <td>{{ $data->sirname }}</td>
                    <th >{{ $data->address }}</th>
                    <th >{{ $data->state }}</th>
                    <th >{{ $data->city }}</th>
                    <th >{{ $data->area }}</th>
                    <td >
                        <form action="{{ route('admin.verify-users',$data->id) }}" method="POST">
                            @csrf
                        <input type="hidden" value="1" name="status">
                         <button  class="btn btn-info" value="submit">Verify</button>
                        </form>
                        <form action="{{ route('admin.verify-users',$data->id) }}" method="POST">
                            @csrf
                        <input type="hidden" value="-1" name="status">
                         <button  class="btn btn-danger" value="submit" id="reject">Reject</button>
                        </form>
                       
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-content-center custom-pagination-style">
            {!! $pandding->links() !!}
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