<?php
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $datanas = $_POST['datanas'];
    $cidade = $_POST['cidade'];
    $estador = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result_enviar_formulario = "insert into clientes (nome, email, telefone, sexo, datanas, cidade, estador, endereco) VALUES ('$nome', '$email', '$telefone','$sexo', '$datanas', '$cidade', '$estador', '$endereco')";

    $resultado_enviar_formulario= mysqli_query($conexao, $result_enviar_formulario)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="confirmacao" class="box">
    <p>Sua resposta foi enviada com sucesso!</p>
    <a href="forms.php"><button id="submit"> VOLTAR </button></a>
    </div>
</body>
</html>