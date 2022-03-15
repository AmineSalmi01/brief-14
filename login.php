<?php
  include 'config.php';
  session_start();
  error_reporting();
  
  if(isset($_SESSION['idClient'])){
    }
    if(isset($_POST['login'])){
      $email = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM client WHERE email = '$email' AND pass = '$password'";
      $result = mysqli_query($conn, $sql);
      if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['idClient'] = $row['idClient'];
        header("location: main.php");
      }
      else {
        echo "<script>alert('woops')</script>";
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script><link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main.css">
    <title>Log in</title>
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
            <h1>Log in</h1>
            <div id="formContent">
              <!-- Login Form -->
              <form action="main.php"  method="post">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email....">
                <input type="text" id="password" class="fadeIn third" name="pass" placeholder="Password...">
                <input type="submit" class="bg-fourth" name="submit" value=" Log in" style="background-color: white;">
              </form>
          
              <!-- Remind Passowrd -->
              <div id="formFooter">
                  <p>You don't have an accunt?</p>
                <a class="underlineHover" href="signin.php">Click here to sign up for free</a>
              </div>
          
            </div>
          </div>
    
    
</body>
</html>