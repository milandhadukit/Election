@extends('layouts.election-master')

@section('main')
    <html>

    <head>
            <title>Register</title>
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
                                    <h3>Fill the Details for <em>Registration Voters</em></h3>
                                </div>
                                <form action="{{ route('user.store') }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Name</label>
                                        <input type="text" class="form-control" placeholder="Enter yourfirst name *" name="name" >
                                        @error('name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                         
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> SirName</label>
                                        <input type="text" class="form-control" placeholder="Enter your SirName"
                                           name="sirname">
                                           @error('sirname') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Email</label>
                                        <input type="email" class="form-control" placeholder="Enter your Email"
                                          name="email"  >
                                          @error('email') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Father Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your Father Name"
                                          name="father_name" >
                                          @error('father_name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Enter your Address"
                                           name="address" >
                                           @error('address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> State</label>
                                        <input type="text" class="form-control" placeholder="Enter Your State"
                                          name="state"  >
                                          @error('state') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="Enter your City"
                                          name="city"  >
                                          @error('city') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Area</label>
                                        <input type="text" class="form-control" placeholder="Enter your Area"
                                          name="area"  >
                                          @error('area') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    
                                    <input type="hidden"  name="role_id" value=2 >
                
                                    {{-- <div class="col-md-6">
                                        <label for="inputAddress" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="enter your valid mail id *" required>
                                    </div> --}}
                                    

                                    <div class="col-12">
                                        <div class="register-button">
                                            <button type="submit" class="btn btn-primary">Register</button>
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
