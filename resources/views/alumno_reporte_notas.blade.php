@extends('layouts.plantilla_alumno')

@section('contenido_principal')

<div class="contenido-main">
        <div class="titulo-formulario">
           <h2>Reportes de <span>Notas</span></h2>  
        </div>

        @if(!empty($nomina))
            <table class="table">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col" width="5%">Nota 1</th>
                            <th scope="col" width="5%">Nota 2</th>
                            <th scope="col" width="5%">Nota 3</th>
                            <th scope="col" width="25%">Observacion</th>
                            <th scope="col" width="15%">Fecha de ingreso de notas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">{{ $nomina->nota1 }}</th>
                        <th scope="row">{{ $nomina->nota2 }}</th>
                        <th scope="row">{{ $nomina->nota3 }}</th>
                        <td>{{ ucwords($nomina->observacion) }}</td>
                        <td>{{ $nomina->created_at}}</td>
                        </tr>
                    </tbody>
            </table>
        
        @else 
            <div class="titulo-formulario">
                <h2> <span> Lo  sentimos</span>, <span>no</span> se ha registrado sus <span>notas</span> el dia de hoy :(</h2>
            </div>
        @endif
</div>

@endsection
