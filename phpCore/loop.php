<?php

echo"<h4>While Loop</h3>";
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo"<br>";
echo"<h4>Do While Loop</h3>";

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo"<br>";


echo"<h4>For Loop</h3>";

for ($x = 0; $x <= 10; $x++) 
{
  echo "The number is: $x <br>";
}
echo"<br>";


echo"<h4>For Each Loop</h3>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) 
		{
		  echo "$value <br>";
		}
echo"<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val)
		{
		  echo "$x = $val<br>";
		}
echo"<br>";
echo"<h4>Break/Continue for Loop</h3>";


echo"<h5>Break</h5>";
for ($x = 0; $x < 10; $x++) 
		{
		  if ($x == 4) {
			break;
		  }
		  echo "The number is: $x <br>";
		}
echo"<br>";

echo"<h5>Continue</h5>";
$x = 0;

while($x < 10) 
		{
		  if ($x == 4) {
			break;
		  }
		  echo "The number is: $x <br>";
		  $x++;
		}
?>