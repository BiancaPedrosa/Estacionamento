<?php

$UsuarioAdmin= $_POST['NomeUsuario'];
$Senha = md5($_POST['Senha']);

include("../database/conexao.php");

mysqli_select_db($db,'estacionamento');
$sql="select NomeUsuario, Senha from tabela_admin where NomeUsuario = '$UsuarioAdmin' AND Senha = '$Senha'";
$result= mysqli_query($db,$sql) or die ("Erro no banco de dados");
$num_results = mysqli_num_rows($result);

if($num_results>0){
    header('location:../views/pagina_de_entrada_admin.php');
}
else{
   echo "<div><p style=' font-family: 'Trirong', serif;color: #FF6356;'><img src='https://img.icons8.com/plasticine/50/000000/error.png' style='vertical-align: middle;'/> Nome de usuário ou senha incorreta!</p></div>";  
    //header('location:../index.php');
      
}
?>