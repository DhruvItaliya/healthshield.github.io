<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('client_css_js/show_profile.css') }}">
</head>
<body>
    @include('layouts.header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>

                        <div class="mb-3">
                            <span class="form-label">Admin Code:</span>
                            <span>{{ $agent->agent_code }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">First Name:</span>
                            <span>{{ $agent->fname }}</span>
                        </div>
                        <div class="mb-3">
                            <span class="form-label">Gender:</span>
                            <span>{{ $agent->gender }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Date of Birth:</span>
                            <span>{{ $agent->dob }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Mobile:</span>
                            <span>{{ $agent->mobile }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Address:</span>
                            <span>{{ $agent->address }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Pincode:</span>
                            <span>{{ $agent->pincode }}</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-4">
                        <a href="{{url('/edit-agent-profile')}}"><button class="btn btn-primary">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
