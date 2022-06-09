<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <form action="../index.php?classe=Usuario&acao=cadastrar" method="POST">
        <div>
            <label>Nome de usuário:</label>
            <input type="text" name="username" />
        </div>

        <div>
            <label>Senha:</label>
            <input type="text" name="senha" />
        </div>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>