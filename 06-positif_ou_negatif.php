<?php


function Signe ($nombre){

if ($nombre >0 ){
    return " Positif";
}
elseif ($nombre <0 ){
    return "Negatif";
}
else {
    return "nul";
}
}
$nombre1 = 5;
$nombre2 = -5;
$nombre3 = 0 ;
 
$result1 = Signe($nombre1);
$result2 = Signe($nombre2);
$result3 = Signe($nombre3); 

echo $result1 . "\n";
echo $result2 . "\n";
echo $result3 . "\n";

?>