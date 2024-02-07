<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cardapio</title>
	<link rel="shortcut icon" href="favicon/fav32.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    
    


    
</head>
<?php 
        include_once("config/protect.php");
        ?>
<body>
	<header>

    <div>
        <img class="logoCabecalho" src="imagens/logo.png" alt="Logo do cabeçalho"> 
        <nav>
            <ul class="BarraDeNavegacao">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#destaques">Destaques</a></li>
                <li><a href="#novos">Novos</a></li>
                <li><a href="#acompanhamentos">Acompanhamentos</a></li>
                <li><a href="#pratos">Pratos</a></li>
                <li><a href="#bebidas">Bebidas</a></li>
                <li><a href="#sobremesas">Sobremesas</a></li>
                <li><a href="cadastra.php" class="login">cadastrar</a></li>
                <li><a href="templates/logout.php" class="login"><img src="imagens/user.png" alt="Ícone de usuário">Sair</a></li>
            </ul>
        </nav>
    </div>
</header>

<?php
        include_once("exibicao/exibir_2.php");
        include_once("config/protect.php");
?>