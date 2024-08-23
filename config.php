<?php

// CONFIGURAÇÕES DE CREDENCIAIS
$servidor = 'localhost';
$usuario = 'root';
$senha = ''; // Mantenha as aspas simples para a senha
$banco = 'formulario';

// CONEXÃO COM O BANCO DE DADOS
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// VERIFICAR CONEXÃO
if ($conn->connect_error) {
    die("Falha ao se conectar ao banco de dados: " . $conn->connect_error);
}

?>
