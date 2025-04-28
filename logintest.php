<?php
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']) ){//quando o botão de login é apertado ele verifica se o campo email e senha está vazio caso n esteja ele prossegue
    include_once("connection.php");//inclui a conexão
     $email = $_POST['email'];//criando variavel do email
     $password = $_POST['password'];//criando variavel da senha
     $sql = "SELECT *  FROM usuarios WHERE email = '$email' AND senha = '$password' ";//comando de selecionar o user e senha no bd
     $result = $conexion->query($sql);//mandando o comando de cima pro bd
    if(mysqli_num_rows($result) < 1){//verificando se os valores estão la ou n se esse num_rows for => 1 então os dados ta la
        header("Location: login.php");//se n tiver ele manda pro login
    }else{
        header("Location: menu.html");//se tiver ele manda pro menu (homepage do app)
    }


}else{
    header("Location: login.php");// caso a 1 verificação dos campos vazios esteja vazio ele te manda pro login
}
?>