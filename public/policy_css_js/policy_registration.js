function validate1() {
    let p_id = document.getElementById("p_id");
    let description = document.getElementById("description");
    let premium = document.getElementById("premium");
    flag = true;

    if (p_id.value.trim() === "" || description.value.trim() === "" || premium.value.trim() === "") {
        alert('Please fill out all fields');
        return false;
    }
    if (!/^[1-9][0-9]?$/.test(p_id.value.trim())) {
        flag = false;
        document.getElementById("sp_id").innerHTML = "Policy ID should be between 1 to 99 unique";
        p_id.style.border = "solid red 2px";
    }
    if (description.value.trim().length > 200) {
        flag = false;
        document.getElementById("sdescription").innerHTML = "Description should be 200 characters or less";
        description.style.border = "solid red 2px";
    }
    if (!/^[1-9][0-9]?[0-9]?[0-9]?$/.test(premium.value.trim())) {
        flag = false;
        document.getElementById("spremium").innerHTML = "Premium should be within range";
        premium.style.border = "solid red 2px";
    }
    return flag;
}
