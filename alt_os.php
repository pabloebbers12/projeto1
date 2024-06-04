<?php
  include_once("./View/menu.php");
 include_once("./Controller/conexao.php");
      
      $codigo = $_GET['id'];
          
      $query= "Select * from os WHERE idOs = $codigo";
      //var_dump($query);


?>
<section class="content-header">
       <section class="content-header">
      <h1>
        Alterar Os
       
      </h1>
	  
	  <form method="POST" action="./Controller/alt_os.php">
	  
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
                <input type="text" name="id" class="form-control" placeholder="ID" readonly="on" value="<?php echo $row['idOs'];?>" >
              </div>
              <br>

			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" name="dtin" class="form-control" placeholder="Data Inicial"  value="<?php echo $row['dataInicial'];?>" >
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-times-o"></i></span>
                <input type="text" name="dtfin" class="form-control" placeholder="Data Final"  value="<?php echo $row['dataFinal'];?>"  >
              </div>
              <br>
      


             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sticky-note "></i></span>
                <input type="text" name="garan" class="form-control" placeholder="Garantia"  value="<?php echo $row['garantia'];?>" >
              </div>
              <br>       


              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                <input type="text" name="dsp" class="form-control" placeholder="Descrição do Produto"  value="<?php echo $row['descricaoProduto'];?>" />
              </div>
              <br>

               <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-minus-circle"></i></span>
                <input type="text" name="defeito" class="form-control" placeholder="Defeito"  value="<?php echo $row['defeito'];?>"  />
              </div>
              <br>
        

         <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
               
                <select name="stts" class="form-control"  >
  <option  value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option> 
  <option value="Status">Status</option> 
  <option value="Em Andamento">Em Andamento</option>
  <option value="Concluída">Concluída</option>
  <option value="Cancelada">Cancelada</option>
</select>
              </div>
              <br>
      
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
                <input type="text" name="and" class="form-control" placeholder="Andamento"  value="<?php echo $row['andamento'];?>"  />
              </div>
              <br>
         

         <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" name="obs" class="form-control" placeholder="Observações"  value="<?php echo $row['observacoes'];?>" />
              </div>
              <br>
        

         <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-leanpub"></i></span>
                <input type="text" name="laudo" class="form-control" placeholder="Laudo Técnico"  value="<?php echo $row['laudoTecnico'];?>" />
              </div>
              <br>
        

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input type="text" name="vl" class="form-control" placeholder="Valor Total" value="<?php echo $row['valorTotal'];?>"/>
              </div>
              <br>
			  
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <input type="text" name="cpf" class="form-control" placeholder="CPF Cliente" value="<?php echo $row['cpf'];?>"/>
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <input type="text" name="clien" class="form-control" placeholder="Cliente"  value="<?php echo $row['clientes_id'];?>" />
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                <input type="text" name="atd" class="form-control" placeholder="Atendente"  value="<?php echo $row['usuarios_id'];?>"/>
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="text" name="lanc" class="form-control" placeholder="Lançamento"  value="<?php echo $row['lancamento'];?>"/>
              </div>
              <br>

                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                <input type="text" name="fatu" class="form-control" placeholder="Faturado"  value="<?php echo $row['faturado'];?>"/>
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