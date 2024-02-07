<?php 

$usuario = 'root';
$senha = '';
$database = 'cardapio';
$host = 'localhost';
$dbname = "cardapio";

$mysqli = new mysqli($host, $usuario, $senha, $database);


try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {

    $error = $e->getMessage();

    echo "Erro: $error";

  }


 if(isset($_POST['username']) || isset($_POST['password'])) {
   
    if(strlen($_POST['username']) == 0) {
      echo "Preencha seu nome de usuario";
    } else if(strlen($_POST['password']) == 0) {
      echo "Preencha sua senha";
    } else {

      $username = $mysqli->real_escape_string($_POST['username']);
      $password = $mysqli->real_escape_string($_POST['password']);

      $sql_code = "SELECT * FROM acesso_adm WHERE username = '$username' AND password = '$password'";
      $sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if ($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: home_adm.php");
      } else {
        
        print '<p class="falha">Nome de usuário e/ou senha incorreto(s)</p>';
        

      }
    }
 }


 
$conn = null;
?>