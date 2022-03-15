<?php
require("config.php");


if(isset($_POST['submit'])){

$firstname = $_POST['first_name'];
$lastname  = $_POST['last_name'];
$address = $_POST['address'];
$phone = $_POST['phone_number'];
$email = $_POST['email'];
$password =md5($_POST['password']);

$sql = "
    INSERT INTO client (idClient,nom,prenom,adresse,telephone,email,pass)
    VALUES(
          null,  '$firstname','$lastname','$address','$phone','$email','$password')";

     $result = mysqli_query($conn,$sql);

     if($result){
         header('location:main.php');
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script><link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main.css">
    <title>Sign in</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar navbar" style="background-color: black;">
          <div id="cont" class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="main.php"><i class="fa-solid fa-house house"></i></a>
              <form >
                  <div class="textbox">
                    <i class="fa-solid fa-magnifying-glass icone"></i>
                   <input type="search" placeholder="Search" id="search">
                  </div>
              </form>
            </div>
            <div>
              <span id="name">A.R.C</span>
            </div>
            <div> <a href="login.php"> <i class="fa-solid fa-user icone"></i> </a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping icone"></i></a>
            </div>
          </div>
        </nav>
  </header>
          
    <div class="wrapper fadeInDown">
        <h1>Sign up</h1>
        <div id="formContent">
          <!-- Login Form -->
          <form action="" method="POST">
            <input type="text" id="first_name" class="fadeIn second" name="first_name" placeholder="First Name...">
            <input type="text" id="last_name" class="fadeIn third" name="last_name" placeholder="Last Name...">
            <input type="text" id="address" class="fadeIn third" name="address" placeholder="Address...">
            <input type="text" id="phone_number" class="fadeIn third" name="phone_number" placeholder="Phone Number...">
            <input type="text" id="email" class="fadeIn third" name="email" placeholder="Email...">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password...">
            <input type="text"  id="confirm_password"  class="fadeIn third"  placeholder="Confirm Password...">
            <input type="submit" class="bg-fourth" value=" Sign up" style="background-color: white;" name="submit">
          </form>
      
        </div>
      </div>
    
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>