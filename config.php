<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_magasin";

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn)
{
    echo "Database connection fails";
}
?>
<?php
    class DB {
     private $servername = "localhost";
     private $username = "root";
     private $password = "";
     private $database = "gestion_magasin";
     private $conx;

     function __construct() {
         $this->conx = $this->connectDB();
     }
     function connectDB() {
         $conx= mysqli_connect($this->servername,$this->username,$this->password,$this->database);
         return $conx;
     }
     function runQuery($query){
         $result = mysqli_query($this->conx,$query);
         while($row=mysqli_fetch_assoc($result)){
             $resultset[] = $row;
         }
         if(!empty($resultset))
         return $resultset;
     }
     function numRows($query){
         $result = mysqli_query($this->conx,$query);
         $rowcount = mysqli_num_rows($result);
         return $rowcount;
     }
    }
?>