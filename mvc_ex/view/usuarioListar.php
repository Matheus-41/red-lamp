<!-- TELA usuarioListar.php --> 
 <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>Usuarios</h2>
    <a href="\red-lamp\mvc_ex\usuario\telaCadastro">tela cadastro</a>
  <h2>Usuários</h2>
    <table border ="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $id => $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['email']?></td>
                <td>
                    <a href="/red-lamp/mvc_ex/usuario/telaEditar?id=<?= $id ?>">
                        Editar
                    </a>   
                </td>
                <a href="/red-lamp/mvc_ex/usuario/usuarioexcluir?id=<?= $id ?>">
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>

