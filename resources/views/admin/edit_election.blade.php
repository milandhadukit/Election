@extends('layouts.all')

@section('login')
    <html>

    <head>
        <title>New Election</title>
    </head>

    <body>
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>


        <div class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-main-wraper">
                            <div class="registration-form-group">
                                <div class="form-heading ">
                                    <h3> Update <em>Election</em></h3>
                                </div>
                                <form action="{{ route('admin.update-election',$election->id) }}" method="POST" class="row g-3 needs-validation"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Election Title</label>
                                        <input type="text" class="form-control" placeholder="Enter yourfirst Title *"
                                            name="title" value="{{ $election->title }}">
                                            @error('title')
                                            <span class="error" style="color: red">{{ $message }}</span>
                                        @enderror


                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label for="name" class="form-label">Start Date</label>
                                        <input type="text" class="form-control" 
                                            name="created_at" value="{{ $election->created_at->format('Y.m.d H:i:s')}}" >
                                    </div> --}}
                                   
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">End Date</label>   
                                        <input type="date" class="form-control" 
                                            name="date"  >
                                            {{-- value="{{ $election->date }}" --}}
                                            @error('date')
                                            <span class="error" style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                   
                                   
                                   
                                    <div class="col-12">
                                        <div class="register-button">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <div class="register-button">
                                           
                                           
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>

            </div>

        </div>

    </body>

    </html>
@endsection
