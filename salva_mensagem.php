<?php include_once "conexao.php";?>
<html>
<body>
<?php
	$nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $tel = $_POST["telefone"];

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn, 'dbname');
$sql = "INSERT INTO tbcadastro (nome, email, endereco, telefone) VALUES ('$nome', '$email', '$endereco', '$tel' )";
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Salvei seus Dados!'); window.location = 'Resposta.html';</script>";
} else {
	echo "Deu Errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>