<?php
  include_once("./View/menu.php");
 include_once("./Controller/conexao.php");
      
      $codigo = $_GET['id'];
          
      $query= "Select * from usuarios WHERE idUsuarios= $codigo";
      //var_dump($query);


?>



<section class="content-header">
       <section class="content-header">
      <h1>
       Alterar Usuários
       
      </h1>
	  
	  <form method="POST" action="./Controller/alt_user.php">
	  
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
                <input type="text"  readonly="true" name="id" id="id" class="form-control" placeholder="ID"  value="<?php echo $row['idUsuarios'];?>" >
              </div>
              <br>



			<div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nome" class="form-control" placeholder="Nome"  value="<?php echo $row['nome'];?>">
              </div>
              <br>
			
          
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" name="email" class="form-control" placeholder="Email"  value="<?php echo $row['email'];?>">
              </div>
              <br>

             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="log" class="form-control" placeholder="Login"  value="<?php echo $row['login'];?>">
              </div>
              <br>       


              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                <input type="text" name="senha" class="form-control" placeholder="Senha"  value="<?php echo $row['senha'];?>"/>
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