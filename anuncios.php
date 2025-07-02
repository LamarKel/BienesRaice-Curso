 <?php 
    require 'includes/funciones.php';
    incluirTemple('header');
 ?>

    <main class="contenedor seccion">
        
            <h2>Casas y Departamentos en venta</h2>

            <?php 
                $limite = 10;
                include 'includes/templates/anuncios.php';
            ?>

            </div><!--Contenedor de anuncios-->
       
    </main>

<?php incluirTemple('footer'); ?>