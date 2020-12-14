 <?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select all values from empInfo table
//$data="SELECT * FROM empInfo ORDER BY id  ASC";
$data="SELECT * FROM users ORDER BY id  ASC";
$val=mysqli_query($con,$data);			
while($r=mysqli_fetch_array($val))
{
echo $r['id']." ".$r['name']." ".$r['email']." ".$r['mobile']."<br/>";
}				
?>

<h3>descending order.</h3><br>

 <?php
//connect database 
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
//select all values from empInfo table
//$data="SELECT * FROM empInfo ORDER BY id  ASC";
$data="SELECT * FROM users ORDER BY id  desc";
$val=mysqli_query($con,$data);			
while($r=mysqli_fetch_array($val))
{
echo $r['id']." ".$r['name']." ".$r['email']." ".$r['mobile']."<br/>";
}				
?>
