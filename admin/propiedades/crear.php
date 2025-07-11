<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

if (!$auth) {
    header('Location: /bienesraices_inicio/index.php');
    exit;
}
//Bse de dato
require '../../includes/config/database.php';
$db = conectarDB();


incluirTemple('header');

$consultar = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consultar);

$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$ws = '';
$estacionamiento = '';
$vendedores_id = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $ws = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = mysqli_real_escape_string($db, date('Y/m/d'));
    //var_dump($creado);
    $imagen = $_FILES['imagen'];
    // Validacion de campos
    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La descripcion debe tener al menos 50 caracteres";
    }
    if (!$habitaciones || $habitaciones < 1 || $habitaciones > 9) {
        $errores[] = "El numero de habitaciones es obligatorio y debe ser entre 1 y 9";
    }
    if (!$ws || $ws < 1 || $ws > 9) {
        $errores[] = "El numero de baños es obligatorio y debe ser entre 1 y 9";
    }
    if (!$estacionamiento || $estacionamiento < 1 || $estacionamiento > 9) {
        $errores[] = "El numero de estacionamientos es obligatorio y debe ser entre 1 y 9";
    }
    if (!$vendedores_id) {
        $errores[] = "Elige un vendedor";
    }
    if ($imagen['error']) {
        $errores[] = "La imagen es obligatoria";
    }
    // Validar imagen
    $medida = 1000 * 1000; // 1MB   
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada, debe pesar menos de 1MB";
    }

    if (empty($errores)) {


        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        // Generar nombre unico
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
        // Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, ws, estacionamiento, creado, vendedores_id, imagen)
              VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$ws','$estacionamiento', '$creado','$vendedores_id', '$nombreImagen')";

        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            echo "Correctamenet insertado";
            header('Location: /bienesraices_inicio/admin/index.php?resultado=1');
        }
    }
}
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/bienesraices_inicio/admin/index.php" class="boton boton-verde">Volver</a>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" action="/bienesraices_inicio/admin/propiedades/crear.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Propieda propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="habitacion">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Banos:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $ws; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="">
                <option value="">-- Seleccione un vendedor --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php

incluirTemple('footer');
?>