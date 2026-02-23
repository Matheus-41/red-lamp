<?php
class Usuario{
    private $nome;
    private $email;

    public function _contruct($nome, $email){
    $this->nome = $nome;
    $this->email = $email;
    }

    public function salvar(){
        if(lisset($_SESSION["usuario"])){
            $_SESSION['usuario'] = [];
        }
        $_SESSION['usuario'][] = [
            'nome' => $this->nome,
            'email' => $this->email,
        ];
    }
    public static function listar(){
        return $_SESSION["usuario"] ?? [];
    }
}

 


?>