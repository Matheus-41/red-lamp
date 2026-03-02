<?php
require_once "Controller/produtoController.php";


$produtocontroller = new ProdutoController();
$route = $_GET ["route"] ?? '';

switch ($route) {
    case 'produto/telaCadastro':
        $produtocontroller->telacadastro();
        break;

    case "produto/salvar":
        $produtocontroller->cadastrar();
        break;

    case "produto/Listar":
        $produtocontroller->produtoiolistar();
        break;

    case "produto/telaEditar":
        $produtocontroller->telaEditar();
        break;
    
    case "produto/atualizar";
        $produtocontroller->atualizar();
        break;


    case "produto/excluir":
        $produtocontroller->excluir();
        break;


    default:
        echo "Pagina não encontrada";
        break;

    
}

?>