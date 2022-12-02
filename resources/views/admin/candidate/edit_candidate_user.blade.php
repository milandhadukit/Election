@extends('layouts.all')
@section('login')
    <html>

    <head>
            <title></title>
    </head>

    <body>
    <div>
        @if(session()->has('message'))
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
                                    <h3>Update the Details for <em>Registration Candidate</em></h3>
                                </div>
                                <form action="{{ route('admin.update-candidate-users',$user->id) }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Name</label>
                                        <input type="text" class="form-control" placeholder="Enter yourfirst name *" name="name" value="{{ $user->name }}" >
                                        @error('name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                        
                                         
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> SirName</label>
                                        <input type="text" class="form-control" placeholder="Enter your SirName"
                                           name="sirname" value="{{ $user->sirname }}" >
                                           @error('sirname') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Email</label>
                                        <input type="email" class="form-control" placeholder="Enter your Email"
                                          name="email" value="{{ $user->email }}" >
                                          @error('email') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Father Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your Father Name"
                                          name="father_name" value="{{ $user->father_name }}">
                                          @error('father_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Enter your Address"
                                           name="address" value="{{ $user->address }}">
                                           @error('address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> State</label>
                                        <input type="text" class="form-control" placeholder="Enter Your State"
                                          name="state" value="{{ $user->state }}" >
                                          @error('state') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="Enter your City"
                                          name="city" value="{{ $user->city }}" >
                                          @error('city') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Area</label>
                                        <input type="text" class="form-control" placeholder="Enter your Area"
                                          name="area" value="{{ $user->area }}" >
                                          @error('area') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    
                                    <input type="hidden"  name="role_id" value=3>
                
                                   

                                    <div class="col-12">
                                        <div class="register-button">
                                            <button type="submit" class="btn btn-primary">Update</button>
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