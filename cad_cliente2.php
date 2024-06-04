<?php
  include_once("./View/menu.php");
?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Solicitar Serviço
       
      </h1>
	  
	  <form method="POST" action="./Controller/cad_cliente2.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">
			<div class="input-group">

                
              </div>
              <br>
			
          
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                <input type="text" name="cpf" class="form-control" placeholder="CPF"  > Vai erdar
              </div>
              <br>

             
               

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                <input type="text" name="cel" class="form-control" placeholder="Celular" > vai erdar
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span>
                <input type="text" name="msg" class="form-control" placeholder="Alguem Detalhe a comentar ?" >
              </div>
              <br>     

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                <input type="text" name="equip" class="form-control" placeholder="Qual o veículo ?" > poderia ter um menu para escolher o veiculo, caso tenha mais de 1
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                <input type="text" name="numserie" class="form-control" placeholder="Placa do carro" > vai erdar
              </div>
              <br>       
     

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paint-brush"></i></span>
                <input type="text" name="cor" class="form-control" placeholder="Tipos de Lavagens" > um menu para selecionar
              </div>
              <br>       


<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plug"></i></span>
                <input type="text" name="tens" class="form-control" placeholder="Proteção da pintura" >  um menu com os tipos de proteção
              </div>
              <br>       

<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plug"></i></span>
                <input type="text" name="pot" class="form-control" placeholder="aromatizante" >  menu com os tipos que tera
              </div>
              <br>       


  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" name="dtfab" class="form-control" placeholder="Qual será o Dia ? (0000-00-00)" >
              </div>
              <br>       
       
			  
			 
			 <input type="submit" value="Cadastrar"/>
			 </a>
			  
			
			  </form>
      
    </section>

  
<?php
  include_once("./View/footer.php");
?>			  