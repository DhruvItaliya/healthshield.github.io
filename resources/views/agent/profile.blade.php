<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('agent_css_js/register.css') }}">

</head>
<body>
    @include('layouts.header')
        <div>
            <form action="{{url('/set-agent-profile')}}" onsubmit="return validate1()" method="POST" id="agentForm">
                @csrf
                <h2 class="text-center mt-5">Set Profile</h2>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="a_code" class="form-label">Agent Code</label>
                                <input type="text" class="form-control" name="a_code" value="{{$agent_code}}" placeholder="Agent Code" readonly>
                                <small id="sa_code"></small>
                            </div>
                            <div class="mb-3">
                                <label for="f_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="f_name" value="{{$fname}}" placeholder="First Name" readonly>
                                <small id="sf_name"></small>
                            </div>
                            <div class="mb-4 mt-4">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="radio" name="gender" value="male" checked/>
                                Male&emsp;&emsp;<input type="radio" name="gender" value="female" />
                                Female
                            </div>
                            <div class="mb-3">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="DOB">
                                <small id="sdate"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="m_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="m_number" value="{{$mobile}}"
                                    placeholder="Mobile Number" readonly>
                                <small id="sm_number"></small>
                                </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address">
                                <small id="saddress"></small>
                            </div>
                            <div class="mb-3">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" class="form-control" name="pincode" placeholder="Pincode">
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
    <script src="{{url('agent_css_js.agent_profile.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
