<?php

$numbers = array(4, 6, 2, 22, 11);
$arrlength = count($numbers);
echo"<h4>Before Sort</h4>";
for($x = 0; $x < $arrlength; $x++) 
	{
	  echo $numbers[$x]."  ";
	}
sort($numbers);
echo"<h4>Before Sort</h4>";
for($x = 0; $x < $arrlength; $x++) 
	{
	  echo $numbers[$x]."  ";
	  //echo "<br>";
	}
	
echo"<br>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$arrlength = count($age);
echo"<h4>Ascending Order Before Sort</h4>";
foreach($age as $x => $x_value) 
{
  echo "Name=" . $x . ", Age=" . $x_value;
  echo "<br>";
}

ksort($age);


echo"<h4>Ascending Order After Sort</h4>";
foreach($age as $x => $x_value) 
{
  echo "Name=" . $x . ", Age=" . $x_value;
  echo "<br>";
}

arsort($age);
echo"<h4>Decending Order After Sort</h4>";
foreach($age as $x => $x_value) 
{
  echo "Name=" . $x . ", Age=" . $x_value;
  echo "<br>";
}

?>