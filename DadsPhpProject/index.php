<?php

include_once "C:\Documents\projects\php\database.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$email = $_POST["email"];
$password = $_POST["password"];
$User_name = $_POST["User_name"];
$submit = $_POST["submit"];
}



?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
<script src="https://kit.fontawesome.com/b821db85cf.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
      <script src="index.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<h1>Technologies</h1>
<ul class="links">
<li><a href="#">Class</a></li>
<li><a class="Log" href="https://thehomeschooldev.com/">TheHomeSchoolDev</a></li>
<li><a class="sign" onclick="form()">Sign up</a></li>
</ul>
</header>
<i class="fab fa-html5"></i>
<section class="form">
<form method="POST">
<h3>Username</h3>
<input type="text" name="User_name" class="Name">
<h3>Email</h3>
<input type="email" name="email" class="Email">
<h3>Password</h3>
<input type="password" name="password" class="Password">
<input type="submit" value="submit" class="submit">
</form>
</section>
<?php echo "<h3>$User_name</h3>"?>
<hr>




<footer>


</footer>


<style>
html{
    background:darkblue;
    width: 100%;
    height: 100%;
    text-decoration: none;
    
  }
  
  header a{
    color:orange;
    position:relative;
    bottom:40px;
    left:30px;
  }

  header a:hover{
    color:;
    text-decoration: none;
    
  }
  
  .links{
      position:relative;
      top:20px;
      font-size:25px;
      display:grid;
  
      grid-template-columns:1fr 1fr 1fr;
      gap:30px;
  }
  
  li{
      list-style:none;
      
  }
   a{
    background:;
    padding:5px;
    border-radius:5px;
    text-decoration: none;
      
  }
  
  a:hover{
      padding:7px;
      transition:.7s ease-in-out;
  }

  .form{
    position: relative;
    left: 1400px;
    
  }

h1{
  color:orange;
}

h3{
  color:orange;

}

.submit{
  color:orange;
  background:;
  border:none;
  border-radius:5px;
  padding:5px;
  outline:none;

}

.Name{
 background:;
 border:none;
 outline:none;
}

.Email{
  background:;
  border:none;
  outline:none;
}

.Password{
  background:;
  border:none;
  outline:none;
}

.image{
width:500px;
height:500px;
}

.top{
  display:grid;
  grid-template-columns:1fr 1fr;
}

i{
font-size:100px;
position:relative;
left:550px;
color:orange;
}

hr{
  border:solid 1px orange;
}
</style>


</body>
</html>