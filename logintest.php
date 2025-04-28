<?php
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']) ){
    include_once("connection.php");
     $email = $_POST['email'];
     $password = $_POST['password'];
     $sql = "SELECT *  FROM usuarios WHERE email = '$email' AND senha = '$password' ";
     $result = $conexion->query($sql);
    if(mysqli_num_rows($result) < 1){
        header("Location: login.php");
    }else{
        header("Location: menu.html");
    }


}else{
    header("Location: login.php");
}
?>