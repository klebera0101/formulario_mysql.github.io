<?php
require_once 'config.php';

// DADOS DO FORMULÁRIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('Y-m-d'); // Formato adequado para a inserção no banco de dados
$hora_atual = date('H:i:s');

// PREPARAR COMANDO PARA TABELA
$stmt = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $email, $mensagem, $data_atual, $hora_atual);


if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro no envio da mensagem: " . $stmt->error;
}

// FECHAR CONEXÕES
$stmt->close();
$conn->close();
