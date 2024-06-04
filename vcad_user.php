<?php
  include_once("./View/menu.php");
?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Cadastro de Usuarios
       
      </h1>
	  
	  <form method="POST" action="./Controller/cad_user.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required >
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" name="email" class="form-control" placeholder="CPF"  >
              </div>
              <br>
			
          
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" name="email" class="form-control" placeholder="Telefone"  >
              </div>
              <br>

             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope "></i></span>
                <input type="text" name="login" class="form-control" placeholder="Login" >
              </div>
              <br>       


              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                <input type="text" name="senha" class="form-control" placeholder="Senha"  />
              </div>
              <br>
			  
			 
			 <input type="submit" value="Salvar"/>
       
			 </a>
			  
			
			  </form>
      
    </section>

  
<?php
  include_once("./View/footer.php");
?>			  