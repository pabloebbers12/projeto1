
<?php
$conn = new mysqli("localhost", "root", "usbw", "db1");


if (mysqli_connect_errno()) {
    printf("Erro de Conexao: %s\n", mysqli_connect_error());
    exit();
}

?>