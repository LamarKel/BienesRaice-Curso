 <?php
    $id = $_GET['id'] ;
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: /bienesraices_inicio/index.php');
        exit;
    }
    // Conectar a la base de datos
    require 'includes/config/database.php';
    $db = conectarDB();
    // Consultar
    $query = "SELECT * FROM propiedades WHERE id = $id";
    $resultado = mysqli_query($db, $query);
    $propiedad = mysqli_fetch_assoc($resultado);
    // Verificar si hay resultados
   
    if(!$resultado->num_rows) {
        header('Location: /bienesraices_inicio/index.php');
        exit;
    }
    require 'includes/funciones.php';

    incluirTemple('header');
    ?>

 <main class="contenedor seccion contenido-centrado">
     <h1><?php echo $propiedad['titulo']; ?></h1>
   
        <img loading="lazy" src="/bienesraices_inicio/imagenes/<?php echo $propiedad['imagen'] ?>" alt="<?php echo $propiedad['titulo']; ?>">


         <div class="resumen-propiedad">
             <p class="precio">
                 $<?php echo number_format($propiedad['precio'], 0, ',', '.'); ?>
             </p>

             <ul class="iconos-caracteristicas">
                 <li>
                     <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                     <p><?php echo $propiedad['ws']; ?></p>
                 </li>
                 <li>
                     <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                     <p><?php echo $propiedad['estacionamiento']; ?></p>
                 </li>
                 <li>
                     <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                     <p><?php echo $propiedad['habitaciones']; ?></p>
                 </li>
             </ul>


             <p><?php echo $propiedad['descripcion']; ?></p>
             
         </div>

 </main>

 <?php
    // Cerrar la conexión a la base de datos
    mysqli_close($db);
    incluirTemple('footer');
    ?>