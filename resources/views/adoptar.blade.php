@extends('layouts.template')
@section('content')
<section class="services">
    <div class="container">
        <div class="our-services">
            <div class="row mb-3">
                <div class="col-md-3">
                    <select class="styled">
                        <option>Styled select box</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="styled">
                        <option>Styled select box</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="styled">
                        <option>Styled select box</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="styled">
                        <option>Styled select box</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <h2>DogMilo Pet Care Story<br>For Your Best Friends.</h2>
        </div>
        <div class="row">
            @foreach($mascotas as $mascota)
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
            @endforeach
        </div>
    </div>
</section>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="cerrarModal()">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var myModal = new bootstrap.Modal(document.getElementById('modalForm'))
    function abrirModal($mascota_id) {
        console.log('modal' + $mascota_id);
        myModal.show()
    }
    function cerrarModal()
    {
        myModal.hide();
    }
</script>
@endsection
