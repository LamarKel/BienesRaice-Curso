<?php
//Bse de dato
require '../../includes/config/database.php';
conectarDB();



require '../../includes/funciones.php';
incluirTemple('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin/index.php" class="boton boton-verde">Volver</a>

    <form class="formulario" action="">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Propieda propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea name="" id="descripcion"></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="habitacion">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Banos:</label>
            <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
             <select name="vendedor" id="">
                <option value="1">Juan</option>
                <option value="2">Karen</option>
             </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php

incluirTemple('footer');
?>