<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/fbe136a3ad.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="@vite('resources/css/style.css')">
</head>

<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <img src="{{ Vite::asset('resources/images/imagen_contacto.png') }}" alt="">
        <nav class="navbar">
            <a href="#home">Inicio</a>
            <a href="#about">Nosotros</a>
            <a href="#products">Galeria</a>
            <a href="#review">Donaciones</a>
            <a href="#contact">Contactos</a>
            <a href="#contact">Noticias</a>
            <a href="#contact">Adoptar</a>
        </nav>
        <div class="icons">
            <a href="#"><i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesion</a>
            <a href="#">Registrarse </a>
        </div>
    </header>
    @yield('content')
    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>IR</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">products</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>Ubicacion</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>
            <div class="box">
                <h3>Contacto</h3>
                <a href="#">2222222</a>
                <a href="#">example@gmail.com</a>
                <a href="#">ssssssss</a>
            </div>
        </div>
        <div class="credit"> Creado por <span> Sojo </span> Derechos reservados </div>
    </section>
</body>

</html>
