<?php
namespace functions;
include '../autoload.php';
use model\Movimentacao;
session_start();
$options=['Inserir','excluir','transferir','sair'];

switch($_POST['Painel']){

    case 'Inserir':
        $insert = new Movimentacao;
        $insert->setValue($content[2]);
        $insert->setTitle($content[1]);
        $response= array($insert->getTitle(),$insert->getValue());
        echo json_encode($response);
    break;
    case 'loadindex':
        $user = $_SESSION['user'];
        echo json_encode($user);
    break;
     default:
        echo 'opçao nao existe';
    break;
 }

?>