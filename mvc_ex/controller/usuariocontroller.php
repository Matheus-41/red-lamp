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

        header("locacion: /red-lamp/revisao/mvc_ex/telacadastro");
        exit;

    }
    public function listarusuarios(){
        $usuarios = Usuario::listar();
        echo"<pre>";
        print_r($usuario);
        echo "</pre>";
        require 'view/usuarioListar.php';
    }
}
 
?>