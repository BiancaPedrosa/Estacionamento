<?php
$database =array(
     'host' => 'localhost:8889',
     'dbname' =>'estacionamento',
     'user' => 'root',
     'password' =>'ifsp'
);
@ $db = mysqli_connect($database['host'],$database['user'],$database['password'],$database['dbname']) or die('não encontrei o servidor');
mysqli_set_charset($db,"utf8");
?>
