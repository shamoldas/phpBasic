<?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());	
//select table 
//$sql = "SELECT * from empInfo whre email='shamol'";
$sql = "SELECT * from users where email='shamol@gmail.com'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_object($result);
echo $row->name;
mysqli_close($con);
?>

<h3> Break Point</h3><br>
 <?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select all values from empInfo table
$data="SELECT * FROM users";
$val=mysqli_query($con,$data);			
while($row=mysqli_fetch_object($val))
{
echo $row->id." ".$row->name." ".$row->email." ".$row->mobile."<br/>";
}		
mysqli_close($con);	
?>