<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body style="background-color: #c4c4C4;">
    <?php include 'nav.html'?>
    <?php 
    include 'config.php';
    if(isset($_REQUEST['idProduit'])){
        $id = $_REQUEST['idProduit'];
        $select = "SELECT * FROM produit WHERE idProduit = '$id'";
        $data = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($data);
    }
    ?>
    <div style="display: flex !important; justify-content:center !important; width:100%; margin:50px 0px;">
     <div class="" id="cnt1"style="width:80% !important; height:500px; display: flex !important; justify-content:center !important; align-items: center; background-color: white;border-radius: 10px ;">
        <div>
            <img style="width:400px;" id="imgdetail" src="<?php echo "assets/".$row["image"]?>" alt="Card image">
        </div>
        <div>
                <h4 class="card-text" style="font-weight: bold;color: #000;margin:20px;">
                <?php echo $row["libelle"]?>
                </h4>
                <p style="margin:20px;"><?php echo $row["description"]?></p>
                <h4 class="card-title" style="font-weight:bold;margin:20px;"><?php echo $row["prix"]?>$</h4>

              <form action="add_to_cart.php?id=<?php echo $row["idProduit"]?>" method="post">
              <?php
                if($row["stock"] == 0){
                    echo "<a href='login.html' class='btn' style='margin:20px;background-color: #D1D1D1;color: #fff;'>OUT OF STOCK</a>";
                }
                else{
                    echo "<input type='submit' value='ADD TO CART' class='btn btn-dark' style='margin:20px;'>";
                }
              ?>
              <input type="text" style="background-color:white" name="quantite" value="1">
              </form>
        </div>
     </div>
    </div>

    <?php include 'footer.html'?>
</body>
</html>