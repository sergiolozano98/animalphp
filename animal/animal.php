<?php

/**Definimos clase
 *
 */
class animal
{
  public $tipo="perro";
  public $patas="4";

  public function getTipo ()
  {
    return $this->tipo;
  }

  public function getPatas()
  {
    return $this->patas;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
    return $this;
  }

 public function setPatas($patas)
 {
   $this->patas = $patas;
   return $this;
 }
}


 ?>
