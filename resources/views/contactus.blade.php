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

    <title>Login</title>
</head>
<body>
<header>

      
<i class="fa fa-bars menu-toggle"></i>
<ul class="nav">
    <li><a href="/">Home</a></li>
    <li><a href="/au">About</a></li>
    <li><a href="/cu">Contact Us</a></li>

    <div class="logo">
     <h1 class="logo-text"><span><i>Blogging </i></span><i>Channel</i></h1>
    </div>
    
    <li>
        <a href="#">
            <i class="fa fa-user"></i>
            Me
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
    <ul>

        <li><a href="/d">Dashboard</a></li>
        <li><a href="/l" class="logout">Logout</a></li>
    </ul>
    </li>

    <li>
        <a href="#">
            <i class="fas fa-archive"></i>
            Topics
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
      <ul>
    <li><a href ="#">Poems</a></li>
    <li><a href ="#">Quotes</a></li>
    <li><a href ="#"> Fiction</a></li>
    <li><a href ="#"> Biography</a></li>
    <li><a href ="#"> Motivation</a></li>
    <li><a href ="#">Inspiration</a></li>
    <li><a href ="#">Life Lessons</a></li>
</ul>
</li>


<li>
        <a href="#">
            <i class="fa fa-camera-retro"></i>
            Other Links
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
<ul>
    <li><a href ="#">Events</a></li>
    <li><a href ="#">Teams</a></li>
    <li><a href ="#"> Mentor</a></li>
    <li><a href ="#"> Gallery</a></li>
    <li><a href ="#"> Terms and Conditions</a></li>
</ul>
</ul>

<div class="sidebar">


<div class="section search">
<form action="index.blade" method="post">
<input type="text" name="search-term" class="text-input" placeholder="Search.....">
</form>
</div>



</div>

</div>
</header>
  


    <div class="footer-section social contact-form">
    <p style="font-size:30px">Fill out the Form.</p>
    <br>
    <form action="contactus",method="POST">
        @csrf
        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address....">
        <textarea rows="7"  name="message" class="text-input contact-input" placeholder="Your message...."></textarea>
        <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send Us
        </button>
    </form>
</div>


 


