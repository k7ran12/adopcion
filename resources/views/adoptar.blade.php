@extends('layouts.template')
@section('content')
<section class="services">
    <div class="container">
        <div class="our-services">
            <div class="row mb-3">
                <div class="col-md-4">
                    <select onchange="busquedaSelect()" name="especie_select" id="especie_select" class="styled">
                        <option>Especie</option>
                        <option value="perro">Perro</option>
                        <option value="gato">Gato</option>
                        <option value="animal_granja">Animal de granja</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select onchange="busquedaSelect()" name="sexo_select" id="sexo_select" class="styled">
                        <option>Sexo</option>
                        <option value="macho">Macho</option>
                        <option value="hembra">Hembra</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select onchange="busquedaSelect()" name="tamanio_select" id="tamanio_select" class="styled">
                        <option>Tamaño</option>
                        <option value="pequeño">Pequeño</option>
                        <option value="mediano">Mediano</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
            </div>
            <h2>DogMilo Pet Care Story<br>For Your Best Friends.</h2>
        </div>
        <div class="row" id="cargar_animales">
            <!--@foreach($mascotas as $mascota)
            <div class="col-md-4">
                <div class="pets-grooming">
                    <div class="styling-pet">
                        <img style="object-fit: cover;min-width: 150px;min-height: 150px;width: 50%;height: 50%;"
                            src="{{ @Vite::asset('storage/app/public/'.$mascota->foto) }}" alt="">
                    </div>
                    <div class="pets-groom">
                        <h4>{{ $mascota->nombre }}</h4>
                        <p>{{ $mascota->descripcion }}</p>
                    </div>
                    <div class="arrow"></div>
                    <button onclick="abrirModal({{ $mascota->id }})">
                        <img class="arrow-image" src="{{ @Vite::asset('resources/images/uparrow.png') }}" alt="">
                    </button>

                </div>
            </div>
            @endforeach-->
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar solicitud</h5>
            </div>
            <div class="modal-body">
                @guest
                <h5>Debe registrarse o iniciar sesion para poder enviar un solicitud de adopción</h5>
                <div class="row mx-auto">
                    <a style="background-color: #CE7C2A !important;border-color: #CE7C2A;"
                        href="{{ route('register') }}" class="btn btn-primary my-2">Registrar</a>
                    <a style="background-color: #CE7C2A !important;border-color: #CE7C2A;" href="{{ route('login') }}"
                        class="btn btn-primary my-2">Iniciar sesion</a>
                </div>
                @else
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="row min-form">
                            <div id="resultmm">
                                <span class="seccess">Rellene el siguiente formulario para enviar una solicitud de
                                    adopción.</span>
                            </div>
                            <form id="formulario_adopcion" class="row" action="{{ route('adopciones.store') }}"
                                method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nombre" required="" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="rut" required="" placeholder="RUT">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="domicilio" required="" placeholder="Domicilio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="correo" required="" placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="telefono" required="" placeholder="Telefono">
                                    </div>
                                </div>
                                <input type="hidden" id="mascota_id_input" name="mascota_id">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button onclick="enviarSolicitud()" style="width: 100% !important"
                                            class="btn-sub" type="button">Enviar Solicitud</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="cerrarModal()">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var myModal = new bootstrap.Modal(document.getElementById('modalForm'))
    let url = window.location.origin + '/'
    let mascota_input = document.getElementById('mascota_id_input');
    let div_cargar_animales = document.getElementById('cargar_animales')
    function abrirModal(mascota_id) {
        //mascota_id.value = $mascota_id
        console.log('modal' + mascota_input);
        myModal.show()
        mascota_input.value = mascota_id
    }
    function cerrarModal() {
        myModal.hide();
        mascota_input.value = ''
    }

    function enviarSolicitud() {
        const data = new FormData(document.getElementById('formulario_adopcion'));
        fetch(url + 'adopciones', {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    return response.text()
                } else {
                    throw "Error en la llamada Ajax";
                }

            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });
    }

    //Declaras selects
    let especie = document.getElementById('especie_select');
    let sexo = document.getElementById('sexo_select');
    let tamanio = document.getElementById('tamanio_select');


    function busquedaSelect() {
        let formData = new FormData();
        formData.append('especie', especie.value);
        formData.append('sexo', sexo.value);
        formData.append('tamanio', tamanio.value);

        if(especie.value != 'Especie' || sexo.value != 'Sexo' || tamanio.value != 'Tamaño')
        {
            console.log('hola');
            fetch(url + 'filtro-animales', {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            method: 'POST',
            body: formData
        })
            .then(function (response) {
                if (response.ok) {
                    return response.json()
                } else {
                    throw "Error en la llamada Ajax";
                }

            })
            .then(function (datos) {
                let data = ''
                function pasarLista(animal, indice) {
                    data += `<div class="col-md-4">
                <div class="pets-grooming">
                    <div class="styling-pet">
                        <img style="object-fit: cover;min-width: 150px;min-height: 150px;width: 50%;height: 50%;"
                            src="{{ @Vite::asset('/storage/app/public/${animal.foto}') }}" alt="">
                    </div>
                    <div class="pets-groom">
                        <h4>${animal.nombre}</h4>
                        <p>${animal.descripcion}</p>
                    </div>
                    <div class="arrow"></div>
                    <button onclick="abrirModal(${animal.id})">
                        <img class="arrow-image" src="{{ @Vite::asset('resources/images/uparrow.png') }}" alt="">
                    </button>

                </div>
            </div>`;
                }

                datos.forEach((nombre, indice) => pasarLista(nombre, indice));

                div_cargar_animales.innerHTML = data
            })
            .catch(function (err) {
                console.log(err);
            });
        }
        else{
            getDataAnimales()
        }
    }

    //Llamar a la funcion al cargar la pagina
    getDataAnimales();

    function getDataAnimales() {
        fetch(url + 'get-animales', {
            method: 'GET',
        })
            .then(function (response) {
                if (response.ok) {
                    return response.json()
                } else {
                    throw "Error en la llamada Ajax";
                }

            })
            .then(function (datos) {
                let data = ''
                function pasarLista(animal, indice) {
                    data += `<div class="col-md-4">
                <div class="pets-grooming">
                    <div class="styling-pet">
                        <img style="object-fit: cover;min-width: 150px;min-height: 150px;width: 50%;height: 50%;"
                            src="{{ @Vite::asset('/storage/app/public/${animal.foto}') }}" alt="">
                    </div>
                    <div class="pets-groom">
                        <h4>${animal.nombre}</h4>
                        <p>${animal.descripcion}</p>
                    </div>
                    <div class="arrow"></div>
                    <button onclick="abrirModal(${animal.id})">
                        <img class="arrow-image" src="{{ @Vite::asset('resources/images/uparrow.png') }}" alt="">
                    </button>

                </div>
            </div>`;
                }

                datos.forEach((nombre, indice) => pasarLista(nombre, indice));

                div_cargar_animales.innerHTML = data

                //console.log(data);


            })
            .catch(function (err) {
                console.log(err);
            });
    }


</script>
@endsection
