<?php
include_once("connect.php");
include_once("protect.php");

// Função para excluir o item do banco de dados
function excluirItem($conn, $id) {
    $sql = "DELETE FROM menu WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página atual após a exclusão
        echo "<script>window.location.href='../home_adm.php';</script>";

    } else {
        echo "Erro ao excluir o item: " . $conn->error;
    }
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Excluir o item imediatamente
    excluirItem($conn, $id);
}

$conn->close();
?>


