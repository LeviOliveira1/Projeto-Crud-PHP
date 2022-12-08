<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <title>Cadastro</title>
</head>
<body>   

<h1>Cadastrar Usuário</h1>
<form method="POST" action="cadastrar_action.php">
    <label>
        Nome: <input type="text" name="nome" placeholder="Seu Nome"><br>
    </label>
    <label>
        CPF: <input type="text" name="cpf" id="cpf" placeholder="Seu Cpf"><br>
    </label>
    <label>
        E-mail: <input type="email" name="email" placeholder="Seu Email"><br>
    </label>
    <br>
    <input type="submit" value="Enviar" class="buttonSub"><br>
</form>
</body>
</html>