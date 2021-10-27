<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>
<?php
require ("config.php");
?>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];

$sql = "INSERT INTO usuarios (nome, email, endereco, numero, cep) 
        VALUES (:nome, :email, :endereco, :numero, :cep)
";

$stmt = $conexao->prepare($sql);

$params = array(
    ':nome' => $nome, 
    ':email' => $email, 
    ':endereco' => $endereco, 
    ':numero' => $numero, 
    ':cep' => $cep
);

$stmt->execute($params);

echo "<script>
          alert('Usuário cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=funcionarios.php'>
";
?>
</body>
</html>