<?php

$val1 =$_POST['val1'];
$val2 =$_POST['val2'];
$tipo =$_POST['tipo'];

switch ($tipo)
{
    case 'Somar': $resultado = $val1 + $val2; break;
    case 'Subtrair': $resultado = $val1 - $val2; break;
    case 'Multiplicar': $resultado = $val1 * $val2; break;
    case 'Dividir': $resultado = $val1 / $val2; break;
}

echo $resultado;

?>