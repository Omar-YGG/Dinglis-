<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - Dinglis+</title>
    <link rel="icon" type="image/png" href="imagenes/icono.ico">
    <meta name="description" content="Dinglis+ es un juego de plataformas para aprender ingles hecho en la plataforma de Scratch" />
    <meta name="author" content="JSJ Team"/>
    <meta name="keywords" content="Ingles, Dinglis+, Juego" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body id="body">

    <body>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-primary" style="background-color: rgb(255, 109, 109); color: white;" role="alert">
                    <strong><?= $_SESSION['message']?></strong>
                    </div>
                <?php session_unset(); } ?>
                    <h2 class="fw-bold text-center py-5">Inicio de sesión</h2>
                    <form action="consultar.php" method="POST">
                        <div class="mb-4">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" style="border-color: rgb(255, 109, 109); background-color: rgb(255, 109, 109);" class="btn btn-primary" name="Ingresar">Iniciar Sesión</button>
                        </div>

                        <div class="my-3">
                            <span>¿No tienes cuenta? <a href="registro.php">Registrate</a></span><br>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
            <br>
            <br>
        </div>
        </div>
    </body>

</html>