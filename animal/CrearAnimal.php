<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uso animal</title>
  </head>
  <body>
  <?php
  include "animal.php";
  $animal=new animal();
    $animal->setTipo("cienpies");
    $animal->setPatas("100 patas");
  $animal2= new animal();
    $animal2->setTipo("araña");
    $animal2->setPatas("8 patas");
   ?>
   el animal 1 es de tipo <b><?=$animal->getTipo()?> y tiene <?=$animal->getPatas()?></b>
   el animal 2 es de tipo <b><?=$animal2->getTipo()?> y tiene <?=$animal2->getPatas()?></b>
  </body>
</html>
