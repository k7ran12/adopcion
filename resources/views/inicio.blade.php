@extends('layouts.template')
@section('content')
    <section class="home" id="home">
        <div class="content">
            <h3> Lorem, ipsum.</h3>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti molestias illum eum minus quaerat
                itaque harum libero asperiores adipisci? Neque perferendis quos iste.</p>
            <a href="#" class="btn">ADOPTAR</a>
            <div class="logo-intro">
                <a href="" class="logo-content"><img src="{{ Vite::asset('resources/images/perro4.jpg') }}" alt="{{ Vite::asset('resources/images/perro4.jpg') }}"></a>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <h1 class="heading"> <span> Nosotros </span></h1>
        <div class="row">
            <div class="video-container">
                <video src="{{ Vite::asset('resources/images/jugando.mp4') }}" loop autoplay muted></video>
            </div>
            <div class="content">
                <h3>¿Quienes Somos?</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, cupiditate assumenda velit
                    perferendis voluptatem provident quae consequuntur vel qui dolore, ducimus voluptatum et consequatur
                    aliquid aut, rerum sapiente eveniet possimus.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus odio quasi consectetur eligendi
                    doloremque voluptate error aliquam tempore numquam distinctio, aut veritatis fugiat unde ab suscipit
                    non eius exercitationem et.
                </p>
            </div>
        </div>
    </section>
    <section class="noticias">
    </section>
    <section class="icons-container">
        <div class="icons">
            <a href=""><i class="fa-brands fa-facebook fa-5x"></i></a>
            <div class="info">
                <h3>Facebook</h3>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.</span>
            </div>
        </div>

        <div class="icons">
            <a href=""><i class="fa-brands fa-instagram fa-5x"></i></a>
            <div class="info">
                <h3>Instagram</h3>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </div>
        </div>

        <div class="icons">
            <a href=""><i class="fa-brands fa-google fa-5x"></i></a>
            <div class="info">
                <h3>Gmail</h3>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </div>
        </div>

        <div class="icons">
            <a href=""><i class="fa-brands fa-whatsapp fa-5x"></i></a>
            <div class="info">
                <h3>Whatsapp</h3>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </div>
        </div>

    </section>
    <section class="galeria" id="galeria">
        <h1 class="heading"> Galeria <span> Imagenes </span> </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub"> Rescatado </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro2.jpg') }}" alt="{{ Vite::asset('resources/images/perro2.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub"> Rescatado </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Rescatado</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Rescatado</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Rescatado</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Rescatado</div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Rescatado</div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Rescatado</div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Adoptado</div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{ Vite::asset('resources/images/perro1.jpg') }}" alt="{{ Vite::asset('resources/images/perro1.jpg') }}">
                </div>
                <div class="content">
                    <h3>Imagen</h3>
                    <div class="sub">Adoptado</div>
                </div>
            </div>
        </div>


        </div>

    </section>
    <section class="donacion" id="donacion">
        <h1 class="heading"> Donaciones </h1>
        <div class="box-container">
            <div class="box">
                <h2>Transferencia</h2>
                <p>Lorem ipsum dolor sit. </p>
                <p>Banco: Lorem ipsum dolor sit. <br> Tipo: Lorem ipsum dolor sit. <br>Número: Lorem ipsum dolor sit.
                    <br> Rut: Lorem ipsum dolor sit.
                </p>
                <p>Muchas gracias</p>
                <img src="{{ Vite::asset('resources/images/pavel-nekoranec-NY6UWHDu4fQ-unsplash.jpg') }}" alt="{{ Vite::asset('resources/images/pavel-nekoranec-NY6UWHDu4fQ-unsplash.jpg') }}">
            </div>

            <div class="box">
                <h2>Paypal</h2>
                <p>En caso de no poder realizar transferencia con el método anterior, también contanmos con Paypal, ház
                    click en el botón "Donar" y te redirigirá a Paypal.</p>
                <a href="https://www.paypal.com/paypalme/k7ran12?country.x=PE&locale.x=es_XC" target="_blank">Donar</a>
            </div>



        </div>

    </section>
    <section class="contact" id="contact">
        <h1 class="heading"> <span> Contactanos </span> </h1>
        <div class="row">
            <form action="">
                <input type="text" placeholder="Nombre" class="box">
                <input type="email" placeholder="Correo" class="box">
                <input type="number" placeholder="Número" class="box">
                <textarea name="" class="box" placeholder="Mensaje" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar mensaje" class="btn" id="enviar-form-contacto">
            </form>
            <div class="image">
                <img src="{{ Vite::asset('resources/images/imagen_contacto.png') }}" alt="{{ Vite::asset('resources/images/imagen_contacto.png') }}">
            </div>
        </div>
    </section>
@endsection
