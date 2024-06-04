<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <title>Adm</title>
</head>
<body>

</body>
</html>
<?php
session_start();

        include_once 'conexao.php';
        
        $login = $_POST['user'];
        $senha = $_POST['psw'];
        
        $rs = $con->query("SELECT * FROM usuarios where login='$login' 
                                                       and senha='$senha'");

      $rs -> execute();  
        
        if($rs->fetch(PDO::FETCH_ASSOC) == true)
    {
        $_SESSION['usuario'] = $login;
        header('Location:index.php');
    }
    else
    {
        unset ($_SESSION['usuario']);
        echo"Nome de usuário ou senha incorreto";
    }
    
        




?>