<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
            <title> DADOS RECEBIDOS </title>
</head>
    <body>
    <h1> Dados recebidos do formulario</h1>
    <hr>

        <?php

        if (!empty($_POST['email_usuario']) AND !empty($_POST['nome_usuario'])) {

        $nome     = $_POST['nome_usuario'];
        $email    = $_POST['email_usuario'];

        echo "<h2> olá , ".$nome."!</h2>";
        echo "<p> Recebemos seus dados. Seu email é: <strong>".$email." </strong></p>";
        
        } else {
             echo "<script>
                  alert('violaçao: tentativa ilegal de operaçao!')
                  history.go(-1);
             </script>";

        }
        echo "<br>";
        ?>

    </hr>
        <a href="formulario.php">
            <button type="button" class="btn btn-secondary btn-lg"><i class="fa fa-mail-reply"></i>&ensp;Sair</button>
    <body>