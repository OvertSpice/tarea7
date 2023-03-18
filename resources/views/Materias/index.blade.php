Lista de Materias:

<a href="{{ url('/materias/create') }}"> Registrar nueva materia (y actividades) </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad1</th>
            <th>Calificaciones_Act1</th>
            <th>Actividad2</th>
            <th>Calificaciones_Act2</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $materias as $materias )
        <tr>
            <td>{{ $materias->id }}</td>
            <td>{{ $materias->Asignatura }}</td>
            <td>{{ $materias->Actividad1 }}</td>
            <td>{{ $materias->Calificación_Act1 }}</td>
            <td>{{ $materias->Actividad2 }}</td>
            <td>{{ $materias->Calificación_Act2 }}</td>
            <td>
                
            <a href="{{ url('/materias/'.$materias->id.'/edit') }}">
                Editar
            </a>

            <form action="{{ url('/materias/'.$materias->id ) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Deseas borrar este elemento?')" value='Borrar'>
            </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>