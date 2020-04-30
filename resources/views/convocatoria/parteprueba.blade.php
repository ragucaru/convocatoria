<table class="table" id="dataTable" width="100%" cellspacing="0">
    <thead>                    
        <tr>                       
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Cédula</th>
            <th>Telefono</th>
            <th>Email</th>                                            
        </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->nombre }}</td>
                <td>{{ $registro->especialidad }}</td>
                <td>{{ $registro->cedula }}</td>
                <td>{{ $registro->telefono }}</td>
                <td>{{ $registro->email }}</td>
            
                <td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#editar' onclick='editar("+{{$registro->id}}+")'>Editar</button></td>
                <td><button type='button' class='btn btn-danger' onclick='eliminar("+{{$registro->id}}+")'>Eliminar</button></td>

            </tr>
        @endforeach        
    </tbody>
</table>


<div class='text-center'>
    {!!$registros->links()!!}
</div>

<div class="modal" id="editar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @include('convocatoria.formulario')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="actualizar()">Actualizar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="agregar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @include('convocatoria.formulario')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="agregar()">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>