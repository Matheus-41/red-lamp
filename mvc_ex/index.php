<?php
require_once "Controller/UsuarioController.php";


$usuarioController = new UsuarioController();
$route = $_GET ["route"] ?? '';

switch ($route) {
    case 'usuario/telaCadastro':
        $usuarioController->telacadastro();
        break;


case "usuario/salvar":
    $usuarioController->cadastrar();
    break;

case "usuario/Listar":
    $usuarioController->Listar();
    break;


    default:
        echo "Pagina não encontrada";
        break;


}

?>