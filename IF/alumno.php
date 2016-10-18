<?php

/**
 *
 */
class alumno
//creamos los atributos del alumno
{
public $nombre="";
public $edad="";
public $curso="";
public $ciclo ="";
// creacion de los getter

public function getNombre()
{
  return $this->nombre;
}

public function getEdad()
{
  return $this->edad;
}

public function getCurso()
{
  return $this->curso;
}

public function getCiclo()
{
  return $this->ciclo;
}

//creamos los setter

public function setNombre($nuevoNombre)
{
  $this->nombre = $nuevoNombre;
  return $this;

  }

public function setEdad($nuevaEdad)
{
  //creamos el if
  if ($nuevaEdad<18) {
      $this->edad=18;
  }else{
  $this->edad=$nuevaEdad;
  }
}
public function setCurso($nuevoCurso)
{
  if ($nuevoCurso=1) {
    $this->curso=$nuevoCurso;
  } elseif ($nuevoCurso=2) {
    $this->curso=$nuevoCurso;
  }else{
    $this->curso=1;
}
}
public function setCiclo($ciclo)
{
  $this->ciclo = $ciclo;
  return $this;
}
}
 ?>
