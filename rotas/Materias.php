<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");

$metodoSolicitado = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? NULL;

switch($metodoSolicitado){
    case "POST":
        $dados_recebidos = json_decode(file_get_contents("php://input"), true);
        break;
    case "GET":
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "aula_pw3";

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        $sql = "select * from materias";

        $resultado = $conexao->query($sql);

        $materias = [];
        while($linha = $resultado->fetch_assoc()){
            $materias[]=$linha;
        }

        echo json_encode($materias);
        break;    
}


?>