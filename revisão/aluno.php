<?php
session_start();
class Aluno{
    private  $nome ;
    private  $sobrenome;
    private  $data;
    private  $nota;

     public function __construct($nome, $sobrenome, $data, $nota) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data = $data;
        $this->nota = $nota;



    }


    public function salvar(){
            if (!isset($_SESSION['alunos'])){
            $_SERVER['alunos'] = [];

            $SESSION['alunos'] [] =[
                'nome' => $this->nome,
                'sobrenome'=> $this->sobrenome,
                'data'=> $this->data,
                'nota'=> $this->nota
            ];
       }
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST ['nome'];
    $sobrenome= $_POST ['sobrenome'];
    $data = $_POST ['data'];
    $nota = $_POST ['nota'];

    $aluno = new aluno($nome, $sobrenome, $data, $nota);
    $aluno -> salvar();
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
    <form action="" method="POST" style="background:#f2f2f2; padding:15px border-radius :8px; width: 400px">
        Nome: <br>
    <input tyle="text" name="nome" value= "" style="width:100% margin-bottom:10px"><br>
    SobreNome: <br>
        <input type="text" name="sobrenome" value= ""style="witch:100% margin-bottom:10px"> </br>
    Data: <br>
    <input tyle="text" name="data" value="" style="width:100% margin-bottom:10px"> </br>
    Nota: <br>
    <input type="text" name="data" value="" styl="width:100% margin-bottom:10px"><br>

    <bottom type="submit" style="background:green; color:white:padding:8px 10px"> cadastrar </buttom>
    <bottom type="reset" style="background:red; color:white:padding: 8px 10px"> limpar </bottom>

    <form>
<?php
    $data = $_POST["data"];
    $idade = date("Y/m/d");

    $idade = "";

    echo "idade $idade anos";
?>
</form>