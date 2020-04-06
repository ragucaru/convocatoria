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
            
                {{--  <td>
                    <a class="btn btn-primary btn-xs" href="{{ route('movie.edit',['id' => $movie->id] )}}" >Edit</a> 
                    <a class="btn btn-danger btn-xs" href="{{ route('movie/destroy',['id' => $movie->id] )}}" >Delete</a>
                </td>
--}}
            </tr>
        @endforeach        
    </tbody>
</table>

<div class='text-center'>
    {!!$registros->links()!!}
</div>