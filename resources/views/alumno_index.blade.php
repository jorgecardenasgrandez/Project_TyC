@extends('layouts.plantilla_alumno')


@section("contenido_principal")

    <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Bienvenido {{ ucwords(auth()->user()->name) }}, revisa nuestras <span>Novedades</span> para hoy</h2>
                </div>
    </div>

@endsection