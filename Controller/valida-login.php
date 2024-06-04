<?php
 include_once("conexao.php");
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 
 $query = "SELECT * FROM tb_usuario where user_email = '$email' and  user_senha ='$senha'";
 
?>

<?php 
 
			$email2	= "";
			$senha2 = "";
			
				     /* $conn vem da conexao.php*/
					if ($result = $conn->query($query)) {

						/* linhas = array */
						while ($row = $result->fetch_assoc()) {
						$cod = $row["user_cod"];	
					    $email2 = $row["user_email"];
                        $senha2 = $row["user_senha"];
                        $nome =  $row["user_nm"];					
						   
                        $_SESSION['usuarioAdm'] = $nome;                       
						$_SESSION['codAdm'] = $cod;
						
                        echo ("<script>
                           window.alert('Olá, ".$_SESSION['usuarioAdm']."')
                           window.location.href='../index.php';
                            </script>");    						
                       }
					  
					  
					    /* fechando conexao */
						$result->close();
				       
					 
				      }
					  
					  if($email != $email2 || $senha != $senha2)
					  {
						 
						  echo ("<script>
                           window.alert('Email e/ou Senha Inválidos. Tente Novamente')
                           window.location.href='../login.php';
                            </script>");    						
                       
					  }
					  

 ?>					