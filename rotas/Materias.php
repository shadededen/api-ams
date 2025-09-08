<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");

$metodoSolicitado = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? NULL;

switch($metodoSolicitado){
    case "POST":
        $dados_recebidos = json_decode(file_get_contents("php://input"), true);
        $nome_materia = $dados_recebidos['Materia'] ?? null;
        $disponivel = $dados_recebidos['Disponivel'] ?? null;

            if ($nome_materia && $disponivel) {
                $servidor = "localhost"; 
                $usuario = "root"; 
                $senha = ""; 
                $banco = "aula_pw3";

                $conexao = new mysqli($servidor, $usuario, $senha, $banco);

                if ($conexao->connect_error) {
                    http_response_code(500);
                    echo json_encode(["erro" => "Falha na conexão: " . $conexao->connect_error]);
                    exit;
                }

                $stmt = $conexao->prepare("INSERT INTO Materias (Materia, Disponivel) VALUES (?, ?)");
                $stmt->bind_param("ss", $nome_materia, $disponivel);

                if ($stmt->execute()) {
                   // echo json_encode(["mensagem" => "Matéria inserida com sucesso"]);
                } else {
                    http_response_code(500);
                    //echo json_encode(["erro" => "Erro ao inserir: " . $stmt->error]);
                }

                $stmt->close();
                $conexao->close();
                echo json_encode($dados_recebidos);
            }else{
                echo json_encode("{'erro':'dados inválidos'}");
            }
        break;    
}


?>