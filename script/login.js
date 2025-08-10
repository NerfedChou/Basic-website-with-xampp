function togglePassword() {
    const pwd = document.getElementById("password");
    const icon = document.getElementById("icon");
    
    if (pwd.type === "password") {
        pwd.type = "text";
        icon.src = "LoginPics/active.png";
    } else {
        pwd.type = "password";
        icon.src = "LoginPics/notactive.png";
    } 
}