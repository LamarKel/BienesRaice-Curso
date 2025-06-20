 <?php 
    require 'includes/funciones.php';

    incluirTemple('header');
 ?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Anuncio 2">
        </picture>

        <h2>LLene el formulario de contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Imformacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">Email</label>
                <input type="email" placeholder="Tu Correo" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Tulefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre Propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio O Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>
                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligio telefono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" name="" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" name="" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" name="Enviar" id="" class="boton-verde">
        </form>
    </main>
<?php incluirTemple('footer'); ?>