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
                                    <h3> New <em>Election</em></h3>
                                </div>
                                <form action="{{ route('admin.store-election') }}" method="POST"
                                    class="row g-3 needs-validation" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Election Title</label>
                                        <input type="text" class="form-control" placeholder="Enter yourfirst Title *"
                                            name="title">
                                        @error('title')
                                            <span class="error" style="color: red">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Candidate 1</label>

                                        <select class="form-control" name="candidate_1" id="select1"
                                            onchange="getSelectValue(
                                
                                                // var e = document.getElementById('select1');
                                                // var value=e.value; 
                                                // var text=e.options[e.selectedIndex].text)
                                                ;">
    

                                            <option value="">Select Candidate 1</option>
                                            @foreach ($user as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <select  class="form-control" 
                                            name="candidate_1" id="select1" onchange="getSelectValue(this.value);"  >
                                            <option value="">Select Candidate 1</option>
                                           
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            
                                        </select>
                                    </div>

                                    <select  class="form-control" 
                                            name="candidate_1" id="select2">
                                            <option value="">Select Candidate 2</option>
                                           
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            
                                        </select>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <label for="name" class="form-label"> Candidate 2</label>
                                        <select id="candidate" class="form-control" name="candidate_2" id="select2">
                                            <option value="">Select Candidate 2</option>
                                            @foreach ($user as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="name" class="form-label">End Date</label>
                                        <input type="date" class="form-control" placeholder="Enter your Email"
                                            name="date">
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
                                            <a href="{{ route('admin.info-candidate') }}" class="btn btn-info">Add Candidate
                                                Info</a>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>



        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
            crossorigin="anonymous"></script>

        <script type="text/javascript">
            function getSelectValue(select1) {
                if (select1 != '') {
                    // alert(select1);
                    $("#select2 option[value='" + select1 + "']").hide();
                    $("#select2 option[value!='" + select1 + "']").show();
                }
            }
        </script>


    </body>

    </html>
@endsection
