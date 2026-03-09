<?php
class Livros{
private $anopublicacao;
private $id;
private $autor;
private $editora;
private $titulo;

public function _construct($id, $anopublicacao, $editor, $titulo, $autor){
    $this-> id = $id;
    $this-> anopublicacao = $anopublicacao;
    $this-> editora = $editora;
    $this-> titulo = $titulo;
    $this-> autor = $autor;
    }
    public function salvar(){
        if(!isset($_SESSION['livros'])){
            $_SESSION['livros'] = [];
        }
        $_SESSION['livros'][] = [
            'id' => $this ->id,
            'anopublicacao' => $this ->anopubilcacao,
            'editora'=> $this ->editora,
            'titulo'=> $this ->titulo,
            'autor'=> $this ->autor,
        ];
    }
    public static function selecionar(){
        return $_SESSION ['livros'] ?? [];
    }
    public static function conectar(){
        return $_SESSION ['livros'] ?? [];
    }
    public  function  atualizar(){
        if(isset($_SESSION['livros'][$id])){
            $_SESSION['livros'][$id] = [
                'id'=> $this ->id,
                'anopublicacao'=> $this ->anopublicacao,
                'editora'=> $this ->editora,
                'titulo'=> $this ->titulo,
                'autor'=> $this ->autor,
            ];
        }
    }
    public static function deletar($id){
        if(isset($_SESSION['livros'][$id])){
            unset($_SESSION['livros'][$id]);
        }

    }
}
