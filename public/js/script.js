function validateForm() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username.trim() === "" || password.trim() === "") {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return false;
    }
    return true;
}

function validateRegisterForm() {
    let username = document.getElementById("reg-username").value;
    let password = document.getElementById("reg-password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    let email = document.getElementById("email").value;

    if (username.trim() === "" || password.trim() === "" || confirmPassword.trim() === "" || email.trim() === "") {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return false;
    }
    
    if (password !== confirmPassword) {
        alert("Mật khẩu nhập lại không khớp!");
        return false;
    }

    return true;
}
