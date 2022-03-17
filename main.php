<?php include 'config.php'?>

<?php 
  $query_prod = "SELECT * FROM produit";
  $data = mysqli_query($conn, $query_prod);
  $produit = mysqli_fetch_assoc($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script><link rel="stylesheet" href="main.css">
    <title>Brief14</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar navbar" style="background-color: black;">
        <div id="cont" class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <i class="fa-solid fa-house house"></i>
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

<div class="row mainbackground">
  <img style="width: 100%;" src="background.png">
</div> 
</header>

<div class="container " style="text-align: center;">
   <h1>Featuring</h1>

<div class="row d-flex justify-content-center">
<?php
do{ 
  echo "
  <div class='col-3  mr-5 card'>
  <a href='detail.php?idProduit=".$produit['idProduit']."'><img class='card-img-top' src='assets/".$produit["image"]."' alt='Card image'></a>
  <div class='card-body'>
      <h4 class='card-title'>".$produit["prix"]."$</h4>
      <p class='card-text'>".$produit["libelle"]."</p>
      ";
  if($produit["stock"] == 0){
    echo "<a href='#' class='btn' style='background-color: #D1D1D1;color: #fff;'>OUT OF STOCK</a>";
  }
  else{
    echo "<a href='#' class='btn btn-dark'>ADD TO CART</a>";
  }
  echo"</div>
    </div>
  ";
}while ($produit = mysqli_fetch_assoc($data))
?>
</div>

</div>

  <footer class="bg- text-center text-white "style="background-color: black; >
    <div class="container p-4 pb-0 footer" id="f_text">
      © A.R.C UK Limited, 1st Floor, <br>
      262-264 Regent Street, London - W1B 3AQ <br>
      VAT number: +212 56 83 36 65 <br>
    </div>
    <!-- Copyright -->
    <div class="text-center footer2 p-3 fcont" style="background-color: rgba(0, 0, 0, 0.2);">
      <div>
        <i class="fa-solid fa-phone" style="color: white;"></i>
        <span>: +212 56 83 36 65</span>
      </div>
      <div>
        © 2022 Copyright: <a class="text-white" href="main.php"> A.R.C Company</a>
      </div>
      <div>
        <i class="fa-brands fa-twitter Ficone" style="color: white;"></i>
        <i class="fa-brands fa-facebook-square Ficone" style="color: white;"></i>
        <i class="fa-brands fa-instagram Ficone" style="color: white;"></i>
      </div>
    </div>
    
</footer>
    
</body>
</html>