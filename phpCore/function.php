<?php declare(strict_types=1); 
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

echo"<br>";
echo"<h4>Function Argument</h4>";

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

echo"<br>";

function familyNameState($fname, $year) 
{
  echo "$fname Refsnes. Born in $year <br>";
}

familyNameState("Hege", "1975");
familyNameState("Stale", "1978");
familyNameState("Kai Jim", "1983");

echo"<br>";

echo"<br>";
echo"<h4> Loosely Typed Language</h4>";

function addNumbersFun(int $a, int $b) 
{
  return $a + $b;
}
echo addNumbersFun(5,10);
echo"<br>";

echo"<br>";
echo"<h4>Function Argument Return</h4>";

function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo"<br>";
echo"<h4>Function Argument Passing Return</h4>";

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;






?>