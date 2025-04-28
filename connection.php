<?php
$hostname='localhost';//é o nome do host no caso como estamos usando do pc usa-se localhost
$user = 'root';//o usuario do bd
$password = '';//senha do mariadb caso for usar xampp tira o 123 mas deixa as aspas
$database = 'focusedu';//o banco de dados que tamo usando

$conexion =new mysqli($hostname, $user,$password,$database); //cria 1 conexão com o banco de dados

?> 