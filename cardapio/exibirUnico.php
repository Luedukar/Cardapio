<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="shortcut icon" href="favicon/fav32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Visualização</title>

</head>

<header>
    <div>
        <img class="logoCabecalho" src="imagens/logo.png" alt="Logo do cabeçalho"> 
    </div>
</header>

<body class="header_3">


     <br><br><a class='voltar' href='#' onclick='history.back()'><i class="fas fa-arrow-left"></i> Voltar para a Página Anterior</a>


<?php
if (isset($_GET['id'])) {
    
    include_once 'config/connect.php';


    $produto_id = $_GET['id'];

    // Consulta SQL para obter as informações do produto
    $sql = "SELECT * FROM menu WHERE id = $produto_id";
    $result = $conn->query($sql);

    // Verifique se há resultados
    if ($result->num_rows > 0) {
        // Obtenha os dados do produto
        $row = $result->fetch_assoc();

        // Exiba as informações do produto
        echo "<div class='conteudo'>";
        
        echo "<h1>{$row['nome_do_arquivo']}</h1>";
        
        echo "<div class='imagem-container'>";
        
        echo "<div class='descricao2'>";
        echo "<p class='bold'>Descrição:</p>";
        echo "<p>{$row['descricao']}</p>";
        echo "</div>";

        echo "<div class='imagem'>";
        echo "<img class='img_unico' src='config/{$row['arquivo']}' alt='Imagem do Produto'>";
        echo "</div>";

        echo "<div class='preco2'>";
        echo "<div class='preco2'>";
        echo "<p class='bold'>Valor em nosso restaurante!</p>";
        echo "<p>Aproveite quando vier ao nosso restaurante por um preço de R$ {$row['preco']}!</p>";
        echo "<p>(sujeito a taxa de entrega em caso de pedido)</p><br><br>";
        echo "</div>";

        echo "Ficou com alguma duvida?</p><br>";
        echo "<a href='https://api.whatsapp.com/send?phone=' target='_blank'>";
        echo "<button class='button2': flex;>Envie uma mensagem para nós no WhatsApp</button>";
        echo "</a>";
    
    echo "</div>";
   echo "</div>";
  echo "</div>";
        
    include 'templates/footer.php';
     
    } else {
        echo "Produto não encontrado.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    echo "ID do produto não fornecido.";
}
?>
