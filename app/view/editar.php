<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
</head>
<body>
<h1>CRUD MVC</h1>
    <h2>Cadastro</h2>
    <form action='<?php echo "../atualizar/$id[0]"; ?>' method="post">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Digite seu nome" value="<?php echo htmlspecialchars($dados[1]); ?>" required>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Digite seu email" value="<?php echo htmlspecialchars($dados[2]); ?>" required>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="../home">Voltar</a>
</body>
</html>