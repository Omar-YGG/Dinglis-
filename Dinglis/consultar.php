<?php
include('db.php');


if  (isset($_POST['Ingresar'])) {
    $usuario = $_POST['usuario'];
    $Clave = $_POST['password'];
    echo $usuario;
    echo $Clave;
    $query = "SELECT * FROM registro WHERE Usuario='$usuario' AND Clave = '$Clave'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        header('Location: inicio.html');
    }else{
        $_SESSION['message'] = "Error: Usuario y/o contraseña errados";
        header('Location: index.php');
    }
  }

  
  
?>