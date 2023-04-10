<?php 
    session_start();  
    $_SESSION["tarifa"]=$_GET["tarifa"];
    header("Location: ../views/pagina_de_entrada_admin.php");
?>