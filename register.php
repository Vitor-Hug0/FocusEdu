<?php
	
	if (isset($_POST['submit'])){
		$nome= $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$consenha = $_POST['consenha'];
		include_once('connection.php');
		$result = mysqli_query($conexion, "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')");
		header("Location: login.html");
		exit();
	}
?>