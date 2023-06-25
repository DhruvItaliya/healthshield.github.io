<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('agent_css_js/register.css') }}">

</head>
<body>
    @include('layouts.header')
        <div>
            <form action="{{url('/edit-agent-profile')}}" onsubmit="return validate1()" method="POST" id="agentForm">
                @csrf
                <h2 class="text-center mt-5">Edit Profile</h2>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="a_code" class="form-label">Agent Code</label>
                                <input type="text" class="form-control" id="a_code" name="a_code" value="{{$agent->agent_code}}" placeholder="Agent Code" readonly>
                                <small id="sa_code"></small>
                            </div>
                            <div class="mb-3">
                                <label for="f_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="f_name" name="f_name" value="{{$agent->fname}}" placeholder="First Name" readonly>
                                <small id="sf_name"></small>
                            </div>
                            <div class="mb-4 mt-4">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="radio" name="gender" id="gender " value="male" {{($agent->gender=='male')?"checked":""}}/>
                                Male&emsp;&emsp;<input type="radio" id="gender" name="gender" value="female" {{($agent->gender=='female')?"checked":""}}/>
                                Female
                            </div>
                            <div class="mb-3">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="DOB" name="DOB" value="{{$agent->dob}}">
                                <small id="sdate"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="m_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="m_number" name="m_number" value="{{$agent->mobile}}"
                                    placeholder="Mobile Number" readonly>
                                <small id="sm_number"class="danger"></small>
                                </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$agent->address}}">
                                <small id="saddress"></small>
                            </div>
                            <div class="mb-3">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" value="{{$agent->pincode}}">
                                <small id="spincode"></small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-danger ms-2">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('agent_css_js/agent_profile.js')}}"></script>

</body>

</html>
