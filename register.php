<?php
	
	if (isset($_POST['submit'])){//quando o usuario aperta o botão ele prossegue
		$email = $_POST['email'];//criando variavel q armazena o valor do email
		$senha = $_POST['senha'];//criando variavel q armazena o valor da senha
		$consenha = $_POST['consenha'];// criando variavel q armazena o valor da confirmaçã ode senha (n ta sendo usado)
		include_once('connection.php');//incluindo a conexão
		$result = mysqli_query($conexion, "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')");//comando pra inserir o usuario na tabela "usuarios"
		header("Location: login.html");//após enviar ele te manda direto pro login
		exit();//aq ele ta saindo do if pra n dar bug
	}
?>