<?php
        include_once("config/connect.php");
?>

<?php

$destaques = '';
$novos = '';
$acompanhamentos = '';
$pratos = '';
$bebidas = '';
$sobremesas = '';

// Verificar se há resultados
if ($result->num_rows > 0) {
    // Exibir dados
    while ($row = $result->fetch_assoc()) {

        
    // DESTAQUES //
        
    if ($row["tipo"] == "destaque") {

    $destaques .= "<a href='exibirUnico.php?id=" . $row["id"] . "'>";

    $destaques .= "<div class='destaque'>";
    $destaques .= "<div class='conteudo'>";
    $destaques .= "<div class='texto'>";
    $destaques .= "<div class='nome'>" . $row["nome_do_arquivo"] . "</div>";
    $destaques .= "<div class='descricao'> Descrição: " . $row["descricao"] . "</div>";
    $destaques .= "<div class='preco'> R$ " . $row["preco"] . "</div>";
    
    $destaques .= "</div>"; 
    $destaques .= "<div class='imagem'>";
    $destaques .= "<img class='img' src='config/" . $row['arquivo'] . "' alt='Imagem do Produto'>";
    $destaques .= "</div>"; 
    $destaques .= "</div>"; 
    $destaques .= "</a>"; 
    $destaques .= "</div>";


    // NOVOS //

    } elseif ($row["tipo"] == "novo") {
    $novos .= "<a href='exibirUnico.php?id=" . $row["id"] . "'>";
    $novos .= "<div class='novo'>";
    $novos .= "<div class='conteudo'>";
    $novos .= "<div class='texto'>";
    $novos .= "<div class='nome'>" . $row["nome_do_arquivo"] . "</div>";
    $novos .= "<div class='descricao'> Descrição: " . $row["descricao"] . "</div>";
    $novos .= "<div class='preco'> R$ " . $row["preco"] . "</div>";
    $novos .= "</div>"; 
    $novos .= "<div class='imagem'>";
    $novos .= "<img class='img' src='config/" . $row['arquivo'] . "' alt='Imagem do Produto'>";
    $novos .= "</div>"; 
    $novos .= "</div>"; 
    $novos .= "</a>"; 
    $novos .= "</div>"; 

    
    // ACOMPANHAMENTOS //
 
    } elseif ($row["tipo"] == "acompanhamento") {
    $acompanhamentos .= "<a href='exibirUnico.php?id=" . $row["id"] . "'>";
    $acompanhamentos .= "<div class='acompanhamento'>";
    $acompanhamentos .= "<div class='conteudo'>";
    $acompanhamentos .= "<div class='texto'>";
    $acompanhamentos .= "<div class='nome'>" . $row["nome_do_arquivo"] . "</div>";
    $acompanhamentos .= "<div class='descricao'> Descrição: " . $row["descricao"] . "</div>";
    $acompanhamentos .= "<div class='preco'> R$ " . $row["preco"] . "</div>";
    $acompanhamentos .= "</div>";  'texto';
    $acompanhamentos .= "<div class='imagem'>";
    $acompanhamentos .= "<img class='img' src='config/" . $row['arquivo'] . "' alt='Imagem do Produto'>";
    $acompanhamentos .= "</div>";  
    $acompanhamentos .= "</div>";  
    $acompanhamentos .= "</a>"; 
    $acompanhamentos .= "</div>"; 

     
    // PRATOS //

    } elseif ($row["tipo"] == "prato") {
    $pratos .= "<a href='exibirUnico.php?id=" . $row["id"] . "'>";
    $pratos .= "<div class='prato'>";
    $pratos .= "<div class='conteudo'>";
    $pratos .= "<div class='texto'>";
    $pratos .= "<div class='nome'>" . $row["nome_do_arquivo"] . "</div>";
    $pratos .= "<div class='descricao'> Descrição: " . $row["descricao"] . "</div>";
    $pratos .= "<div class='preco'> R$ " . $row["preco"] . "</div>";
    $pratos .= "</div>"; 
    $pratos .= "<div class='imagem'>";
    $pratos .= "<img class='img' src='config/" . $row['arquivo'] . "' alt='Imagem do Produto'>";
    $pratos .= "</div>"; 
    $pratos .= "</div>"; 
    $pratos .= "</a>"; 
    $pratos .= "</div>"; 

    
    // BEBIDAS //

    } elseif ($row["tipo"] == "bebida") {
    $bebidas .= "<a href='exibirUnico.php?id=" . $row["id"] . "'>";
    $bebidas .= "<div class='bebida'>";
    $bebidas .= "<div class='conteudo'>";
    $bebidas .= "<div class='texto'>";
    $bebidas .= "<div class='nome'>" . $row["nome_do_arquivo"] . "</div>";
    $bebidas .= "<div class='descricao'> Descrição: " . $row["descricao"] . "</div>";
    $bebidas .= "<div class='preco'> R$ " . $row["preco"] . "</div>";
    $bebidas .= "</div>"; 
    $bebidas .= "<div class='imagem'>";
    $bebidas .= "<img class='img' src='config/" . $row['arquivo'] . "' alt='Imagem do Produto'>";
    $bebidas .= "</div>"; 
    $bebidas .= "</div>"; 
    $bebidas .= "</a>"; 
    $bebidas .= "</div>"; 

      
    // SOBREMESSAS //

    } elseif ($row["tipo"] == "sobremesa") {
    $sobremesas .= "<a href='exibirUnico.php?id=" . $row["id"] . "'>";
    $sobremesas .= "<div class='sobremesa'>";
    $sobremesas .= "<div class='conteudo'>";
    $sobremesas .= "<div class='texto'>";
    $sobremesas .= "<div class='nome'>" . $row["nome_do_arquivo"] . "</div>";
    $sobremesas .= "<div class='descricao'> Descrição: " . $row["descricao"] . "</div>";
    $sobremesas .= "<div class='preco'> R$ " . $row["preco"] . "</div>";
    $sobremesas .= "</div>"; 
    $sobremesas .= "<div class='imagem'>";
    $sobremesas .= "<img class='img' src='config/" . $row['arquivo'] . "' alt='Imagem do Produto'>";
    $sobremesas .= "</div>"; 
    $sobremesas .= "</div>"; 
    $sobremesas .= "</a>"; 
    $sobremesas .= "</div>"; 
}

    }

    
    echo "<h1 id='destaques'>Destaques</h1>";
    echo $destaques;

    echo "<h1 id='novos'>Novos</h1>";
    echo $novos;

    echo "<h1 id='acompanhamentos'>Acompanhamentos</h1>";
    echo $acompanhamentos;

    echo "<h1 id='pratos'>Pratos</h1>";
    echo $pratos;

    echo "<h1 id='bebidas'>Bebidas</h1>";
    echo $bebidas;

    echo "<h1 id='sobremesas'>Sobremesas</h1>";
    echo $sobremesas;

} else {
    echo "Nenhum resultado encontrado na tabela 'menu'.";
}

?>