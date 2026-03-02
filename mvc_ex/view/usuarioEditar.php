<!DOCTYPE html!>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>usuario Editar</h2>
    <a href="/red-lamp/mvc_ex/usuario/Listar"> ir para tela de lista</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
    <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
    <input type="text" name="nome"value= "<?= htmlspecialchars($usuario['nome'])?>" require>
    <input type="text" name="email"value="<?= htmlspecialchars($usuario['email'])?> " require>
        <button type="submit">Enviar</button>
        </form>
    </body>
</html> 