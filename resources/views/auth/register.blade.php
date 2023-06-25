<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('auth_css_js/register.css') }}">
</head>

<body>
    <div class="container" id="loginPopup">
        <button id="closeButton">X</button>
        <div class="row mb-1">
            <div><img class="logo" src="{{ url('layouts_css_js/logo.png') }}" alt="logo"></div>
            <div class="col-md-1 me-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="userType" id="customerRadio" value="customer"
                        checked>
                    <label class="form-check-label" for="customerRadio">Client</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="userType" id="agentRadio" value="agent">
                    <label class="form-check-label" for="agentRadio">Admin</label>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{ url('/register/client') }}" onsubmit="return validate1()" method="post" id="customerForm">
                @csrf
                @if (session('success'))
                    <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('fail'))
                    <div id="alertMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="f_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="f_name" name="f_name"
                                    placeholder="First Name">
                                <small id="sf_name" class="text-danger">
                                    @error('f_name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="l_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="l_name" name="l_name"
                                    placeholder="Last Name">
                                <small id="sl_name" class="text-danger">
                                    @error('l_name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="m_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="m_number" name="m_number"
                                    placeholder="Mobile Number">
                                <small id="sm_number" class="text-danger">
                                    @error('m_number')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <small id="spassword" class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="c_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="c_password" name="c_password"
                                    placeholder="Confirm Password">
                                <small id="sc_password" class="text-danger">
                                    @error('c_password')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">Already regisred? <a href="{{ url('/login') }}">Login</a></p>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <button type="reset" class="btn btn-danger ms-2">Reset</button>
                </div>
            </form>
        </div>
        <div class="row">
            <form action="{{ url('/register/agent') }}" onsubmit="return validate2()" method="POST" id="agentForm"
                style="display:none;">
                @csrf
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="a_code" class="form-label">Admin Code</label>
                                <input type="text" class="form-control" name="a_code" id="a_code"
                                    placeholder="Admin Code">
                                <small id="sa_code" class="text-danger">
                                    @error('a_code')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="af_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="af_name" id="af_name"
                                    placeholder="First Name">
                                <small id="saf_name" class="text-danger">
                                    @error('af_name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="am_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="am_number" id="am_number"
                                    placeholder="Mobile Number">
                                <small id="sam_number" class="text-danger">
                                    @error('am_number')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="apassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="apassword" id="apassword"
                                    placeholder="Password">
                                <small id="sapassword" class="text-danger">
                                    @error('apassword')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label for="ac_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="ac_password" id="ac_password"
                                    placeholder="Confirm Password">
                                <small id="sac_password" class="text-danger">
                                    @error('ac_password')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">Already regisred? <a href="{{ url('/login') }}">Login</a></p>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <button type="reset" class="btn btn-danger ms-2">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('auth_css_js/register.js') }}"></script>
    <script>
        // Function to handle radio button change event
        function handleUserTypeChange() {
            var customerForm = document.getElementById("customerForm");
            var agentForm = document.getElementById("agentForm");
            var customerRadio = document.getElementById("customerRadio");

            if (customerRadio.checked) {
                customerForm.style.display = "block";
                agentForm.style.display = "none";
            } else {
                customerForm.style.display = "none";
                agentForm.style.display = "block";
            }
        }

        // Attach event listener to the radio buttons
        var customerRadio = document.getElementById("customerRadio");
        var agentRadio = document.getElementById("agentRadio");
        customerRadio.addEventListener("change", handleUserTypeChange);
        agentRadio.addEventListener("change", handleUserTypeChange);
        document.getElementById('closeButton').addEventListener('click', function() {
            window.location.assign("{{ url('/') }}");
        });
        setTimeout(function() {
            document.getElementById('alertMessage').remove();
        }, 3000);
    </script>
</body>

</html>
