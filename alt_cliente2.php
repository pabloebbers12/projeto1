<?php
  include_once("./View/menu.php");
 include_once("./Controller/conexao.php");
      
      $codigo = $_GET['id'];
          
      $query= "Select * from clientes WHERE idClientes= $codigo";
      //var_dump($query);


?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Alterar Clientes - Manutenção
       
      </h1>
	  
	  <form method="POST" action="./Controller/alt_cliente2.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">

           <?php 
        
             /* $conn vem da conexao.php*/
          if ($result = $conn->query($query)) 
            
            /* linhas = array */
            while ($row = $result->fetch_assoc()) 
            {
              //echo $row['nome'];
              //var_dump($row);
        ?>

			<div class="input-group">

           <span class="input-group-addon">ID</span>
                <input type="text" name="id" readonly="on" class="form-control" placeholder="ID"  value="<?php echo $row['idClientes'];?>" >
              </div>
              <br>

               <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nome" class="form-control" placeholder="Nome"  value="<?php echo $row['nomeCliente'];?>" >
              </div>
              <br>
      
    
          
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                <input type="text" name="cpf" class="form-control" placeholder="CPF"  value="<?php echo $row['cpf'];?>">
              </div>
              <br>

             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" name="tel" class="form-control" placeholder="Telefone"  value="<?php echo $row['telefone'];?>">
              </div>
              <br>  

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                <input type="text" name="cel" class="form-control" placeholder="Celular"  value="<?php echo $row['celular'];?>">
              </div>
              <br>       

<div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" name="email" class="form-control" placeholder="Email"  value="<?php echo $row['email'];?>">
              </div>
              <br>       

<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="rua" class="form-control" placeholder="Rua"  value="<?php echo $row['rua'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="num" class="form-control" placeholder="Número"  value="<?php echo $row['numero'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="bairro" class="form-control" placeholder="Bairro"  value="<?php echo $row['bairro'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="cidade" class="form-control" placeholder="Cidade"  value="<?php echo $row['cidade'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="uf" class="form-control" placeholder="Estado"  value="<?php echo $row['estado'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" name="cep" class="form-control" placeholder="Cep"  value="<?php echo $row['cep'];?>">
              </div>
              <br>      

<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span>
                <input type="text" name="msg" class="form-control" placeholder="Mensagem"  value="<?php echo $row['msg'];?>">
              </div>
              <br>     

             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                <input type="text" name="equip" class="form-control" placeholder="Equipamento"  value="<?php echo $row['equip'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                <input type="text" name="numserie" class="form-control" placeholder="Número de Série"  value="<?php echo $row['num_serie'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                <input type="text" name="mod" class="form-control" placeholder="Modelo"  value="<?php echo $row['model'];?>">
              </div>
              <br>      

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paint-brush"></i></span>
                <input type="text" name="cor" class="form-control" placeholder="Cor"  value="<?php echo $row['cor'];?>">
              </div>
              <br>       
  

  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" name="ds" class="form-control" placeholder="Descrição"  value="<?php echo $row['descri'];?>">
              </div>
              <br>       
  


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plug"></i></span>
                <input type="text" name="tens" class="form-control" placeholder="Tensão"  value="<?php echo $row['tens'];?>">
              </div>
              <br>       

<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plug"></i></span>
                <input type="text" name="pot" class="form-control" placeholder="Potência"  value="<?php echo $row['pot'];?>">
              </div>
              <br>       
  


  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plug"></i></span>
                <input type="text" name="voltg" class="form-control" placeholder="Voltagem"  value="<?php echo $row['volt'];?>">
              </div>
              <br>       
  


  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" name="dtfab" class="form-control" placeholder="Data de Fabricação (0000-00-00)"  value="<?php echo $row['dtfab'];?>">
              </div>
              <br>       

     
			  
			 
			 <input type="submit" value="Alterar"/>
			 </a>
			  
			
			  </form>
         <?php }

     ?> 
    </section>

  
<?php
  include_once("./View/footer.php");
?>			  