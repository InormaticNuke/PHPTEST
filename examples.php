<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPHTMLTEST</title>
</head>
<body>

    <form action="examples.php" method="POST">

    <input type="text" name="Value1" id="001">
    <br>
    <input type="text" name="Value2" id="002">
    <br>
    <input type="submit" value="calc">

    </form>
    
</body>
</html>

<?php

if ($_POST) {

    $value1 = $_POST["Value1"];
    $value2 = $_POST["Value2"];

    $TOTAL = $value1+$value2;

    echo $TOTAL;
}


?>