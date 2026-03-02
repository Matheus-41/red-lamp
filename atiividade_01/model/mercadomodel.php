<?php
class produto{
    private $nome_produto;
    private $produto;

    public function _contruct($nome_produto,$produto){
        $this->nome_produto = $nome_produto;
        $this->produto = $produto;
    }
    public function salvar(){
        if(lisset($_SESSION["produto"])){
            $_SESSION['produto'] = [];
        }
        $_SESSION['produto'][] = [
            'nome_produto' => $this->nome_produto,
            'produto' => $this->produto,
        ];
    }
    public static function listar(){
        return $_SESSION["produto"] ?? []; 
     }
    public static function buscar(){
        return $_SESSION["produto"] ?? [];
    } 
    public function atualizar($id){
        if(isset($_SESSION["produtos"][$id])){
            $_SESSION["produtos"][$id] = [
            "nome_produto" => $this ->nome_produto,
            "produto" => $this ->produto, 
            ];
        }
    }
    public static function excluir($id){
if(isset($_SESSION["produto"][$id])){
    unset($_SESSION["produto"][$id]);
    }
}
}

?>