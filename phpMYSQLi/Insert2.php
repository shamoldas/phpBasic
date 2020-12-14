<form>

Enter your name<input type="text" name="name"/><hr/>

Enter your email<input type="text" name="eid"/><hr/>

Enter your mobile<input type="text" name="mob"/><hr/>

<input type="submit" value="INSERT"/><hr/>

</form>
<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());

//Insert values into empInfo table directly using form
$query="INSERT INTO empInfo VALUES ('', '{$_GET['name']}','{$_GET['eid']}','$_GET['mob']')";
mysqli_query($con,$query);						
?>