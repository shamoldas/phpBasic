<?php

echo"<h4>Global</h4>";
echo"\n";
$x = 75;
$y = 25;
function addition() 
{
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
echo"\n";

echo"<h4>Server</h4>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo"<br>";

echo"\n";


echo"\n";

echo"\n";


?>