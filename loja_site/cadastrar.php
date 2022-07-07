<?php
include('conexao.php');
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$adc = "INSERT INTO 
login(nome,sobrenome,email,senha) 
VALUES ('".$nome."','".$sobrenome."','".$email."','".$senha."')";

$ins = mysqli_query($conexao,$adc);
if($ins){
    header('location: index.php');

}else{
    echo "Erro<br>";
}
?>