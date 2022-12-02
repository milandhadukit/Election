@extends('layouts.all')
@section('login')
    <!DOCTYPE html>
    <html lang="en">

    <head>

    </head>

    <body>

        <body>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif




            </div>
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Candidate 1</h5>

                    <h6>{{ $candidate->candidate_1 }}</h6>
                    <h5> <h6>{{ $name1->name }}</h6></h5>


                   

                    <img src="{{ asset('Candidate_Image/' . $c1) }}" alt="" height="100px" width="100px"><br>


                    <form action="{{ route('Voters.vote-store') }}" method="POST" enctype="multipart/form-data"
                        class="formABC">
                        @csrf
                        {{-- <input type="hidden" name="election_id" value="{{ $candidate->candidate_1 }}"> --}}
                        <input type="hidden" name="election_id" value="{{ $candidate->id }}">
                        @error('election_id')
                            <span class="error" style="color: red">{{ $message }}</span>
                        @enderror


                        <input type="hidden" name="candidate_id" value="{{ $id }}">
                       
                        @error('candidate_id')
                            <span class="error" style="color: red">{{ $message }}</span>
                        @enderror
                        <input type="hidden" name="vote_candidate" value="{{ $candidate->candidate_1 }}">

                      
                        {{-- <h5>{{$candidate->date}}</h5>
                           
                            <h5>{{ $currentTime }}</h5> --}}


                            @if ($candidate->date > $currentTime)
                                <button type="submit" class="btn btn-primary" id="btnTest">Vote</button>
                            @else
                                <h5>Sorry Election Finished</h5>
                            @endif
                       
                    </form>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>


            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Candidate 2</h5>

                    <h6>{{ $candidate->candidate_2 }}</h6>
                    <h5> <h6>{{ $name2->name }}</h6></h5>

                    <img src="{{ asset('Candidate_Image/' . $c2) }}" alt="" height="100px" width="100px"><br>


                    <form action="{{ route('Voters.vote-store2') }}" method="POST" enctype="multipart/form-data"
                        class="formABC">
                        @csrf
                        {{-- <input type="hidden" name="election_id" value="{{ $candidate->candidate_2 }}"> --}}
                        <input type="hidden" name="election_id" value="{{ $candidate->id }}">
                        <input type="hidden" name="candidate_id" value="{{ $id2 }}">
                        <input type="hidden" name="vote_candidate" value="{{ $candidate->candidate_2 }}">

                        @if ($candidate->date > $currentTime)
                        <button type="submit" class="btn btn-primary btnSubmit"> Vote</button>
                        @else
                        <h5>Sorry Election Finished</h5>
                        @endif

                    </form>
                </div>

                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
            {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
        
                $(".formABC").submit(function (e) {
                    e.preventDefault();
                    $(".btnSubmit").attr("disabled", true);
                    $("#btnTest").attr("disabled", true);
                    return true;
                });
            });
        </script> --}}
        </body>

    </html>
@endsection
