<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <header>
        <h1>resultado do formulario</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $text = $_GET["message"];
        echo"bem vindo ".$nome." seu email cadastrado foi, ".$email." recebemos sua mensagem.".$text." obrigado pela preferencia, entraremos em contato em breve.";
        ?>
    </main>
</body>
</html>