<?php
class Asignatura
{
    private $id = 0;
    private $nombre;
    private $creditos;

    function __construct($id, $nombre, $creditos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    static function crearAsignaturasDeMuestra()
    {
        $asignaturas = [

            new Asignatura(1, "DWES", 7),

            new Asignatura(2, "DWEC", 6),

            new Asignatura(3, "DIW", 4),

            new Asignatura(4, "DAW", 4),
        ];
        return $asignaturas;
    }

    function __tostring(){
        return "Nombre: ".$this->nombre.", Créditos: ".$this->creditos;
    }
}
