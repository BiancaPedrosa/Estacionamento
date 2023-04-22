<body class="section" style="background: #45d6b2;  font-family: 'Trirong', serif;">
    <div class="container mt-4"  style="background: rgba(215, 246, 236, 0.87);border-radius: 30px 30px;  font-family: 'Trirong', serif;">
        <br>
        <?php
        include('../database/conexao.php');
        include_once('menu.php');
        
        $ID=$_GET['ID'];
        $ret=mysqli_query($db,"select * from tabela_veiculo where ID='$ID'");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

      ?>
      <div class="bloco_tabela" style="line-height: 15px; background: #e2fcec;  border-radius: 30px 30px; width: 94%;  margin: 30px  ;">                       
        
        <br>
        <h3 style="line-height:50px;text-align: center; color:white; background: #1abc9c; border-radius: 30px 30px; width: 94%;  margin: 30px; font-family: 'Trirong', serif;"> Dados do Cliente</h3>

        <div class="bloco_cliente" style=" border-radius: 30px 30px;  margin: 30px; display: inline-block; ">
          <div style="float: left;position:relative;">
            <img  src="https://img.icons8.com/plasticine/200/000000/user-male-circle.png" />
          </div>
          <div style="float: left;position:relative;" >
            <br>
            <br>
            <br>
            <br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nome do Proprietário:</b> &nbsp; <?php  echo $row['NomeProprietario'];?></p >
            <br>
            <p > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Telefone do Proprietário:</b> &nbsp; <?php  echo $row['TelefoneProprietario'];?></p>
          </div>
        </div>
        
        <h3 style="line-height:50px;text-align: center; color:white; background: #1abc9c; border-radius: 30px 30px; width: 94%;  margin: 30px;"> Dados do Carro</h3>
        
        <div class="bloco_veiculo" style="text-justify: auto; border-radius: 30px 30px; width: 94%;  margin: 30px; ">
          
          <div style="position:relative; ">
            <p>&nbsp;<b>Nº da vaga: </b>&nbsp; <?php  echo $row['NumeroEstacionamento'];?> </p>
                  
            <p>&nbsp;<b>Modelo: </b>&nbsp; <?php  echo $row['Modelo'];?> <p>
              
            <p>&nbsp;<b>Cor: </b>&nbsp; <?php  echo  $row['Cor'];?></p>
                
            <p>&nbsp;<b>Marca:</b> &nbsp; <?php  echo $row['Marca'];?></p>
            
            <p>&nbsp;<b>Placa:</b> &nbsp; <?php  echo $row['Placa'];?></p>
          </div>
          <?php 

          $TarifaEstacionamento=$_SESSION['tarifa'];
          $entrada = $row['Entrada'];
          $saida = date("Y-m-d H:i:s");
          $permanencia = ceil(((strtotime($saida) - strtotime($entrada))/3600));
         
          if($permanencia>1){
           $TarifaEstacionamento = round(($_SESSION['tarifa'] + (($permanencia-1)*($_SESSION['tarifa']*0.5))),2);
          }
      
          ?>
          <form action="../controllers/fecha_conta.php"  method="POST" class="form-horizontal">

          
              <p><b>Entrada:</b> &nbsp; <input  readonly type="datetime-local" name="Entrada" value="<?php   echo $entrada;?>"></p>
              
              <p><b>Saída:</b> &nbsp; <input readonly type="datetime-local" name="Saida" value = "<?php   echo $saida;?>"></p>
            
              <p><b>Permanência:</b> &nbsp; <input readonly name="Permanencia" value ="<?php echo $permanencia;?>"></p>     
              
              <p><b>Convênio:</b> <select name="Convenio"  class="form-control">
              <option value=""></option> 
              <?php                  
               $lojas=mysqli_query($db,"select * from tabela_loja");
               while ($loja=mysqli_fetch_array($lojas)) {?>
                  <option value="<?php echo $loja['Nomeloja'];?>"><?php echo $loja['Nomeloja'];?></option> 
                <?php } ?>             
              </select></p>
              
              <p><b>Tarifa do Estacionamento: </b><input type="hidden" class="form-control" name="TarifaEstacionamento" 
              value="<?php echo $TarifaEstacionamento;?>" required> </p>
              <?php echo "<pre>".$_SESSION['tarifa'].' + ('.($permanencia-1).'*'.($_SESSION['tarifa']/2).' ) = '.$TarifaEstacionamento."</pre>";?>
              <p><b>Status : </b> <select type= "readonly"name="Status" class="form-control"><option value="Fora">Veiculo Fora</option></select></p>
              
      
              <input type="hidden" value="<?php echo $row['ID'];?>" name="ID">
              
              <p style="text-align: center;"><button class="btn btn-success bt_n-lg "> <b> Enviar </b> </button></p>
              <br>
              
          </form>
          <?php }?>
       
        </div>
      </div>
      <br>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>