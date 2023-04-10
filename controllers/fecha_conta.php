<?php

        include_once('conexao.php');

          $ID=$_POST['ID'];
          $Saida = $_POST['Saida'];
          $Convenio = $_POST['Convenio'];
          $Permanencia= $_POST["Permanencia"];
          $TarifaEstacionamento=$_POST['TarifaEstacionamento'];
          $Status = $_POST["Status"];

          if($convenio!=''){
            $TarifaEstacionamento=$TarifaEstacionamento-($_SESSION['tarifa']/2);
          }
        
           $query=mysqli_query($db, "update tabela_veiculo set Status='$Status',TarifaEstacionamento='$TarifaEstacionamento', Convenio='$Convenio', Saida='$Saida' where ID='$ID'");
            
           if(!$query){
              echo mysqli_error($db);
          }else{
            header("location:../views/gerenciar_veiculos_fora.php?ID=$ID");
          }
?>