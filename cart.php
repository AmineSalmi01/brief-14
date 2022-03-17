<?php
  session_start();
  include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Shopping Cart</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div id="cont" class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <a href="main.php"><i class="fa-solid fa-house house" style="color: white;"></i></a >
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
          <div>

          
            <a href="main.php">  <p id="ks"  >Keep Shopping ></p> </a>

          </div>
        </div>
      </nav>   

      <div class="container">
        <div class="row">
          <?php
            foreach($_SESSION["cart1"] as $value){
              $sql = "SELECT * FROM produit WHERE idProduit =".$value->idProduit;
              $dt = $conn->query($sql);
              $result = $dt->fetch_assoc();
          ?>
          <div class="col-sm-8">
            <img src="<?php echo $result["image"] ?>" alt="" width="150px" id="pic1">
            <ul id="line1"><?php echo $result["libelle"] ?></ul> 
            <ul id="price1"><?php echo $result["prix"] ?></ul>
            <ul id="line2"><?php echo $result["description"] ?></ul>
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
              </div>
          </div>
          <?php
            }
          ?>
          <div class="col-sm-4">
            <ul id="line3">Summary Of Your Order</ul>
            <ul id="line4">Subtotal:</ul> <ul id="total">420.69$</ul>
            <button id="orderbtn">ORDER</button> <br>
            <p id="cpn">Have a coupon?</p>
            <input type="text" id="couponinpt" >
            <button id="applybtn">Apply</button>
          </div>

          <div class="row">

            
            <div class="col-8">
              <img src="523201_swatch.webp" alt="" width="150px" id="pic1">
              <ul id="line1"> Gucci Mascara L’Obscur</ul>
              <ul id="price1">32.00$</ul>
              <ul id="line2">With its black shade that intensifies with each stroke <br>
                to vary the effects</ul>
                <div class="quantity buttons_added">
                  <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                </div>
            </div>
          </div>
        </div>

    
</body>
</html>
