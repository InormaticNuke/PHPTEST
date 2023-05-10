<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPHTMLTEST</title>
</head>
<body>

    <form action="assign.php" method="POST">

    <input type="text" name="Value1" id="001">
    <br>
    <input type="text" name="Value2" id="002">
    <br>
    <input type="submit" name="add01" value="add">
    <input type="submit" name="sus01" value="sus">
    <input type="submit" name="mult01" value="mult">
    <input type="submit" name="div01" value="divide">

    <br><br><br><br>

    </form>

    <br><br>

    <form action="assign.php" method="POST2">

    <input type="button" value="red">
    <input type="button" value="green">
    <input type="button" value="blue">
    <input type="button" value="yellow">
    <input type="button" value="pink">

    </form>

    <br><br>
    
</body>
</html>

<?php

/*var_dump($_POST);*/

if ($_POST) {

    $value1 = $_POST["Value1"];
    $value2 = $_POST["Value2"];

    if (isset($_POST['add01'])) {

        $TOTAL = $value1+$value2;
    }

    if (isset($_POST['sus01'])) {

        $TOTAL = $value1-$value2;
    }

    if (isset($_POST['mult01'])) {

        $TOTAL = $value1*$value2;
    }

    if (isset($_POST['div01'])) {

        $TOTAL = $value1/$value2;
    }


    echo $TOTAL;

    echo "<br>";

    if ($value1>=$value2) {
        echo $value1 ." Is bigger than ".$value2;
    }

    else {
        echo $value2. " Is bigger than ". $value1;
    }

}

?>