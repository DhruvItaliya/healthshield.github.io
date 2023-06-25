<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('client_css_js/profile.css') }}">

</head>

<body onload="toggleSpouseInput()">
    @include('layouts.header');
    <div>
        <form action="{{url('/edit-profile')}}" onsubmit="return validate1()" method="post" id="profileForm">
            @csrf
            <h2 class="text-center mt-4">Edit Profile</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="f_name" class="form-label">First Name(Head)</label>
                            <input type="text" class="form-control" id="f_name" name="f_name"
                                placeholder="First Name" value={{$client->fname}} readonly>
                            <small id="sf_name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="m_name" class="form-label">Middle Name(Head)</label>
                            <input type="text" class="form-control" id="m_name" name="m_name"
                                placeholder="Middle Name" value={{$client->mname}}>
                            <small id="sm_name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="l_name" class="form-label">Last Name(Head)</label>
                            <input type="text" class="form-control" id="l_name" name="l_name"
                                placeholder="Last Name" value="{{$client->lname}}" readonly>
                            <small id="sl_name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>&emsp;
                            <input type="radio" name="gender" value="male" {{($client->gender=='male')?"checked":""}} />
                            Male&emsp;&emsp;<input type="radio" name="gender" value="female" {{($client->gender=='female')?"checked":""}} />
                            Female
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" value={{$client->dob}} max="" required>
                            <small id="sdob"></small>
                        </div>
                        <div class="mb-3">
                            <label for="m_number" class="form-label">Mobile Number(Head)</label>
                            <input type="text" class="form-control" id="m_number" name="m_number"
                                placeholder="Mobile Number" value={{$client->mobile}} readonly>
                            <small id="sm_number"></small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Address" value="{{$client->address}}">
                            <small id="saddress"></small>
                        </div>
                        <div class="mb-3">
                            <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" class="form-control" id="pincode" name="pincode"
                                placeholder="Pincode" value="{{$client->pincode}}">
                            <small id="spincode"></small>
                        </div>
                        <div class="mb-3">
                            <label for="m_status" class="form-label">Marital Status</label>&emsp;
                            <input type="radio" onchange="toggleSpouseInput()" name="m_status" value="single" {{($client->marital_status=='single')?"checked":""}}/>
                            Single&emsp;&emsp;<input type="radio" onchange="toggleSpouseInput()" name="m_status"
                                value="married" {{($client->marital_status=='married')?"checked":""}} />
                            Married
                        </div>
                        <div class="mb-3">
                            <label for="spouse" class="form-label">Spouse Name</label>
                            <input type="text" class="form-control" id="spouse" name="spouse"
                                placeholder="Spouse Name" autocomplete="off">
                            <small id="sspouse"></small>
                        </div>
                        <div class="mb-3">
                            <label for="children" class="form-label">Children<button type="button"
                                    class="info-button" onclick="showInfo()">i</button></label>
                            <input type="number" class="form-control" id="children" name="children"
                                placeholder="No. of children" value={{$client->children}} min="0">
                            <small id="schildren"></small>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.footer')
    <script src="{{ url('policy_css_js/get_data.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script>
        function showInfo() {
            alert("Premium will be calculated on basis of total family member")
        }

        function toggleSpouseInput() {
            var maritalStatus = document.querySelector('input[name="m_status"]:checked').value;
            var spouseNameInput = document.getElementById("spouse");
            var childrenInput = document.getElementById("children");

            if (maritalStatus === "single") {
                spouseNameInput.disabled = true;
                childrenInput.disabled = true;
                spouseNameInput.value = "";
            } else {
                spouseNameInput.disabled = false;
                childrenInput.disabled = false;
            }
        }
    </script>
</body>

</html>
