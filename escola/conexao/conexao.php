<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
        die("Conexão falhoy:". mysqli_connect_errno());
    }



?>