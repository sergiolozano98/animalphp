<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichero donde usamos el alumno</title>
  </head>
  <body>
    <?php
    //Creamos los objetos
    include "alumno.php";
    $alumno=new alumno();
    //Les asignamos un color
    $alumno->setNombre("Sergio");
    //Y les asignamos un tipo
    $alumno->setEdad("15");
    //Les asignamos un tamaño
    $alumno->setCurso("1");
    //Les asignamos un peso
    $alumno->setCiclo("DAW");
    ?>
    Tengo un alumno que se llama <b><?=$alumno->getNombre()?></b>. <br>
    tiene <b><?=$alumno->getEdad()?></b>. <br>
    esta estudiando<b><?=$alumno->getCiclo()?></b>. <br>
    y va por  <b><?=$alumno->getCurso()?></b>.
  </body>
</html>
