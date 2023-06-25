<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('policy_css_js/show_data.css') }}">

</head>

<body>
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if ($policies_count > 0)
                <h1 class=" heading text-center mt-4">Your Policy</h1>
                <div class="current-policy">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Policy ID</th>
                                    <th>Family Member</th>
                                    <th>Premium</th>
                                    <th>Total Premium</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($policies as $policy)
                                <tr>
                                    <td>{{ $policy->policy_id }}</td>
                                    <td>{{ $policy->family_member }}</td>
                                    <td>{{ $policy->premium }}</td>
                                    <td>{{ $policy->total_premium }}</td>
                                    <td>{{ $policy->start_date }}</td>
                                    <td>{{ $policy->end_date }}</td>
                                    <td style="text-align: center;">
                                        @if ($policy->end_date > now()->format('Y-m-d'))
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Deactive</span>
                                        @endif
                                    </td>
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
