<?php
    require 'config.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuario");

    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll(pdo::FETCH_ASSOC);
    }
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <title>Form PHP</title>
</head>
<body>
    

<div class="wavy">
        <span style="--i:1">L</span>
        <span style="--i:2">i</span>
        <span style="--i:3">s</span>
        <span style="--i:4">t</span>
        <span style="--i:5">a</span>
        <span style="--i:6">U</span>
        <span style="--i:7">s</span>
        <span style="--i:8">e</span>
        <span style="--i:9">r</span>
        <span style="--i:10">s</span>
    </div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <?php foreach($lista as $usuario): ?>

        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['cpf'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a id="edit" href="editar.php?id=<?=$usuario['id'];?>"> Editar </a>
            </td>
            <td>
                <a id="delete" href="excluir.php?id=<?=$usuario['id'];?>"> Excluir </a>
                
            </td>
        </tr>
        
        <?php endforeach; ?>
        <a id="cadastro" href="cadastrar.php">👈🏻 Cadastrar Usuário</a>
</table>

</body>
</html>