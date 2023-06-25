<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('policy_css_js/show_data.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="current-policy">
                    <div class="table-responsive">
                        <h1 align="center">Registered Users</h1>
                        <form action="" method="GET" class="search me-1 mt-2 mb-4">
                            <div class="form-group d-flex">
                                <input type="search" name="search" id="" class="form-control"
                                    placeholder="Search" value="{{ $search }}">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>Marital<br> Status</th>
                                    <th>Spouse</th>
                                    <th>Children</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->fname }}</td>
                                        <td>{{ $client->mname }}</td>
                                        <td>{{ $client->lname }}</td>
                                        <td>{{ $client->mobile }}</td>
                                        <td>{{ $client->gender }}</td>
                                        <td>{{ $client->dob }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->pincode }}</td>
                                        <td>{{ $client->marital_status }}</td>
                                        <td>{{ $client->spouse_name }}</td>
                                        <td>{{ $client->children }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {{ $clients->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

    <script src="{{ url('client_css_js/profile.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
