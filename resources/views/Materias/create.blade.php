Formulario de Materias
<br>

<form action="{{ url('/materias') }}" method="post" enctype='multipart/form-data' >
@csrf
@include('materias.form');
    
</form>