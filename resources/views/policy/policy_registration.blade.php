<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('policy_css_js/policy_registration.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="form-main">
        <form action="{{ url('/policy_registration') }}"  class="mb-4" onsubmit="return validate1()" method="post" id="profileForm">
            @if (session('success'))
                <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('fail'))
                <div id="alertMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('fail')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @csrf
            <h2 class="text-center mt-4 pt-4">Policy Registration</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label for="p_id" class="form-label">Policy ID</label>
                            <input type="text" class="form-control" id="p_id" name="p_id"
                                placeholder="Policy ID">
                            <small id="sp_id"></small>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description<button type="button"
                                    class="info-button ms-1" onclick="showInfo()">i</button></label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="Description">
                            <small id="sdescription"></small>
                        </div>
                        <div class="mb-3">
                            <label for="premium" class="form-label">Premium</label>
                            <input type="text" class="form-control" id="premium" name="premium"
                                placeholder="Premium">
                            <small id="spremium"></small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <button type="reset" class="btn btn-danger ms-2">Reset</button>
                    </div>
                </div>
        </form>
    </div>
    @include('layouts.footer')
    <script src="{{ url('policy_css_js/policy_registration.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script>
        function showInfo() {
            alert("Description should properly define policy within 200 characters")
        }
        setTimeout(function() {
            document.getElementById('alertMessage').remove();
        }, 3000);
    </script>
</body>

</html>
