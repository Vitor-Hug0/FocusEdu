<?php
$hostname='localhost';
$user = 'root';
$password = '';//senha do mariadb caso for usar xampp tira o 123 mas deixa as aspas
$database = 'focusedu';

$conexion =new mysqli($hostname, $user,$password,$database);

?> 