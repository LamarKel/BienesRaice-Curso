<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();
if (!$auth) {
    header('Location: /bienesraices_inicio/index.php');
    exit;
}
//Conexion de DB
require '../../includes/config/database.php';
$db = conectarDB();

$errores = [];

$nombre = '';
$apellido = '';
$telefono = '';

$consultaVendedor = "SELECT * FROM vendedores";
$consultaVendedor = mysqli_query($db, $consultaVendedor);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if ($id) {
            $query = "DELETE FROM vendedores WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header('Location :/bienesraices_inicio/admin/propiedades/vendedor.php');
                exit;
            }
        }
    } else {
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($db, $_POST['apellido']);
        $telefono = mysqli_real_escape_string($db, $_POST['telefono']);

        if (!$nombre) {
            $errores[] = 'EL Nombre es obligatorio';
        }
        if (!$apellido) {
            $errores[] = 'El Apellido es obligatorio';
        }
        if (!$telefono) {
            $errores[] = "El Telefono es obligatorio";
        }

        if (empty($errores)) {
            $query = "INSERT INTO vendedores (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header('Location : /bienesraices_inicio/admin/index.php');
            }
        }
    }
}


incluirTemple('header');
?>

<main class="contenedor seccion ">

    <h1>Crear Vendedor</h1>

    <a href="/bienesraices_inicio/admin/index.php" class="boton boton-verde">Volver</a>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <div class="vendedor">
        <form method="POST" action="/bienesraices_inicio/admin/propiedades/vendedor.php" class="formulario">
            <fieldset>
                <legend>Imformacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">

                <label for="apellido">apellido</label>
                <input type="text" name="apellido" placeholder="Tu Apellido" id="apellido">

                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" placeholder="Tu Tulefono" id="telefono">

            </fieldset>
            <input type="submit" value="Crear vendedor" class="boton boton-verde">
        </form>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($propiedades = mysqli_fetch_assoc($consultaVendedor)) : ?>
                    <tr>
                        <td> <?php echo $propiedades['nombre'] ?> </td>
                        <td><?php echo $propiedades['apellido'] ?> </td>
                        <td><?php echo $propiedades['telefono'] ?> </td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $propiedades['id'] ?>" class="boton boton-rojo">

                                <input type="submit" value="Eliminar" class="boton boton-rojo">
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>

<?php

incluirTemple('footer');
?>