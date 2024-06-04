<?php
 include_once("./Controller/conexao.php");
      
      $codigo = $_GET['id'];
          
      $query= "SELECT * FROM os inner join clientes on clientes.idClientes = os.clientes_id
      inner join usuarios on usuarios.idUsuarios = os.usuarios_id  where  os.idOs = $codigo" ;
  
      //var_dump($query);

        
             /* $conn vem da conexao.php*/
          if ($result = $conn->query($query)) 
            
            /* linhas = array */
            while ($row = $result->fetch_assoc()) 
            {
              //echo $row['nome'];
              //var_dump($row);
        ?>

<html>
<meta charset="utf-8">
<head>
<title>Relatório de Atendimento</title>
</head>
<body>
<font face="arial">
<center>

<table >
    <tr>
      <td align="center">
       
      <img src="img/logo1.png" width="140" height="110"><br>
<font size="4px>" face="arial">Serviços de Informática</font> 

     <td align="left"> <font size="3px>" face="arial">(13)9963-76751 / 3477-7382 <br> tidealuguel1@gmail.com</td></font> </tr>

</table>
</center>
     
<br>

<center><font size=5px><b>Relatório de Atendimento</b> </font> </center>
<br> 
 <b>OS:</b><?php echo $row['idOs'];?> <br>
 <b>Atendente:</b><?php echo $row['nome'];?> <br>
 <b>Data Entrada:</b> <?php echo $row['dataInicial'];?><br>
 <b>Data Saída:</b> <?php echo $row['dataFinal'];?>
<hr>
<b><font size="4px">Cliente</font> </b>
<br>
<b>Nome:</b> <?php echo $row['nomeCliente'];
 ?> <br>
<b>CPF:</b> <?php echo $row['cpf'];
 ?> <br>
<b>Email:</b> <?php echo $row['email'];
 ?> <br>
<b>Telefone:</b> <?php echo $row['telefone'];
 ?> <br>
 <b>Endereço:</b> <?php echo $row['rua'];
 ?>,<?php echo $row['numero'];
 ?> - <?php echo $row['cidade'];
 ?>   <br>  <br>
</table>
<b><font size="4px">Detalhamento do Serviço</font></b>
<tr></tr>
<table border=1 cellspacing=0 cellpadding=2 bordercolor="black">
    <tr>
      
      <td><center><b>Equipamento</td>
      <td><center><b>Defeito</td>
      <td ><center><b>Observações</td>
      <td><center><b>Laudo</td>
      <td><center><b>Valor Total</td>
      
    </tr>
    <tr> 
      <td> <center><?php echo $row['descricaoProduto'];?></td>
      <td><center><?php echo $row['defeito'];?></td>
      <td><center><?php echo $row['observacoes'];?></td>
      <td><center><?php echo $row['laudoTecnico'];?></td>
      <td><center><?php echo $row['valorTotal'];?></td>
      </center>
    </tr>
  
  </table> </div><br> 

<b><font size="5px" face="arial">Agradecemos a preferência, conte sempre conosco!</font></b>

</form>

</body>
</html>
      
     <?php }

     ?> 
  
