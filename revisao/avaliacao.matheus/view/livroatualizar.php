<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <h2>livro atualizar</h2>
    <a href="red-lamp/avaliacao.matheus/Livros/atualiar"> Ir para a tela de seleção</a>"
    <form method="POST" action="atualizar?id<?= $_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchacrs($_GET['id'])?>" disabled>
        <input type="text" name="anopublicacao" value="<?= htmlspecialchacrs($_GET['anopublicacao'])?>" require>
        <input type="text" name="editora" value="<?= htmlspecialchacrs($_GET['editora'])?>" require>
        <input type="text" name="autor" value="<?= htmlspecialchacrs($_GET['autor'])?>" require>
        <input type="text" name="titulo" value="<?= htmlspecialchacrs($_GET['titulo'])?>" require>
        <button type="submit">atualizar</button>
</form>
    </body>
</html>