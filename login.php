<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/stl.css">
</head>
<body>
    <div class="login">
        <a href="#">
            <h2 id="navbar-logo">
                <span class="sp">Login</span>
            </h2>
        </a>
        <div class="signup-form">
            <form action="http://localhost/signup-login/includes/login.php" method="POST" id="form">
                <h1>login to your account</h1>
                <div class="form-validation">
                    <input type="text" class="modul-input" id="username" name="username" placeholder="Enter your username">
                    <p></p>
                </div>
                <div class="form-validation">
                    <input type="password" class="modul-input" id="password" name="password" placeholder="Enter your password">
                    <p></p>
                </div>
                <input type="submit" class="modul-input-btn" name="submit" value="Sign Up">
                <span class="modul-input-login">Create an account? Register <a href="signup.php">Here</a></span>
            </form>
        </div>
    </div>
</body>
</html>