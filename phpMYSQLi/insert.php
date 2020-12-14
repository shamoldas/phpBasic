


<form>

Enter your name<input type="text" name="name"/><hr/>

Enter your email<input type="text" name="eid"/><hr/>

Enter your mobile<input type="text" name="mob"/><hr/>

<input type="submit" value="INSERT"/><hr/>

</form>

<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());
	  
//get data from html form
$name=$_GET['name'];
$eid=$_GET['eid'];
$mob=$_GET['mob'];
	  
//Insert values in empInfo table with column name 
$query="INSERT INTO empInfo(id, name, email, mobile)  VALUES ('', '$name','$eid','$mob')";
mysqli_query($con,$query);
	
//OR		
//Insert values in empInfo table directly

$query="INSERT INTO empInfo VALUES ('', '$name','$eid','$mob')";
mysqli_query($con,$query);						
?>




<?

/*
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());

//Insert values into empInfo table directly using form
$query="INSERT INTO empInfo VALUES ('', '{$_GET['name']}','{$_GET['eid']}','$_GET['mob']')";
mysqli_query($con,$query);
*/	
?>					



