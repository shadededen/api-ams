<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");

$metodoSolicitado = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? NULL;

switch{
    case "POST":
        $dados_recebidos = json_decode(file_get_contents("php://input"), true);
        break;
    case "GET"
        echo "Veio do navegador";
        break;
}

?>