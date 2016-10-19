<html>
  <head>
    <meta charset="utf-8">
    <title>Probando clase alumno</title>
  </head>
  <body>
    <?php
    include 'Animal.php';

    //atributos
    $animal1 = new Animal();
    $animal2 = new Animal();

    $animal1->settipo('Cienpies');
    echo "El nombre del animal es " .$animal1->gettipo();

    $animal1->setnumero('100');
    echo "</br> El numero de patas son " .$animal1->getnumero();

    $animal2->settipo('Araña');
    echo "</br> El nombre del animal es " .$animal2->gettipo();

    $animal2->setnumero('8');
    echo "</br> El numero de patas son " .$animal2->getnumero();

    ?>

  </body>
</html>
