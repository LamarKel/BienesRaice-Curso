<?php
require 'includes/config/database.php';
$db = conectarDB();

$errores = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $passaword = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    }
    if (!$passaword) {
        $errores[] = "El password es obligatorio";
    }
    if (empty($errores)) {

        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($db, $query);


        if ($resultado->num_rows) {
            $usuario = mysqli_fetch_assoc($resultado);

            $auth = password_verify($passaword, $usuario['password']);

            if ($auth) {
                //EL usuario esta autenticao
                session_start();
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
            } else {
                $errores[] = 'Password incorrecto';
            }
        } else {
            $errores[] = 'EL Usuario no existe';
        }
    }
}



require 'includes/funciones.php';
incluirTemple('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Inicial Secion</h1>
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>

    <?php endforeach ?>


    <form method="POST" action="" class="formulario">
        <fieldset>
            <legend>Imformacion Personal</legend>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Tu Correo" id="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Tu Contraseña" id="password">

        </fieldset>
        <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
    </form>
</main>

<?php

incluirTemple('footer');
?>