<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Alumnos</h1>
    <?php
    require "./clases/Alumno.php";
    $alumnos = Alumno::crearAlumnosDeMuestra();
    ?>
    <ol>
        <?php foreach ($alumnos as $alumno) : ?>
            <li>
                <?= $alumno ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <h1>Profesores</h1>
    <?php
    require "./clases/Profesor.php";
    $profesores = Profesor::crearProfesoresDeMuestra();
    ?>
    <ol>
        <?php foreach ($profesores as $profesor) : ?>
            <li>
                <?= $profesor ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <h1>Asignaturas</h1>
    <?php
    require "./clases/Asignatura.php";
    $asignaturas = Asignatura::crearAsignaturasDeMuestra();
    ?>
    <ol>
        <?php foreach ($asignaturas as $asignatura) : ?>
            <li>
                <?= $asignatura ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <?php
    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);
    ?>

    <h1>Alumnos <= 23</h1>
            <ol>
                <?php
                $alumnosMenores = array_filter($alumnos, function ($alumno) {
                    return $alumno->getEdad() <= 23;
                });
                ?>
                <?php foreach ($alumnosMenores as $alumno) : ?>
                    <li>
                        <?= $alumno ?>
                    </li>
                <?php endforeach; ?>
            </ol>

    <h1>Alumnos con al menos dos asignaturas</h1>
            <ol>
                <?php
                $alumnosConDosAsig = array_filter($alumnos, function ($alumno) {
                    return count($alumno->getAsignaturas()) >= 2;
                })
                ?>
                <?php foreach ($alumnosConDosAsig as $alumno) : ?>
                    <li>
                        <?= $alumno ?>
                    </li>
                <?php endforeach; ?>
            </ol>

    <h1>Asignaturas con algún alumno matriculado</h1>
            <ol>
                <?php
                    $asignaturasConMatricula=array();
                    foreach ($alumnos as $alumno) {
                        foreach ($alumno->getAsignaturas() as $asignatura) {
                            if (!in_array($asignatura, $asignaturasConMatricula)) {
                                $asignaturasConMatricula[] = $asignatura;
                            }
                        }
                    }
                ?>
                <?php foreach ($asignaturasConMatricula as $asignatura) : ?>
                    <li><?= $asignatura ?></li>
                <?php endforeach; ?>
            </ol>
        
</body>

</html>