<?php
$x1 = 10;
$x2 = 10.365;
$x3 = "ShamolDas";

echo "<br>";
print $x1;
echo "<br>";
var_dump($x1);

echo "<br>";
print $x2;
echo "<br>";
var_dump($x2);
echo "<br>";
var_dump($x3);
echo "<br>";
print $x3;
echo "<br>";
var_dump($x3);
echo"<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo"<h3>Car List</h3>";
echo"<br>";
for($i=0;$i<3;$i++)
{
	print $cars[$i];
	print "<br>";
}

echo"<br>";
class Car {
  function Car() {
    $this->model = "VW";
  }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;



?>