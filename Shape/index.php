<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require 'Shape.php';
require 'Circle.php';
require 'Cylinder.php';
require 'Rectangle.php';
require 'Square.php';

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculatedArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatedPerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculatedArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatedPerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculatedArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatedPerimeter() . '<br />';

$square = new Square('Square 01', 4);
echo 'Square area: ' . $square->calculatedArea() . '<br />';
echo 'Square perimeter: ' . $square->calculatedPerimeter() . '<br />';
?>
</body>
</html>
