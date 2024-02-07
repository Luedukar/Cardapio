<?php

include_once("connect.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome_arquivo = $_POST["nome_arquivo"];
    $tipo = $_POST["tipo"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];

    // Manipulação do arquivo enviado (imagem)
    $arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
    $nome_arquivo_imagem = $_FILES["arquivo"]["name"];
    $caminho_destino = "uploads/" . $nome_arquivo_imagem;

    // Move a imagem para a pasta de uploads
    move_uploaded_file($arquivo_temporario, $caminho_destino);

    // Adiciona a data atual
    $data_atual = date("Y-m-d");

    
    // Insere os dados na tabela
    $sql = "INSERT INTO menu (nome_do_arquivo, arquivo, data_atual, tipo, preco, descricao) VALUES ('$nome_arquivo', '$caminho_destino', '$data_atual', '$tipo', '$preco', '$descricao')";


    if ($conn->query($sql) === TRUE) {
    // Redirecionar para home_adm.php
    header("Location: ../home_adm.php");
    exit(); // Certifique-se de sair após o redirecionamento
} else {
    echo "Erro ao adicionar produto: " . $conn->error;
}


    // Fecha a conexão
    $conn->close();
}
?>
