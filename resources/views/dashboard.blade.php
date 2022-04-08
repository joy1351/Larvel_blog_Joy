<!DOCTYPE html>
<html lang="en">
<head>

<style>
             table {
             font-family: arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
              }

             td, th {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 8px;
             }

             tr:nth-child(even) {
             background-color: #dddddd;
             }
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----Font Awesome------>
    <script src="https://kit.fontawesome.com/b0ad2c5cd1.js" crossorigin="anonymous"></script>

    <!----Custom Styling-->
    <link rel="stylesheet" href="../../css/style.css">

    <!---Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/admin.css">


    <title>Admin Section - Manage Posts</title>
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

<div>
<div class="section search">
<form action="index.blade" method="post">
<input type="text" name="search-term" class="text-input" placeholder="Search.....">
</form>
</div>




</div>

</div>
</header>

    
<div class="admin-wrapper">


   


<div class="admin-content">


<div class="content">

<h2 class="page-title">Your Posts</h2>

<table>
 <thead>
   <th>SN</th>
   <th>Title</th>


 </thead>
<tbody>

    <tr>
    <td>1</td>
    <td><h2>Blogging Craze</h2></td>
    


    </tr>

    <tr>
        <td>2</td>
        <td><h2>All about Nature</h2></td>
        

    
        </tr>

   <tr>
        <td>3</td>
        <td><h2>Barrack Obama</h2></td>
        

    
        </tr>
   <tr>
        <td>4</td>
        <td><h2>Joker</h2></td>
        

    
        </tr>

</tbody>

</table>

</div>



</div>






</div>

<!----Page Wrapper-->
 



</body>

</html>