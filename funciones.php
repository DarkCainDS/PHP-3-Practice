<?php 

$nombre = "Camila";
$apellido = "Rojas";

//echo $nombre . " " . $apellido;

function concatenar($nombre,$apellido){
    return $nombre . " " . $apellido;
}
echo concatenar("Camila", "Rojas");

function sumar($numeros){
    $suma = 0;
    for($i =0;$i < 4; $i++){
        $suma = $suma +$numeros[$i];
    }
    echo "\n La suma de los valores del array es $suma \n";
}

$numeros = array(1,2,3,4);
sumar($numeros);

$nombres = array("ana","juan","camila"); //, 2
var_dump(is_array($nombres));


function getFate($option)
{
    switch($option){
        case 1:
            $fate = "Serás millonario!!";
            break;
        case 2:
            $fate = "Encontrarás el amor de tu vida!";
            break;
        case 3:
            $fate = "Vivirás 200 años!";
            break;
        case 4:
            $fate = "Podrás leer la mente!";
            break;
        case 5:
            $fate = "Mueres en un accidente repentino!";
            break;
    }
    return $fate;
}

$option = rand(1,5);
$fate = getFate($option);
echo "Tu futuro es: " . $fate;
?>