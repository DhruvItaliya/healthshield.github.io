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
                            <span class="form-label">First Name:</span>
                            <span>{{ $client->fname }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Last Name:</span>
                            <span>{{ $client->lname }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Middle Name:</span>
                            <span>{{ $client->mname }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Gender:</span>
                            <span>{{ $client->gender }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Date of Birth:</span>
                            <span>{{ $client->dob }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Mobile:</span>
                            <span>{{ $client->mobile }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Address:</span>
                            <span>{{ $client->address }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Pincode:</span>
                            <span>{{ $client->pincode }}</span>
                        </div>

                        <div class="mb-3">
                            <span class="form-label">Marital Status:</span>
                            <span>{{ $client->marital_status }}</span>
                        </div>

                        @if ($client->marital_status == 'married')
                        <div class="mb-3">
                            <span class="form-label">Spouse Name:</span>
                            <span>{{ $client->spouse_name }}</span>
                        </div>
                        @endif

                        <div class="mb-3">
                            <span class="form-label">Family Members:</span>
                            <span>{{ $client->family_member }}</span>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-4">
                        <a href="{{url('/edit-profile')}}"><button class="btn btn-primary">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
