 <?php
//database connectivity
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select  values from empInfo table
//$sql = "SELECT * from empInfo WHERE email='devesh@gmail.com'";
$sql = "SELECT * from users ";
$result = mysqli_query($con,$sql);
print_r(mysqli_fetch_array($result));
mysqli_close($con);
?>


<?php

echo"<h3> Fitch_Array_Table Form </h3>";
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());		  
//select all values from empInfo table
$data="SELECT * FROM users";
$val=mysqli_query($con,$data);
while($r=mysqli_fetch_array($val))
{
echo $r['id']." ".$r['name']." ".$r['email']." ".$r['mobile']."<br/>";
}				
?>