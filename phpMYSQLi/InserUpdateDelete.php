<?php

//connect database 
//$con=mysqli_connect("localhost","root","","demo") or die(mysqli_error());	
$sql=mysqli_connect("localhost","root","","demo") or die(mysqli_error());	
mysqli_close($sql);

// error_reporting(1) function hides all errors Mostly Notice Error

error_reporting(1);

//retrieve email id entered by user and store in $eid. and so on for other values

$eid=$_POST['eid'];
$p=$_POST['pass'];
$m=$_POST['mob'];
$add=$_POST['add'];
$gen=$_POST['g'];
$hobb=$_POST['chlist'];
$h=implode(",",$hobb);
$img=$_FILES["file"]["name"];
$yy=$_POST['yy'];
$mm=$_POST['mm'];
$dd=$_POST['dd'];
$dob=$yy."-".$mm."-".$dd;

//checked whether user clicked on INSERT button

if(isset($_POST['ins']))
{
$sql="INSERT INTO stuinfo values('','$eid','$p','$m','$add','$gen','$h','$img','$dob')";

mysqli_query($sql);
move_uploaded_file($_FILES["file"]["tmp_name"], "userDetails/" . $_FILES["file"]["name"]);
echo "data saved";
}

//checked whether user clicked on display button

if(isset($_POST['disp']))
{
$res=mysqli_query("SELECT * FROM stuinfo");
echo "<table border='1'>";
echo "<tr><th>SutId</th><th>Email</th><th>Password</th><th>Mobile</th><th>Address</th><th>Gender</th>    </tr>"; 

while(list($a,$b,$c,$d,$e,$f)=mysqli_fetch_array($res))
{

echo "<tr>";    echo "<td>".$a."</td>";

echo "<td>".$b."</td>";

echo "<td>".$c."</td>";

echo "<td>".$d."</td>";

echo "<td>".$e."</td>";

echo "<td>".$f."</td>";

echo "<td><a href='db.php?chk=$b'>Edit</a>    <a href='db.php?chkid=$a'>Delete</a></td>";

echo "</tr>";    

}

echo "</table>";
}

// receive  value(value sent  using query string )

@$v=$_GET['chkid'];
@$email=$_GET['chk'];
if(isset($v))
{
mysqli_query("delete from stuinfo where stu_id='$v'");
echo "records deleted";
}

if(isset($_POST['upd']))
{
$p=$_POST['p'];
$m=$_POST['mob'];
$add=$_POST['add'];
echo $email;

$upd="update stuinfo set pass='$p',mobile='$m',address='$add' where email='$email'";

mysqli_query($upd);

echo "updated";

}

if(isset($_GET['chk']))
{
$sql="SELECT * FROM stuinfo where email='$email'";

$res=mysqli_query($sql);

list($a,$b,$c,$d,$e,$f)=mysqli_fetch_array($res);

echo "<table border='1'>";

echo "<form method='post'>";

echo "<tr>";

echo "<td>Password</td>";

echo "<td><input type='password' name='p' value='$c' /></td></tr>";

echo "<tr>";

echo "<td>Mobile</td>";

echo "<td><input type='text' name='mob' value='$d' /></td></tr>";

echo "<tr>";

echo "<td>Address</td>";

echo "<td><textarea name='add'>$e</textarea></td></tr>";

echo "<tr>";

echo "<td colspan='2' align='center'><input type='submit' value='Update infor' name='upd' /></td></tr>";

echo "</form>";

echo "</table>";
}

?>

<html>

<body>

<form  method="post" enctype="multipart/form-data">

<table width="419" border="1"> 
 <tr>    
<td width="173">Enter your email </td>
  <td width="230"><input type="email"  name="eid"/>

</td>  </tr>  <tr> 

   <td>Password</td>  

<td><input type="password"  name="pass"/></td> 

</tr>  <tr>    <td>Mobile</td> 

   <td><input type="text"  name="mob"/></td>

  </tr> 

 <tr>   
 <td>Address</td> 
  
 <td><textarea name="add"></textarea></td> 

 </tr> 
 <tr>  
  <td>Gender</td> 
   <td>
    
Male<input type="radio" value="m" name="g"/>
Female<input type="radio" value="f" name="g"/>
	
</td>
 
 </tr>
 
 <tr>
 
   <td>Hobbies</td>
    <td>	cricket<input type="checkbox" name="chlist[]" value="cricket"/>
singing<input type="checkbox" name="chlist[]" value="singing"/>

reading<input type="checkbox" name="chlist[]" value="reading"/>
	
</td>

  </tr>

  <tr>

    <td>Image</td> 

   <td><input type="file" name="file" id="file" />

 </td>
  </tr>

  <tr> 

   <td>DOB</td> 

   <td>
	<select name="yy">
	<option value="" disabled="disabled" selected="selected">	Year</option>
	<?php
	for($i=1950;$i<=2020;$i++)
	{
	echo "<option value='$i'>$i</option>";
 	}
	?>
			
</select><select name="mm">

<option value="" disabled="disabled" selected="selected">	Month	</option>

	<?php	
	for($i=1;$i<=12;$i++)
		{
		echo "<option value='$i'>$i</option>";
 		}
		?>

	</select>

	<select name="dd">		

<option value="" disabled="disabled" selected="selected">	Date</option>

		<?php
		for($i=1;$i<=31;$i++)
		{
		echo "<option value='$i'>$i</option>";
 		}
		?>
		
</select>	</td>

  </tr>

  	<tr> 
 		<td colspan="2" align="center">	<input type="submit" name="ins" value="Insert"/>			

<input type="submit" name="disp" value="show"/>	

</tr>

</table>

</form>

</body>

</html>
