function validateForm() {
    let name = document.forms["contact"]["name"].value;
    let email = document.forms["contact"]["email"].value;
    let msg = document.forms["contact"]["message"].value;

    return validateInput(name, "Name")
        && validateInput(email, "Email")
        && validateInput(msg, "Message");

}

function validateInput(value, name) {
    if (value == "") {
        alert(name + " must be filled out");
        return false;
    }
    return true;
}