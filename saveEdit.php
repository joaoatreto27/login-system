<?php 

    if(isset($_POST['update'])){
        
        include_once('config.php');
    
        $id = $_POST['id'];
        $nome = $_POST['name'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['gender'];
        $data_nasc = $_POST['birthday'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE formulario SET nome = '$nome', senha = '$senha', email = '$email', telefone = '$telefone', 
            sexo = '$sexo', data_nasc = '$data_nasc', cidade = '$cidade' , estado = '$estado' , endereco = '$endereco'
                WHERE id = '$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>