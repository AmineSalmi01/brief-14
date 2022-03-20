<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "brief14";

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn)
{
    echo "Database connection fails";
}
?>
