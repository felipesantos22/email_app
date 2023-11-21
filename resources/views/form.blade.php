<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Envio de E-mail</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <form action="seu_script_de_envio.php" method="post" class="email-form">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
