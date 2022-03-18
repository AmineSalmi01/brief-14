<?php
    session_start();
    include 'config.php';
    if(!isset($_SESSION["cart"] )){
        $_SESSION["cart"] = [];
    }
    $object = (object) ["idProduit"=>$_GET["id"], "quantite"=>$_POST["quantite"]];
    array_push($_SESSION["cart"], $object);
    header("location: cart.php");
?>
