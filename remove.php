<?php
    session_start();
    foreach ($_SESSION["cart"] as $key => $value) {
        if($_SESSION["cart"][$key]->idProduit == $_GET["id"]){
            unset($_SESSION["cart"][$key]);
        }
    }
    header("location: cart.php")
?>