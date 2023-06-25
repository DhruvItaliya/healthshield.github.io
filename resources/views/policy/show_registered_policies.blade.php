<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Policies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('policy_css_js/show_data.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                @if ($policies_count > 0)
                    <div class="current-policy">
                        <div class="table-responsive">
                            <a href="{{url('/policy_registration')}}"><button class="btn btn-success mt-2 mb-4 ms-1">Add</button></a>
                            <a href="{{url('/agent/client-data')}}"><button class="btn btn-primary mt-2 mb-4 ms-1">Search Client</button></a>
                            <form action="" method="GET" class="search me-1 mt-2 mb-4">
                                <div class="form-group d-flex">
                                    <input type="search" name="search" id="" class="form-control"
                                        placeholder="Search by Policy ID or Description or Premium" value="{{ $search }}">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Policy ID</th>
                                        <th>Description</th>
                                        <th>Premium</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($policies as $policy)
                                        <tr>
                                            <td>{{ $policy->policy_id }}</td>
                                            <td>{{ $policy->description }}</td>
                                            <td>{{ $policy->premium_amount }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="no-policy">
                        <h1>You don't have any active policy right now</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('layouts.footer')

    <script src="{{ url('client_css_js/profile.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
