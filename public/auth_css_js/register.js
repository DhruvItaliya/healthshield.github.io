function validate1() {
    let f_name = document.getElementById("f_name");
    let l_name = document.getElementById("l_name");
    let m_number = document.getElementById("m_number");
    let password = document.getElementById("password");
    let c_password = document.getElementById("c_password");
    flag = true;

    if (f_name.value.trim() == "" ||l_name.value.trim() == ""|| m_number.value.trim() == "" || password.value.trim() == "" ||c_password.value.trim() == "" ) {
        alert('Please fill out all fields');
        return false;
    }
    if (!/^[a-zA-Z]+$/.test(f_name.value.trim())) {
        flag = false;
        document.getElementById("sf_name").innerHTML = "First name contains letters only";
        f_name.style.border = "solid red 2px";
    }

    if (!/^[a-zA-Z]+$/.test(l_name.value.trim())) {
        flag = false;
        document.getElementById("sl_name").innerHTML = "Last name contains letters only";
        l_name.style.border = "solid red 2px";
    }
    if (!/[6789][0-9]{9}$/.test(m_number.value.trim())) {
        flag = false;
        document.getElementById("sm_number").innerHTML = "Mobile number not valid";
        m_number.style.border = "solid red 2px";
    }
    if (!/^(?=.*\d)(?=.*[a-z])(?=.*[@#%&*/=])(?=.*[A-Z]).{8,12}$/.test(password.value.trim())) {
        flag = false;
        document.getElementById("spassword").innerHTML = "Password does not match format";
        password.style.border = "solid red 2px";
    }
    if (password.value!=c_password.value) {
        flag = false;
        document.getElementById("sc_password").innerHTML = "Both passwords should be the same";
        c_password.style.border = "solid red 2px";
    }
    return flag;
}
function validate2() {
    let a_code = document.getElementById("a_code");
    let f_name = document.getElementById("af_name");
    let m_number = document.getElementById("am_number");
    let password = document.getElementById("apassword");
    let c_password = document.getElementById("ac_password");
    flag = true;
    if (a_code.value.trim() == "" ||f_name.value.trim() == ""|| m_number.value.trim() == "" || password.value.trim() == "" ||c_password.value.trim() == "" ) {
        alert('Please fill out all fields');
        return false;
    }
    if (!/^[a-z]{3}[0-9]{3}[a-z]{3}$/.test(a_code.value.trim())) {
        flag = false;
        document.getElementById("sa_code").innerHTML = "Agent code does not match format";
        a_code.style.border = "solid red 2px";
    }
    if (!/^[a-zA-Z]+$/.test(f_name.value.trim())) {
        flag = false;
        document.getElementById("saf_name").innerHTML = "First name contains letters only";
        f_name.style.border = "solid red 2px";
    }
    if (!/[6789][0-9]{9}$/.test(m_number.value.trim())) {
        flag = false;
        document.getElementById("sam_number").innerHTML = "Mobile number not valid";
        m_number.style.border = "solid red 2px";
    }
    if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/.test(password.value.trim())) {
        flag = false;
        document.getElementById("sapassword").innerHTML = "Password does not match format";
        password.style.border = "solid red 2px";
    }
    if (password.value!=c_password.value) {
        flag = false;
        document.getElementById("sac_password").innerHTML = "Both passwords should be the same";
        c_password.style.border = "solid red 2px";
    }
    return flag;
}
