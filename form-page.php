<?php 
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['gender'];
        $data_nasc = $_POST['birthday'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO formulario(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/form.css">
    <title>Formulário de Clientes</title>
</head>
<body>
    <div class="container">
        <form action="form-page.php" method="POST">
            <fieldset>
                    <legend>Formulário de Clientes</legend>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="name" id="name" required>
                        <label for="name" class="label-inputs">Nome Completo</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="email" id="email" required>
                        <label for="email" class="label-inputs">Email</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="number" class="inputs" name="telefone" id="telefone" required>
                        <label for="telefone" class="label-inputs">Telefone</label>
                    </div>
                    <br>
                    <p>Sexo:</p>
                    <br>
                    <input type="radio" id="feminine" name="gender" value="feminino" required>
                    <label for="feminine">Feminino</label>
                    <br>
                    <input type="radio" id="masculine" name="gender" value="masculino" required>
                    <label for="masculine">Masculino</label>
                    <br>
                    <input type="radio" id="other" name="gender" value="other" required>
                    <label for="other">Outro</label>
                    <br>
                    <br>

                    <label for="birthday">Data de Nascimento</label>
                    <input type="date" name="birthday" id="birthday" required>

                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="cidade" id="cidade" required>
                        <label for="cidade" class="label-inputs">Cidade</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="estado" id="estado" required>
                        <label for="estado" class="label-inputs">Estado</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="endereco" id="endereco" required>
                        <label for="endereco" class="label-inputs">Endereço</label>
                    </div>
                    <br>
                    <input class="form-btn" id="form-btn" name="submit" type="submit"></input>
            </fieldset>
        </form>
    </div>
</body>
</html>