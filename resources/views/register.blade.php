<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----Font Awesome------>
    <script src="https://kit.fontawesome.com/b0ad2c5cd1.js" crossorigin="anonymous"></script>

    <!----Custom Styling-->
    <link rel="stylesheet" href="css/style.css">

    <!---Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <title>Register</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>Blogging </span>Channel</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="/l">Login</a></li>
          
        
        </ul>
    </header>

    <div class="auth-content">

        <form action="register.blade" method="post">
            <h2 class="form-title">Register</h2>


            <div class="msg error">
            <li>Username Required</li>
            </div>



            <div>
                <label>Username</label>
            <input type="text" name="username" class="text-input">
            </div>
            <div>
                <label>Email</label>
            <input type="email" name="email" class="text-input">
            </div>
            <div>
                <label>Password</label>
            <input type="password" name="password" class="text-input">
            </div>
            <div>
                <label>Password Confirmation</label>
            <input type="password" name="passwordConf" class="text-input">
            </div>    
            <div>
                <button type="submit" name="register.blade" class="btn btn-big"><a href="/">Register</a></button>
            </div>
            <p>Or <a href="/l">Sign Up</a></p>


        </form>


    </div>


    
</body>
</html>