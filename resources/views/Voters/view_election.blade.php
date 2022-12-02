@extends('layouts.all')
@section('login')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Election</title>
</head> --}}
<body>
    <div>
    {{-- <a href="" class="btn btn-success" id="delete">Add Candidate</a> --}}
</div>
    
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    {{-- <th scope="col">No</th> --}}
                    <th scope="col"> Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col" width="15%">Give vote</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($election as $data)
                <tr>
                    {{-- <th scope="row">{{ $data->id }}</th> --}}
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->created_at->format('Y-m-d') }}</td>
                    <td>{{ $data->date }}</td>
                    {{-- <td><img src="{{asset('Candidate_Image/'.$data->image)}}" alt="" height="80px" width="80px"></td> --}}
                     <td >
                         {{-- <a href="{{ route('admin.edit-candidate',$data->id) }}" class="btn btn-info" id="delete">Edit</a> --}}
                        <a href="{{ route('voters.view-vote-candidate',$data->id) }}" class="btn btn-secondary"> View Candidate </a>


                        @if ($data->date < $currentTime)
                        <a href="{{ route('voters.view--election-result',$data->id) }}" class="btn btn-info"> Result </a>
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