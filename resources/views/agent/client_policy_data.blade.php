<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registered Policy</title>
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

                        <form action="" method="GET" class="search me-1 mt-2 mb-4">
                            <div class="form-group d-flex">
                                <input type="search" name="search" id="" class="form-control"
                                    placeholder="Search by Policy ID or Description" value="{{ $search }}">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>Policy ID</th>
                                    <th>Mobile</th>
                                    <th>Family<br> Member</th>
                                    <th>Premium</th>
                                    <th>Total<br> Premium</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->policy_id }}</td>
                                        <td>{{ $client->mobile }}</td>
                                        <td>{{ $client->family_member }}</td>
                                        <td>{{ $client->premium }}</td>
                                        <td>{{ $client->total_premium }}</td>
                                        <td>{{ $client->start_date }}</td>
                                        <td>{{ $client->end_date }}</td>
                                        <td style="text-align: center;">
                                            @if ($client->end_date > now()->format('Y-m-d'))
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Deactive</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {!! $clients->links() !!}
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
