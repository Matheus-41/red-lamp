<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <a href= "red-lamp/avaliacao.matheus/Livros/selecionar"> Ir para a tela de seleção</a>
    <form method= "POST" action="selecionar">
        <input type="text" name="id" placeholder="seu id" require>
        <input type= "text" name="anopublicacao" placeholder="seu ano de publicacao" require>
        <input type= "text" name="autor" placeholder="sua autora/autor" require>
        <input type= "text" name="editora" placeholder="sua editora" require>
        <input type= "text" name="titulo" placeholder="titulo do livro" require>
        <button type= "submit">Enviar</button>
</form>
</body>
</html>