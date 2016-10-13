<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando Vivienda</title>
  </head>
  <body>
    <?php
    //incluimos la clase
    include 'claseVivienda.php';
    //Generacion de objetos
    $Vivienda1 = new ClaseVivienda();
    $Vivienda1->setColor('Verde');
    echo " es el color de la vivienda" .$Vivienda1->getColor();
    echo "<br>";

    $Vivienda1->setM2('800');
    echo " son los M2 de la vivienda " .$Vivienda1->getM2();
    echo "<br>";
    $Vivienda1->setPlantas('3');
    echo " son el numero de Plantas de la vivienda " .$Vivienda1->getPlantas();
    echo "<br>";
    $Vivienda1->setAnimales('Si');
    echo " que hay Animales en la vivienda " .$Vivienda1->getAnimales();

     ?>
  </body>
</html>
