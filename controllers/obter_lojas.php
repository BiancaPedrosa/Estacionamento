<?php
     include("../database/conexao.php");           
     $ret=mysqli_query($db,"select *from tabela_loja ORDER BY nomeLoja ASC");
     return $ret;
?>