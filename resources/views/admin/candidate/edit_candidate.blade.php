@extends('layouts.all')

@section('login')
    <html>

    <head>
        <title>Candidate Info Update</title>
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
                                    <h3> Candidate <em>Info Update</em></h3>
                                </div>
                                <form action=" {{ route('admin.update-candidate',$candidate->id) }}" method="POST" class="row g-3 needs-validation"
                                    enctype="multipart/form-data">
                                   
                    
                                    @csrf
                                    {{-- <div class="col-md-6">
                                        <label for="name" class="form-label"> Candidate Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $candidate->name }}" required>

                                    </div> --}}

                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Info</label>
                                        <input type="text" class="form-control" name="info"
                                        value="{{ $candidate->info }}" >
                                         
                                            @error('info')
                                            <span class="error" style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Image</label>
                                        <input type="file" class="form-control" name="image"  accept="image/png, image/gif, image/jpeg">
                                        @error('image')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                    </div>


                                    <div class="col-12">
                                        <div class="register-button">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="remotely-work">
                            <img src="images/2831241-4caf50.svg" alt="   ">
                        </div>
                    </div> --}}

                </div>

            </div>

        </div>

    </body>

    </html>
@endsection
