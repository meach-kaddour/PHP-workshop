<!DOCTYPE html>
<html>
<head>
<title><?php? echo "calculer votre IMC"></title></head>
<body>



<?php
$name="kaddour";
$IMC= imc(64,172);
$IMC=$IMC;
function imc($wieghtkg,$heightcm)
{
    $heightm=(float)$heightcm/100;
    $indice=$wieghtkg/($heightm*$heightm);
    return $indice;
}

echo "your Imc is"." ".$IMC;

?>

</body>
</html>