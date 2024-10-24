<?php
class TriangleGenerator
{
    public static function generateTriangle($altura)
    {
        if ($altura < 0) {
            return "";
        }
        $triangulo = "";
        for ($i = 1; $i <= $altura; $i++) {
            $espacios = $altura - $i;
            $estrellas = 2 * $i - 1;
            //el metodo str_repeat repite un numero de veces
            $linea = str_repeat('&nbsp;', $espacios) . str_repeat('*', $estrellas);
            $triangulo .= "<p>$linea</p>\n";
        }

        return $triangulo;
    }
}
?>