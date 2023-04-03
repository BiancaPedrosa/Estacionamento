<!doctype html>
<html  lang="pt-br">
  <head>   
      <title>Estacione Aqui</title>
      <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
  </head>        
             
<?php
  include('conexao.php');
  $ID=$_GET['ID'];
  $resultado=mysqli_query($db,"select * from tabela_veiculo where ID='$ID'");
  if (mysqli_num_rows($resultado)){
     echo "Arquivo XML gerado com sucesso.."; 
     // Cabecalho do XML
     $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';

     // A raiz do meu documento XML
     $xml .= '<recibo>';
  
     while ($row=mysqli_fetch_array($resultado)) {
          $xml .= '<id>' . $row['NumeroEstacionamento'] . '</id>';
          $xml .= '<placa>' . $row['Placa'].'</placa>';
          $xml .= '<marca>' . $row['Marca'].'</marca>';
          $xml .= '<modelo>' . $row['Modelo'] . '</modelo>';
          $xml .= '<proprietario>' . $row['NomeProprietario'] . '</proprietario>';
          $xml .= '<telefone>' . $row['TelefoneProprietario'] . '</telefone>';
          $xml .= '<entrada>' . $row['Entrada'] . '</entrada>';
          $xml .= '<saida>' . $row['Saida'] . '</saida>';
          $xml .= '<tarifa>' . $row['Tarifa'] . '</tarifa>';
     }
     // Fechamento da raiz
     $xml .= '</recibo>';

     // Escreve o arquivo
     $fp = fopen('meu_recibo.xml', 'w+');
     fwrite($fp, $xml);
     fclose($fp);
}
else{
     echo "não há recibo para imprimir";
}
?>