<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $db="escola";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $db, 3307);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>