<?php
        include_once("config/protect.php");
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon/fav32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Adicionar Produto</title>

    <!-- BIBLIOTECA BOOTSTRAP -->

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

         <! -- FONT AWESOME -->

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<header>
            
    <div>
        <img width="60px" src="imagens/logo.png" alt="Logo do cabeçalho"> 
       </div>
</header>
<body>

    
        <div class="container">
    
        <h2 id="main-title">Adicionar Produto</h2>
        <form id="create-form" action="config/cadastrar.php" method="post" enctype="multipart/form-data"><br>
            
            <div class="form-grop">
            <label for="nome_arquivo">Nome do produto:</label>
            <input class="form-control" placeholder="Digite o nome do produto..." type="text" name="nome_arquivo" required><br>

            </div>

            <div class="form-grop">
            <label for="arquivo">Arquivo (Imagem):</label><br>
            <input type="file" name="arquivo" accept="image/*" required><br><br>
        </div>

            <div class="form-grop">
            <label for="tipo">Selecione o tipo:</label><br>
            <select name="tipo">
                <option value="destaque">Destaque</option>
                <option value="novo">Novo</option>
                <option value="acompanhamento">Acompanhamento</option>
                <option value="prato">Prato</option>
                <option value="bebida">Bebida</option>
                <option value="sobremesa">Sobremesa</option>
            </select><br><br>
        </div>

            <div class="form-grop">
            <label for="preco">Preço (R$):</label>
            <input class="form-control" type="number" name="preco" placeholder="Digite o preço do produto..." step="0.01" required><br>
            </div>

            <div class="form-grop">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" name="descricao" placeholder="Digite a descrição do produto"required></textarea>
            </div>

            <input class="button_confirma" type="submit" value="Adicionar Produto"><br>

            <button onclick="history.back()">Cancelar</button>
        </form>
    </div>
   </div>
</div>

   
</body>
</html>
