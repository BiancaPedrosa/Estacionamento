<?php 
     session_start();  
     if (isset($_SESSION["tarifa"])){
          $_SESSION["tarifa"]=$_POST["tarifa"];
     }
    header("Location: página_de_entrada_admin.php");
?>