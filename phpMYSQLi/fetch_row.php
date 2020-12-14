<?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());	  
//select values from empInfo table
$sql = "SELECT * from empInfo";
$result = mysqli_query($con,$sql);
print_r(mysqli_fetch_row($result));	
mysqli_close($con);
?>


<?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select all values from empInfo table
$data="SELECT * FROM empInfo";
$val=mysqli_query($con,$data);			
while($r=mysqli_fetch_row($val))
{
echo $r[0]." ".$r[1]." ".$r[2]." ".$r[3]."<br/>";
}				
?>