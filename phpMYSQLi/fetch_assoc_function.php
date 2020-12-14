<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select values from empInfo table
//$sql = "SELECT * from empInfo WHERE email='devesh@gmail.com'";
$sql = "SELECT * from empinfo";
$result = mysqli_query($con,$sql);
print_r(mysqli_fetch_assoc($result));	
mysqli_close($con); 
?>

 <?php
 echo"<h3> Fitch_Array_assoc_function </h3>";
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());

//select all values from empInfo table
$data="SELECT * FROM users";
$val=mysqli_query($con,$data);			
while($r=mysqli_fetch_assoc($val))
{
echo $r['id']." ".$r['name']." ".$r['email']." ".$r['mobile']."<br/>";
}				
?>