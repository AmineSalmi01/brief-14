<?php
    session_start();
    include 'config.php';
    if(!isset($_SESSION["cart1"] )){
        $_SESSION["cart1"] = [];
    }
    $object = (object) ["idProduit"=>$_GET["id"], "quantite"=>$_POST["quantite"]];
    array_push($_SESSION["cart1"], $object);
    header("location: cart.php");
?>
