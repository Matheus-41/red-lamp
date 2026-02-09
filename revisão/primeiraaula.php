<?php
    session_start();
    class Usuario{
        private $nome ;
        private $email;
        private $senha;

        public function _construct($nome,$email,$senha){
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> senha = $senha;
        }


        public function salvar(){
            if (!isset($_SESSION['usuarios'])){
            $_SERVER['usuarios'] = [];

                $SESSION['ususarios'] [] =[
                'nome' => $this->nome,
                'email' => $this->email,
                'senha'=> $this->senha,
            ];
        }
    }
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST ['nome'];
    $email= $_POST ['email'];
    $senha = $_POST ['senha'];

    $usuario = new usuario($nome, $email, $senha);
    $usuario -> salvar();
}

    if(isset($_GET['reset'])){
        session_destroy();
    }


echo   " <pre>";
print_r($_SESSION);
echo   " </pre>";


?>



<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
</head>
<body>
    <h2 style="color:green; font-family:Arial 15"> Cadastro de Alunos</h2>
    <form action="" method="POST" style="background:#f2f2f2; padding:15px border-radius :8px; width: 300px">
        Nome: <br>
    <input tyle="text" name="nome" value= "" style="width:100%
    margin-bottom:10px"><br>
    Email: <br>
        <input type="email" name="email" value= ""style="witch:100%
    margin-bottom:10px"> </br>
    Senha: <br>
    <input tyle="password" name="senha" value="" style="width:100%
    margin-bottom:10px"> </br>
    <botton type="submit" style="background:green; color:white:padding:5px 10px">cadastrar</button>
    <botton type="reset" style="background:red; color:white:padding: 5px 10px">limpar</botton>


</form>
<?php if(isset($_SESSION['usuarios'])): ?>
<table >
    <thead>
<tr>
    <tn>Nome</tn>
    <tn>Email</tn>
    <tn>Senha</tn>
</tr>
</thead>
<tbody><?php foreach($_SESSION['usuarios'] as $usuario): ?>
    <tr>
       <td> <?=$usuario['nome']?></td>
        <td><?=$usuario['email']?></td>
        <td><?=$usuario['senha']?></td>
        <td>Matheus</td>
        <td>Matheus.com</td>
        <td>412</td>
        <tr>
            <?php endforeach; ?>
        <tbody>
</table>
<?php endif; ?>
    </body>
</html>