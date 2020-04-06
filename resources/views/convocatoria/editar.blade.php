@extends('convocatoria.layout')

@section('title','Registro de Aspirantes')
{{-- @section('metadatos')
    <meta name="csrf-token" content="{{ crsf_token }}"
@endsection  --}}
@section('content')
    @include('convocatoria.formulario')
<button class="btn btn-primary" id="actualizar" onclick="actualizar()" type="submit">Actualizar</button>
@endsection

@section('scripts')    
    <script src="js/convocatoria/lista.js"></script> 
@endsection