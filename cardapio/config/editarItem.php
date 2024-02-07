<?php

include_once("connect.php");
include_once("protect.php");
include_once("../templates/header_2.php");


// Se o ID for fornecido na URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta ao banco de dados para obter os detalhes do item com o ID fornecido
    $sql = "SELECT * FROM menu WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Formulário para edição dos detalhes do item
        
        echo "<div class='container'>";
        echo "<h2 id='main-title'>Editar Produto</h2>";
        echo "<form class='edit-form' action='editarItem.php?id=$id' method='post'>";
        
        echo "<div class='form-group'>";
        echo "<label for='nome'>Nome do produto:</label>";
        echo "<input class='form-control' type='text' id='nome' name='nome' value='" . $row["nome_do_arquivo"] . "' required><br>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='descricao'>Descrição:</label>";
        echo "<textarea class='form-control' id='descricao' name='descricao' required>" . $row["descricao"] . "</textarea><br>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='preco'>Preço (R$):</label>";
        echo "<input class='form-control' type='number' id='preco' name='preco' value='" . $row["preco"] . "' step='0.01' required><br>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='tipo'>Selecione o tipo:</label>";
        echo "<select class='form-control' name='tipo'>";
        $tipos = array('destaque', 'novo', 'acompanhamento', 'prato', 'bebida', 'sobremesa');
        foreach ($tipos as $tipo_option) {
            echo "<option value='$tipo_option'" . ($row['tipo'] == $tipo_option ? ' selected' : '') . ">$tipo_option</option>";
        }
        echo "</select>";
        echo "</div>";

        echo "<input class='button_confirma' type='submit' value='Salvar'><br><br>";
        
        echo "<a class='btn btn-secondary' href='../home_adm.php'>Voltar</a>";

        echo "</form>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "Item não encontrado.";
    }
}

// Função para atualizar os detalhes do item no banco de dados
function editarItem($conn, $id, $nome, $descricao, $preco, $tipo) {
    $sql = "UPDATE menu SET nome_do_arquivo='$nome', descricao='$descricao', preco=$preco, tipo='$tipo' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Item editado com sucesso.";
    } else {
        echo "Erro ao editar o item: " . $conn->error;
    }
}

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id']; // Add this line to define $id for form submission
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $tipo = $_POST['tipo'];
    
    editarItem($conn, $id, $nome, $descricao, $preco, $tipo);
}

$conn->close();
?>


