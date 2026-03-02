<?php
session_start();
require_once "./Model/mercadomodel.php";

class produtoController{
 public function telacadastro(){
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    require "view/produtocadastra";
    }
    public function cadastrar(){
        $nome_produto = $_POST ['nome_produto'];
        $produto =$_POST ['produto'];

        $produto = new produto($nome_produto, $produto);
        $produto ->salvar();

        header("Location: /red-lamp/mvc_ex/produto/telaCadastro");
        exit;

    }
    public function produtolistar(){
        $usuarios = Produto::listar();
        echo"<pre>";
        print_r($produtoos);
        echo "</pre>";
        require 'view/produtoListar.php';
    }
    public function telaEditar(){
        $produto = produto::buscar($_GET['id']);
        require 'view/produtoEditar.php';
    
    }
    public function excluir(){
        produto :: excluir($_GET['id']);
        header('location: /red-lamp//prudutoexcluir?id=');
        exit;
    }
}
?>