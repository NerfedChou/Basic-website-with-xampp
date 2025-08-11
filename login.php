<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header>
        <div class="imgheader">
            <img src="LoginPics/loginheader.jpg" alt="">
        </div>
    </header>
    <div class="form"> <!-- Region -->
        <span class="login-form">
            Login in With
        </span>
        <span class="loginArea">
            <form action="welcome.php" method="post">
                <div class = "account">
                    <img src ="LoginPics/account.svg" alt="account"/>
                </div>
                <span class="login">
                        <input type="text" name="email" placeholder="Email"><br><br>
                    <div class="password-wrapper">
                        <input type="password" id = "password" name="password" placeholder="Password"><br><br>
                        <span class="show-password" onclick="togglePassword()">
                            <img id ="icon" src="LoginPics/notactive.png" />
                        </span>
                    </div>
                </span>
                <span class = "fp" >Forgot password?</span>
            <input type="submit" class = "submit" value="Login"> 
            </form>
            <span class = "reg">
                <span = >No Account yet? 
                    <a>Register here</a>
                </span>
            </span>
        </span>
    </div>
<script src="script/login.js"></script>
</body>
</html>