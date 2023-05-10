<?php

$variable = 10;

$name = "Cosme Fulanito";
$age = 20;
$height = "1.80";

echo "<h1>PHP Test Dump</h1><br>";
echo "My name is: " . $name . ", I have " . $age . " years old and my height is: " . $height . " Meters";

define("NAME","COSME FULANITO");
echo "Test Constant: " . NAME ;

echo "<br><br>";

var_dump($name);

echo "<br><br>";


$i = 1;
switch ($i) {
    case '0':
        echo "value0";
        break;

    case '1':
        echo "value1";
        break;

    case '2':
        echo "value2";
        break;
    
    default:
        echo "noELection";
        break;
}

?>