<?php
    class Alumno extends Miembro{
        private $asignaturas=array();//inicializamos como un array vacío

        private $cursoAbonado=false;//por defecto es false
        
        function __construct($id,$nombre,$apellidos,$email,$edad){
            parent::__construct($id,$nombre,$apellidos,$email,$edad);
            $this->asignaturas=array();
            $this->cursoAbonado=false;
        }



        function abonarCurso(){
            $this->cursoAbonado=true;
        }

        function matricularseEnAsignatura($asignaturaMatricular){
            $comprobacion=false;
            for($i= 0;$i<count($this->asignaturas);$i++){
                if($this->asignaturas[$i]==$asignaturaMatricular){
                    $comprobacion=true;
                }
            }
            if(!$comprobacion){
                $this->asignaturas[]=$asignaturaMatricular;
            }
        }

        function bajaEnAsignatura($asignatura){
            $comprobacion=false;
            for($i= 0;$i<count($this->asignaturas);$i++){
                if($this->asignaturas[$i]==$asignatura){
                    $comprobacion=true;
                }
            }
            if($comprobacion){
                $this->asignaturas[]=array_diff($this->asignaturas,array($asignatura));
            }

        }

        static function crearAlumnosDeMuestra(){
            $alumnos=[
                [
                    new Alumno(1,"Laura","Martínez","laura.martinez@email.com",22)
                ],
                [
                    new Alumno(2,"Sergio","López","sergio.lopez@email.com",25)
                ],
                [
                    new Alumno(3,"Carlos","García","carlos.garcia@email.com",24)
                ],
                [
                    new Alumno(4,"Marta","Sánchez","marta.sanchez@email.com",23)
                ],
                [
                    new Alumno(5,"Alba","Fernández","alba.fernandez@email.com",21)
                ],
                [
                    new Alumno(6,"David","Rodríguez","david.rodriguez@email.com",26)
                ],
                [
                    new Alumno(7,"Lucía","Jímenez","lucia.jimenez@email.com",20)
                ],
                [
                    new Alumno(8,"Jorge","Pérez","jorge.perez@email.com",22)
                ],
                [
                    new Alumno(9,"Elena","Romero","elena.romero@email.com",23)
                ],
                [
                    new Alumno(10,"Pablo","Torres","pablo.torres@email.com",24)
                ],

            ];
            //una vez llamado a este metodo se crea la matriz de alumnos, pero tenemos que matricular a los alumnos en las asignaturas correspondientes
        }


    }
?>