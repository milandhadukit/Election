@extends('layouts.all')
@section('login')
<!DOCTYPE html>
{{-- <html lang="en"> --}}
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>View Election</title>
</head>
<body>

    
    <div class="container mt-5">
      <table class="table table-bordered mb-5">
          <thead>
              <tr class="table-success">
                  {{-- <th scope="col">No</th> --}}
                  <th scope="col"> Election Name</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">End Date</th>
                  <th scope="col" width="12%">Action</th>
                  <th scope="col" width="15%">Result</th>
                  

              </tr>
          </thead>
          <tbody>
              @foreach($election as $data)
              <tr>
                  {{-- <th scope="row">{{ $data->id }}</th> --}}
                  <td>{{ $data->title }}</td>   
                  <td>{{ $data->created_at->format('Y-m-d') }}</td>
                  <td>{{ $data->date }}</td>
                  <td>
                    <a href="{{ route('admin.edit-election',$data->id) }}" class="btn btn-secondary">Edit</a>
                    <a href="{{ route('admin.delete-election',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>
                    
                </td>
                 <td>
                       

                       @if ($data->date < $currentTime)
                        <a href="{{ route('admin.view-election-resulttt',$data->id) }}" class="btn btn-info" >Result</a>
                        @else
                        <h6> Election Result Pandding..</h6>
                    @endif
                  </td> 
              </tr>
              @endforeach
             
          </tbody>
      </table>
      <div class="d-flex justify-content-center align-content-center   custom-pagination-style">
          {!! $election->links() !!}
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