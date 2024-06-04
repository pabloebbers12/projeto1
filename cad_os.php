<?php
  include_once("./View/menu.php");
?>

<section class="content-header">
       <section class="content-header">
      <h1>
        Cadastro de Os
       
      </h1>
	  
	  <form method="POST" action="./Controller/cad_os.php">
	  
	   <div class="box box-info">
           
			 <div class="box-body">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" name="dtin" class="form-control" placeholder="Data Inicial (0000-00-00)"  >
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-times-o"></i></span>
                <input type="text" name="dtfin" class="form-control" placeholder="Data Final (0000-00-00)"  >
              </div>
              <br>
      


             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sticky-note "></i></span>
                <input type="text" name="garan" class="form-control" placeholder="Garantia" >
              </div>
              <br>       


              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                <input type="text" name="dsp" class="form-control" placeholder="Descrição do Produto"  />
              </div>
              <br>

               <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-minus-circle"></i></span>
                <input type="text" name="defeito" class="form-control" placeholder="Defeito"  />
              </div>
              <br>
        

         <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
               
                <select name="stts" class="form-control">
  <option value="Status">Status</option> 
  <option value="Em Andamento">Em Andamento</option>
  <option value="Concluída">Concluída</option>
  <option value="Cancelada">Cancelada</option>
</select>
              </div>
              <br>
        
		<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
                <input type="text" name="and" class="form-control" placeholder="Andamento" />
              </div>
              <br>

         <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" name="obs" class="form-control" placeholder="Observações"  />
              </div>
              <br>
        

         <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-leanpub"></i></span>
                <input type="text" name="laudo" class="form-control" placeholder="Laudo Técnico" />
              </div>
              <br>
        

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input type="text" name="vl" class="form-control" placeholder="Valor Total" />
              </div>
              <br>
			  
			     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <input type="text" name="cpf" class="form-control" placeholder="CPF Cliente" />
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <input type="text" name="clien" class="form-control" placeholder="ID Cliente" />
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                <input type="text" name="atd" class="form-control" placeholder="Atendente" />
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="text" name="lanc" class="form-control" placeholder="Lançamento" />
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="text" name="fatu" class="form-control" placeholder="Faturado" />
              </div>
              <br>


			  
			 
			 <input type="submit" value="Cadastrar"/>
			 </a>
			  
			
			  </form>
      
    </section>

  
<?php
  include_once("./View/footer.php");
?>			  