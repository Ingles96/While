<html>
  <head>
    <meta charset="utf-8">
    <title>Probando clase alumno</title>
  </head>
  <body>
    <?php
    include 'alumno.php';

    //atributos
    $alumno1 = new claseAlumno();

    $alumno1->setNombre('Josep');
    echo "El nombre del alumno es " .$alumno1->getNombre();

    $alumno1->setEdad('20');
    echo "</br> La edad del alumno es " .$alumno1->getEdad();

    $alumno1->setCurso('2');
    echo "</br> El curso del alumno es " .$alumno1->getCurso();

    $alumno1->setCiclo('Superior');
    echo "</br> El ciclo del alumno es " .$alumno1->getCiclo();

    ?>

  </body>
</html>
