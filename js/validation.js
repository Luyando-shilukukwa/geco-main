function validateForm() {
    let username = document.forms["signup"]["username"].value;
    let email = document.forms["signup"]["email"].value;
    let password = document.forms["signup"]["password"].value;
    let confirmPassword = document.forms["signup"]["confirm-password"].value;
    let errorBox = document.getElementById("error-box");

    if (username == "") {
        errorBox.innerHTML = "Please enter a username.";
        return false;
    }

    if (email == "") {
        errorBox.innerHTML = "Please enter an email address.";
        return false;
    }
    if (password == "") {
    errorBox.innerHTML = "Please enter a password.";
    return false;
}

if (confirmPassword == "") {
    errorBox.innerHTML = "Please confirm your password.";
    return false;
}

if (password != confirmPassword) {
    errorBox.innerHTML = "Passwords do not match.";
    return false;
}

return true;
}