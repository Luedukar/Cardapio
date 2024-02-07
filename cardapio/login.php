<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="..\cardapio\css\styles.css">
  <link rel="shortcut icon" href="favicon/fav32.png" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/fav32.png" type="image/x-icon">
    <!-- BIBLIOTECA BOOTSTRAP -->

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- FONT AWESOME -->

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<?php
 
    include('config/valida.php');
 
?>

	<!-- BOX DE LOGIN -->

    <div class="content">
     <div class="box">


	      <h2 id="main-title">Sing-in</h2>

         <form id="create-form" action="" method="POST">

            
          <div class="form-grop">

            <label class="cor" for="name">Nome de usuario:</label>

            <input type="text" class="form-control" id="username" name="username" placeholder="Digite o seu e-mail..." required>

          </div>

          <div class="form-grop">

            <label class="cor" for="password">senha:</label>

              <input type="password" class="form-control" id="passeword" name="password" placeholder="Digite a senha..." required>

             <button type="submit" class="button">Validar</button>

             

               </div>

           </div>

      </div>

</body>
</html>