<?php
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
include ('conexao.php');
$sql = mysqli_query($conexao,"select * from login where email = '$email' AND senha = '$senha'");
if (mysqli_num_rows ($sql) > 0 ) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header ('location:logado.php');
}
else{
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    header('location:login.html');
}
?>
<?php

switch ($email) {
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
}
?>