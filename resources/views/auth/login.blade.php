<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('auth_css_js/login.css') }}">
</head>

<body>
    <div class="container mt-4" id="loginPopup">
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
            <form action="{{ url('/login/client') }}" method="post" id="customerForm">
                @csrf
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            @if (session('client_fail'))
                                <div class="alert alert-danger">{{ session('client_fail') }}</div>
                            @endif
                            @if (session('agent_fail'))
                                <div class="alert alert-danger">{{ session('agent_fail') }}</div>
                            @endif
                            <div class="mb-3">
                                <label for="m_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="m_number" name="m_number"
                                    placeholder="Mobile Number">
                                <small id="sm_number"></small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <small id="spassword"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">New user? <a href="{{ url('/register') }}">Register</a></p>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="row">
            <form action="{{ url('/login/agent') }}" id="agentForm" method="POST" style="display:none;">
                @csrf
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="a_code" class="form-label">Admin Code</label>
                                <input type="text" class="form-control" name="a_code" placeholder="Admin Code">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="apassword" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">New user? <a href="{{ url('/register') }}">Register</a></p>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to handle radio button change event
        function handleUserTypeChange() {
            let gotcustomerForm = document.getElementById("customerForm");
            let gotagentForm = document.getElementById("agentForm");
            let gotcustomerRadio = document.getElementById("customerRadio");

            if (gotcustomerRadio.checked) {
                gotcustomerForm.style.display = "block";
                gotagentForm.style.display = "none";
            } else {
                gotcustomerForm.style.display = "none";
                gotagentForm.style.display = "block";
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
    </script>
</body>

</html>
