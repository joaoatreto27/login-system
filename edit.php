<?php 
    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM formulario WHERE id = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            }
        }else{
            header('Location: sistema.php');
        }
    }else{
        header('Location: sistema.php');
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
        <form action="saveEdit.php" method="POST">
            <fieldset>
                    <legend>Formulário de Clientes</legend>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="name" id="name" value = <?php echo $nome ?> required>
                        <label for="name" class="label-inputs">Nome Completo</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="password" class="inputs" name="senha" id="pasword" value = <?php echo $senha ?> required>
                        <label for="senha" class="label-inputs">Senha</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="email" id="email" value = <?php echo $email ?> required>
                        <label for="email" class="label-inputs">Email</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="number" class="inputs" name="telefone" id="telefone" value = <?php echo $telefone ?> required>
                        <label for="telefone" class="label-inputs">Telefone</label>
                    </div>
                    <br>
                    
                    <p>Sexo:</p>
                    <br>
                    <input type="radio" id="feminine" name="gender" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
                    <label for="feminine">Feminino</label>
                    <br>
                    <input type="radio" id="masculine" name="gender" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                    <label for="masculine">Masculino</label>
                    <br>
                    <input type="radio" id="other" name="gender" value="other" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
                    <label for="other">Outro</label>
                    <br>
                    <br>

                    <label for="birthday">Data de Nascimento</label>
                    <input type="date" name="birthday" id="birthday" value = <?php echo $data_nasc ?> required>

                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="cidade" id="cidade" value = <?php echo $cidade ?> required>
                        <label for="cidade" class="label-inputs">Cidade</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="estado" id="estado" value = <?php echo $estado ?> required>
                        <label for="estado" class="label-inputs">Estado</label>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" class="inputs" name="endereco" id="endereco" value = <?php echo $endereco ?> required>
                        <label for="endereco" class="label-inputs">Endereço</label>
                    </div>
                    <br>
                    <input type="hidden" name="id" value = <?php echo $id ?>>
                    <input class="form-btn" id="update" name="update" type="submit"></input>
            </fieldset>
        </form>
    </div>
</body>
</html>