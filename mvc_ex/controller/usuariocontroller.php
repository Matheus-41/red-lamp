<?php
// usuario controller
session_start();
require_once "./Model/UsuarioModel.php";

class usuarioController{


    public function telacadastro(){
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        require "view/usuariocadastrar.php";
    }
    public function cadastrar(){
        $nome = $_POST ['nome'];
        $email =$_POST ['email'];

        $usuario = new Usuario($nome, $email);
        $usuario ->salvar();

        header("Location: /red-lamp/mvc_ex/usuario/telaCadastro");
        exit;

    }
    public function usuariolistar(){
        $usuarios = Usuario::listar();
        echo"<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'view/usuarioListar.php';
    }
    public function telaEditar(){
        $usuario = usuario::buscar($_GET['id']);
        require 'view/usuarioEditar.php';
    }
    public function atualizar(){
        $usuario = new Usuario($_POST['nome'], $_POST['email']);
        $usuario->atualizar($_GET['id']);
        header('location: /red-lamp/mvc_ex/usuario/telaEditar?id='.($_GET['id']));
        exit;
    }
    public function excluir(){
        usuario :: excluir($_GET['id']);
        header('location: /red-lamp/mvc_ex/usuario/usuarioexcluir?id=');
        exit;
    }
}
 
?>