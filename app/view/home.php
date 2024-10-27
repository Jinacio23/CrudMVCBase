<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
  text-align: center;
}
</style>
<body>
    <h1>CRUD MVC</h1>
    <h2>Cadastro</h2>
    <form action="store" method="post">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Digite seu email" required>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <h2>Lista de cadastros</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
            <th colspan="2">Ações</th>
        </tr>
        <tr <?php foreach($usuarios as $usuario){ ?>>
            <td><?php echo $usuario[0]; ?></td>
            <td><?php echo $usuario[1]; ?></td>
            <td><?php echo $usuario[2]; ?></td>
            <td>
                <a href=<?php echo "editar/$usuario[0]";?>>
                    <button>Editar</button>
                </a>
            </td>
            <td>
                <a href=<?php echo "deletar/$usuario[0]";?>>
                    <button>Deletar</button>
                </a>
            </td>
        </tr <?php } ?>>
    </table>
</body>
</html>