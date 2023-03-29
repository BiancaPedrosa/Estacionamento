<?php
    session_start();
    include("conexão.php");
    $Modelo=$_POST['Modelo'];
    $Cor=$_POST['Cor'];
    $Marca=$_POST['Marca'];
    $Placa=$_POST['Placa'];
    $NomeProprietario=$_POST['NomeProprietario'];
    $TelefoneProprietario=$_POST['TelefoneProprietario'];
    $NumeroEstacionamento=$_POST['NumeroEstacionamento'];
    $Entrada = date("Y-m-d H:i:s");

    $query=("insert into  tabela_veiculo(NumeroEstacionamento, Modelo, Cor, Marca,  Placa, NomeProprietario, TelefoneProprietario, Entrada, Status) 
    values('$NumeroEstacionamento','$Modelo','$Cor','$Marca','$Placa','$NomeProprietario','$TelefoneProprietario','$Entrada','Dentro');");
    $resultado = mysqli_query($db,$query);

    if($resultado){

    header('location:tabela_ver_veiculos_dentro.php ');
    }
    else
        {
        echo mysqli_error($db)." ".$Entrada;       
        } 

  
?>
