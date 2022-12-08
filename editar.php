<?php
    require 'config.php';

    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header("Location: index.php");
            exit;
        }
    }

    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <title>Edit User</title>
</head>
<body>
    
</body>
</html>
    <h1>Editar Usuário</h1>
    <form method="POST" action="editar_action.php">
        <input type="hidden" name="id" value="<?=$usuario['id'];?>">
        <label>
            Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"><br>
        </label>
        <label>
            CPF: <input type="text" name="cpf" value="<?=$usuario['cpf'];?>"><br>
        </label>
        <label>
            E-mail: <input type="text" name="email" value="<?=$usuario['email'];?>"><br>
        </label>
        <input type="submit" value="Enviar"><br>
    </form>