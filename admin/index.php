<?php
//Bse de dato
require '../includes/config/database.php';
$db = conectarDB();
// Consultar propiedades
$resultadoConultas = "SELECT * FROM propiedades";

// Obtener resultados
$resultadoConultas = mysqli_query($db, $resultadoConultas);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Eliminar
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if ($id) {
        //ELiminar la imagen
        $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);
        unlink('../imagenes/' . $propiedad['imagen']);
        // Eliminar la propiedad
        $query = "DELETE FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
     
        if ($resultado) {
            header('Location: ../admin?resultado=3');
        }
    }

}

$resultado = $_GET['resultado'] ?? null;
require '../includes/funciones.php';

incluirTemple('header');
?>

<main class="contenedor seccion">
    <h1>Adminitracion</h1>
    <?php if ($resultado == 1) : ?>
        <p class="alerta exito">Propiedad Creada Correctamente</p>
    <?php elseif ($resultado == 2) : ?>
        <p class="alerta exito">Propiedad Actualizada Correctamente</p>
    <?php endif ?>
    <a href="../admin/propiedades/crear.php" class="boton boton-verde">Crear Propiedades</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <!-- Mostrar los resultados -->
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConultas)) : ?>
                <tr>
                    <td><?php echo $propiedad['id'] ?></td>
                    <td><?php echo $propiedad['titulo'] ?></td>
                    <td><img class="imagen-tabla" src="../imagenes/<?php echo $propiedad['imagen'] ?>" alt="Casa de campo"></td>
                    <td>$ <?php echo $propiedad['precio'] ?> </td>
                    <td>
                        <a href="../admin/propiedades/editar.php?id=<?php echo $propiedad['id'] ?>" class="boton boton-amarillo-block">Actualizar</a>
                       <form method="POST" class="w-100">

                            <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">

                            <input type="submit" class="boton boton-rojo" value="Eliminar">
                        </form>

                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php

mysqli_close($db);

incluirTemple('footer');
?>