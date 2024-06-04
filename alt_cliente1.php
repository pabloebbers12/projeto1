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
        Alterar Clientes - Design
       
      </h1>
	  
	  <form method="POST" action="./Controller/alt_cliente1.php">
	  
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
                <input type="text" name="nome" class="form-control" placeholder="Nome "  value="<?php echo $row['nomeCliente'];?>" >
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
                <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
               
                <select name="servico" class="form-control">
                        <option value="Selecione uma opção">Selecione uma opção</option>
                        <option value="Criação de Logotipo">Criação de Logotipo</option>
                        <option value="Identidade Visual">Identidade Visual</option>
                        <option value="Elaboração de Arte">Elaboração de Arte</option>

</select>
              </div>
              <br>
        



<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                <input type="text" name="qtd" class="form-control" placeholder="Quantidade"  value="<?php echo $row['qtd'];?>">
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="text" name="seg" class="form-control" placeholder="Segmento"  value="<?php echo $row['seg'];?>">
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