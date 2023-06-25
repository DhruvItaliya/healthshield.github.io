function validate1() {
    let address = document.getElementById("address");
    let pincode = document.getElementById("pincode");
    let birthdateInput = document.getElementById("DOB");
    let birthdate = new Date(birthdateInput.value);
    let today = new Date();
    let age = today.getFullYear() - birthdate.getFullYear();
    let monthDiff = today.getMonth() - birthdate.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate.getDate())) {
        age--;
    }
    flag = true;

    if (address.value.trim() === "" || pincode.value.trim() === "" || birthdateInput.value.trim()==="") {
        alert('Please fill out all fields');
        return false;
    }
    if (age<18) {
        flag = false;
        document.getElementById("sdate").innerHTML = "Your age must be over 18";
        document.getElementById("sdate").style = "color:red;";
        birthdateInput.style.border = "solid red 2px";
    }
    if (address.value.trim().length <= 20) {
        flag = false;
        document.getElementById("saddress").innerHTML = "Address length should more than 20";
        document.getElementById("saddress").style = "color:red;";
        address.style.border = "solid red 2px";
    }
    if (!/^[0-9]{6}$/.test(pincode.value.trim())) {
        flag = false;
        document.getElementById("spincode").innerHTML = "Pincode contain only 6 numbers";
        document.getElementById("spincode").style = "color:red;";
        pincode.style.border = "solid red 2px";
    }
    return flag;
}
