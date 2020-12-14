<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());	
mysqli_close($con);
?>

<?php


extract($_POST);

if(isset($_POST['reg']))
{
if($_POST['name']=="" || $_POST['pwd']=="" $_POST['mobile']=="")
{	
$err="fill your user name first";	
}
else
{
$r=mysqli_query($con,"SELECT * FROM users where name='{$_POST['name']}'");
$t=mysqli_num_rows($r);
if($t)
{
$err="user already exists choose another";
}
else
{
mysqli_query($con,"INSERT INTO users values('','{$_POST['name']}','{$_POST['pwd']}','{$_POST['mobile']}','{$_POST['address']}')");
header('');	
}
}
}
?>

<form method="post" enctype="multipart/form-data">
<table width="438" border="5" align="center">
  <font color="#FF0000"><?php echo $err; ?></font>
  <tr>
    <td width="204" height="47">Enter Your User Name </td>
    <td width="218"><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Password </td>
    <td><input type="password" name="pwd"/></td>
  </tr>
  <tr>
    <td height="47">Enter Your Mobile </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  <tr>
    <td height="33">Select Your Resident </td>
    <td>
		Home Country<input type="radio" name="address" value="Home"/>
		Abroad<input type="radio" name="address" value="Abroad"/>	</td>
  </tr>
  <tr>
    <td align="center" colspan="2">
	<input type="submit" name="reg" value="Register"/>
	<input type="reset"  value="Reset"/>	</td>
  </tr>
</table>
</form>