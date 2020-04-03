@extends('convocatoria.layout')

@section('title','Registro de Aspirantes')
{{-- @section('metadatos')
    <meta name="csrf-token" content="{{ crsf_token }}"
@endsection  --}}
@section('content')
<div id="divmsg" style="display:none" class="alert-primary" role="alert">
</div>
<button class="btn btn-primary" id="guardar" onclick="guardar()" type="submit">Guardar</button>
@endsection

@section('scripts')    
    <script src="js/convocatoria/registro.js"></script> 
@endsection
    


