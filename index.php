<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 5;
$b = 3;
$c = 4;
$a *= $a; 
$b *= $b;
$c *= $c; 

if ($a + $b == $c || $a + $c == $b || $b + $c == $a) {
    echo "Zijde 1: $a <br>";
    echo "Zijde 2: $b <br>";
    echo "Zijde 3: $c <br>";

    echo "Dit is een driehoek";
   
} else {
    echo "Zijde 1: $a <br>";
    echo "Zijde 2: $b <br>";
    echo "Zijde 3: $c <br>";
    echo "Niet mogelijk";
}

?>
</body>
</html>