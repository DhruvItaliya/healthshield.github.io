function validate1() {
    let m_name = document.getElementById("m_name");
    let address = document.getElementById("address");
    let pincode = document.getElementById("pincode");
    let spouse = document.getElementById("spouse");
    let maritalStatus = document.querySelector('input[name="m_status"]:checked').value;
    let birthdateInput = document.getElementById("dob");
    let birthdate = new Date(birthdateInput.value);
    let today = new Date();
    let age = today.getFullYear() - birthdate.getFullYear();
    let monthDiff = today.getMonth() - birthdate.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate.getDate())) {
        age--;
    }
    flag = true;

    if (m_name.value.trim() === "" || address.value.trim() === "" || pincode.value.trim() === "") {
        alert('Please fill out all fields');
        return false;
    }
    if (!/^[a-zA-Z]+$/.test(m_name.value.trim())) {
        flag = false;
        document.getElementById("sm_name").innerHTML = "Second name contains letters only";
        m_name.style.border = "solid red 2px";
    }
    if (age<18) {
        flag = false;
        document.getElementById("sdob").innerHTML = "Your age must be over 18";
        dob.style.border = "solid red 2px";
    }
    if (address.value.trim().length <= 20) {
        flag = false;
        document.getElementById("saddress").innerHTML = "Address length should more than 20";
        address.style.border = "solid red 2px";
    }
    if (!/^[0-9]{6}$/.test(pincode.value.trim())) {
        flag = false;
        document.getElementById("spincode").innerHTML = "Pincode contain only 6 numbers";
        pincode.style.border = "solid red 2px";
    }
    if (!/^[a-zA-Z]+$/.test(spouse.value.trim()) && maritalStatus === "married") {
        flag = false;
        document.getElementById("sspouse").innerHTML = "Spouse contains letters only";
        spouse.style.border = "solid red 2px";
    }

    return flag;
}
