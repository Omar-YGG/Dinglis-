<?php
include ('db.php');

if (isset($_POST['Registro']))
{
   $usuario = $_POST['usuario'];
   $nombre = $_POST['nombre'];
   $clave = $_POST['clave'];
   $email = $_POST['email'];
   $fecha = $_POST['fechaNacimiento'];

   $query = "INSERT INTO registro values('$usuario','$nombre','$clave','$email','$fecha')";
   $result = mysqli_query($conn, $query);
   if (!$result)
   {
      $_SESSION['message'] = 'Error: No se registró';
      header('Location: registro.php');
   }
   else
   {
      $_SESSION['message'] = 'Se ha registrado con éxito.';
      header('Location: index.php');
   }

}

?>
