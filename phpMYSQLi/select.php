<?php

//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select all values from empInfo table
$data="SELECT * FROM empInfo";
$val=mysqli_query($con,$data);

while($r=mysqli_fetch_array($val))
{
echo $r['id']." ".$r['name']." ".$r['eid']." ".$r['mob']."<br/>";
}				
?>


<?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select values from empInfo table
$data="SELECT * FROM empInfo";

$val=mysqli_query($con,$data);
echo"<h3> List Function </h3>";			
echo "<table border='1'>";
echo "<tr><th>Emp_id</th><th>Name</th><th>Email</th><th>Mobile</th></tr>";
while(list($id,$name,$eid,$mob)= mysqli_fetch_array($val))
{
 echo "<tr>";	
 echo "<td>".$id."</td>";
 echo "<td>".$name."</td>";
 echo "<td>".$eid."</td>";
 echo "<td>".$mob."</td>";
 echo "</tr>";
}		
echo "</table>";		
?>

