<?php
    $conexao = new mysqli('localhost', 'root', '', 'loja_site');

    if (!$conexao) {
        die("Nao foi possivel conectar: " . mysqli_error(). "<br>");
    }

?>