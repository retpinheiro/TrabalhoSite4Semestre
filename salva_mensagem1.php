<?php include_once "conexao1.php";?>
<html>
<body>
<?php
	$nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["mensagem"];

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn, 'dbname');
$sql = "INSERT INTO faleconosco (nome, email, mensagem) VALUES ('$nome', '$email', '$msg' )";
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Salvei sua Mensagem!'); window.location = 'Resposta.html';</script>";
} else {
	echo "Deu Errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>