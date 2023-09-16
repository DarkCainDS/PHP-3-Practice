<?php 

$palabras = array("sol", "luna" , "cielo", "luz", "estrellas", "lluvia");

$form = "<form action='analisis.php'>";
$formClose = "</form>";
$button = "<button type='submit'>Send</button>";


for($i =0;$i < count($palabras); $i++){
    $form .= "La palabra: " . str_shuffle($palabras[$i]) . " " . 
    "<input type='text' name='palabra" . $i . "'/>" . "<br/>";
};

echo $form.$button.$formClose;

?>