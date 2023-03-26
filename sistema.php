<?php
    session_start();

    if((!isset($_SESSION['email']) === true) and (!isset($_SESSION['senha']) === true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/sistema.css">
    <title>Sistema</title>
</head>
<body>
    <div class="header">
        <button href>
            <a href="./sair.php">Sair</a>
        </button>
    </div>
    <?php echo"<h1>Bem vindo <u>$logado<u><h1>" ?>
</body>
</html>