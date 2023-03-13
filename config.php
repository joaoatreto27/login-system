<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'Admin27!';
    $dbName = 'formulario_1';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso";
    }

?>