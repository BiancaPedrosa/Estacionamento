<?php
     include("../database/conexao.php");           
     $ret=mysqli_query($db,"select * from tabela_veiculo where Status='Dentro' ORDER BY nomeproprietario ASC");
     return $ret;
?>