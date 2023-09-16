<?php 
print_r($_REQUEST);

$palabras = array("sol", "luna" , "cielo", "luz", "estrellas", "lluvia");
/*
if($_REQUEST["palabra0"] == $palabras[0]){
    echo "<br/> La palabra ingresada es correcta <br/>";
}else{
    echo "La palabra es erronea" . "lo correcto es " . $palabras[0];
};
if($_REQUEST["palabra1"] == $palabras[1]){
    echo "La palabra ingresada es correcta <br/>";
}else{
    echo "La palabra es erronea" . "lo correcto es " . $palabras[1];
};
if($_REQUEST["palabra2"] == $palabras[2]){
    echo "La palabra ingresada es correcta <br/>" ;
}else{
    echo "La palabra es erronea" . "lo correcto es " . $palabras[2];
};
*/

for($i =0; $i < count($palabras); $i++){
    if($_REQUEST["palabra".$i] == $palabras[$i]){
        echo "<br>" ."la palabra es correcta" . "<br>";
    }else{
        echo "La palabra es incorrecta, La palabra correcta es " . $palabras[$i] . "<br>";
    }
}
?> 