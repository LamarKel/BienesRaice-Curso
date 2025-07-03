<?php
//Conectar a la base de datos
require __DIR__ . '/../config/database.php';
$db = conectarDB();
// Consultar
$query = "SELECT * FROM propiedades LIMIT $limite"; ;
$resultado = mysqli_query($db, $query);
// Verificar si hay resultados
if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($db));
}

?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="anuncio">

            <img loading="lazy" src="/bienesraices_inicio/imagenes/<?php echo $propiedad['imagen'] ?>" alt="<?php echo $propiedad['titulo']; ?>">


            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio">$<?php echo number_format($propiedad['precio'], 0, ',', '.'); ?></p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                        <p><?php echo $propiedad['ws']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                        <p><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div> <!--Contenido del anuncio-->
        </div><!--Anuncio-->
    <?php endwhile; ?>
</div><!--Contenedor de anuncios-->