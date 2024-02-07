<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para ajuda</title>
</head>
<body>
    <?php

    isset($_POST['cMail']) ? $_POST['cMail'] : "Não foi possivel enviar o email!";
        $nome = addslashes($_POST['cNome']);
        $email = addslashes($_POST['cMail']);
        $numer = addslashes($_POST['cNum']);
        $endereco = addslashes($_POST['cRua']);
        $mensagem = addslashes($_POST['cMsg']);

        #MONTANDO O EMAIL
        $para = "matheuslaercio72@gmail.com";
        $de = "Acessou o site!";
        $corpo = "Nome ". $nome. "\n".
                "Email ". $email. "\n".
                "Número ". $numer. "\n".
                "Endereço ". $endereco. "\n".
                "Mensagem ". $mensagem. "\n";

        $cabecalho = "From: " . "\r\n". "replay-to: ".$email ."\r\n". "x-Mailler:PHP". phpversion();

        if (mail($para,$de,$corpo,$cabecalho)) {
            echo "O email foi enviado com SUCESSO!!";
        }else {
            echo "O email NÃO foi enviado";
        }
    ?>
</body>
</html>