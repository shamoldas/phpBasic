<?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select values from empInfo table where column=value


//$data="SELECT * FROM empInfo where id=7";
$data="SELECT * FROM empInfo";



//$data="SELECT * FROM users where emp_id='shamol'";
$val=mysqli_query($con,$data);			
echo "<table border='1'>";
echo "<tr><th>Emp_id</th><th>Name</th><th>Email</th><th>Mobile</th></tr>";

while(list($id,$name,$eid,$mob) =  mysqli_fetch_array($val))
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