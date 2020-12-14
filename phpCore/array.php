<?php


echo"<br>";
echo"<h4>Array</h4>";
$cars = array("Volvo", "BMW", "Toyota");
foreach($cars as $var)
{
	echo $var;
	echo"<br>";
}
echo count($cars);

echo"<br>";
echo"<h4> Indexed Array</h4>";

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) 
	{
	  echo $cars[$x];
	  echo "<br>";
	}
	
echo"<br>";
echo"<h4> Associative Array</h4>";
	
	
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo"<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) 
{
  echo "Name=" . $x . ", Age=" . $x_value;
  echo "<br>";
}

echo"<br>";
echo"<h4> Multi Dimentional  Array</h4>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}


?>