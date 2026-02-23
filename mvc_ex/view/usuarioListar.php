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
    <a href="C:\xampp\htdocs\red-lamp\mvc_ex\usuario\cadastrar"></a>
    <table border = "1">
    <tr>
        <tr>Nome</tr>
        <tr>Email</tr>
        <tr>Ações</tr>
    </tr>
    <?php foreach($usuarios as $u): ?>
        <tr>
        <td><?= $u['nome']?></td>
        <td><?= $u['email']?></td>
        <td>proxima aula</td>
    </tr>
    <?php endforeach; ?>
     <table> 



 </body>
 </html>

 