<?php
            session_start();
            include("menu.php");
?>

<html>
    <head>
        <title>Estacione Aqui</title>
        <link rel="stylesheet" href="..\CSS\estilo_barra_de_rolagem.css">
        <link rel="stylesheet" href="CSS\estilo_index.css">
        <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    </head>

     <body class="section" style="background: #45d6b2; font-family: 'Trirong', serif; ">
        
          <div class="container mt-4"  style=" font-family: 'Trirong', serif; background: rgba(215, 246, 236, 0.87);border-radius: 30px 30px; ">
               <br>

               <div class="login">
               <h1 class="titulo">Atualizar tarifa</h1>

               <form class="form" method="POST" action="atualizar_tarifa.php">
                         <img src="../images/icons8-real-64.png"/>
                         <input style="border-radius: 15px;" type="text" name="tarifa" value="<?php echo $_SESSION["tarifa"];?>"/>
                         <p class="submit"><input style="border-radius: 10px" type="submit" name="sent" value="Atualizar"></p>
               </form>
          
               </div> 
               
               <br>
          </div>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>
</html>
    