<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Contactanos</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<div class="container">

<header>

    <a href="index.html" class="logo">OA<span>P</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.html">INICIO</a>
        <a href="servicios.html">MATERIAL</a>
        <a href="guia.html">PSICOPEDAGOGOS</a>
        <a href="contacto.php">CONTACTANOS</a>
    </nav>

</header>

<h1 class="heading">CONTACTO</h1>

<section class="contact">

    <form method="post" class="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ingrese un nombre válido</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="asunto" class="formulario__label">Asunto</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="asunto" id="asunto" placeholder="Asunto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ingrese un asunto válido</p>
        </div>

        <!-- Grupo: Correo Electronico -->
        <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo Electrónico</label>
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@dominio.com">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                Recuerde completar con @dominio.com.
            </p>
        </div>

        <!-- Grupo: Teléfono -->
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4423798547">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 10 dígitos.</p>
        </div>

        <!-- Grupo: Terminos y Condiciones -->
        <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                Acepto generar un historial de mi caso al agendar esta cita.
            </label>
        </div>

        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <Button type="submit" class="formulario__btn" name="registrar">Enviar</Button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>
    
    </form>
    
    <?php
        include("registrar.php");
    ?>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Orientacion y Asistencia Psicopedgógica</h3>
            <p>
            </p>
        </div>

        <div class="box">
            <h3>Siguenos</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Linkedin</a>
        </div>

        <div class="box">
            <h3>Contactanos</h3>
           <p> <i class="fas fa-phone"></i> 4423798547 </p>
           <p> <i class="fas fa-envelope"></i> psicopedagogia@gmail.com </p>
           <p> <i class="fas fa-map-marker-alt"></i> Santiago de Querétaro - Querétaro </p>
        </div>

    </div>

</section>

</div>

    <script src="js/script.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>