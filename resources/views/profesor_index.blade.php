@extends('layouts.plantilla_profesor')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Bienvenido profe {{$user->nom_prof}}, revisa nuestras <span>Novedades</span> para hoy</h2>
                </div>
    </div>

@endsection