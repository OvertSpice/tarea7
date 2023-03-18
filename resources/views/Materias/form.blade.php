<label for='Asignatura'> Asignatura</label>
    <input type="text" name="Asignatura" value="{{isset($materias->Asignatura)?$materias->Asignatura:' '}}" id="Asignatura"> 
    <br>
    <label for='Actividad1'> Actividad 1</label>
    <input type="text" name="Actividad1" value="{{isset($materias->Actividad1)?$materias->Actividad1:' '}}" id="Actividad1"> 
    <br>
    <label for='Calficación Act1'> Calficación Actividad 1</label>
    <input type="integer" name="Calificación_Act1" value="{{isset($materias->Calificación_Act1)?$materias->Calificación_Act1:' '}}"id="Calificación_Act1">
    <br>
    <label for='Actividad2'> Actividad 2</label>
    <input type="text" name="Actividad2" value="{{isset($materias->Actividad2)?$materias->Actividad2:' '}}" id="Actividad2"> 
    <br>
    <label for='Calficación Act2'> Calficación Actividad 2</label>
    <input type="integer" name="Calificación_Act2" value="{{isset($materias->Calificación_Act2)?$materias->Calificación_Act2:' '}}"id="Calificación_Act2">
    <br>
    <input type="submit" value='Guardar cambios'>
    <br>
    <a href="{{url('/materias/')}}"> REGRESAR </a>