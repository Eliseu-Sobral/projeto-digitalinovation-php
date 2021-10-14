<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de cadastro </h1>
    
    <form action="script.php" class="formulario" method="POST">
        <label for="">Nome :</label>
        <input type="text" name="nome" autocomplete="off">
        <label for="">Idade :</label>
        <input type="text" name="idade" autocomplete="off">
        <input type="submit" value="Cadastrar"><br><br>

    </form>

    <h2>Cadastrados</h2>

    <?php
    $mensagemDeSucesso = isset($_SESSION["mensagem-de-sucesso"]) ? $_SESSION["mensagem-de-sucesso"] : "";
        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }
    $mensagemDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
            $_SESSION["mensagem-de-erro"] = "";
        }
    ?>
</body>
</html>

