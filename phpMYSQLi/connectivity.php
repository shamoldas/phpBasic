

<?php

//mysqli connectivity
$connect= new mysqli("localhost","root","","demo") or die("ERROR:could not connect to the database!!!!");

extract($_POST);

if(isset($save))
{

	$query="insert into users values('','$n','$e','$m','$add')";

	if($connect->query($query))

	{

	echo 'congrates!! data saved';

	}

	else

	{

	echo 'data not saved '.$connect->error;

	}

}

//display data
if(isset($disp))
{

	$query="select * from users";

	$result=$connect->query($query);

	echo "<table border=1>";

	echo "<tr><th>Name</th><th>Email</th><th>Mobile<
/th><th>Address</th></tr>";

	while($row=$result->fetch_array())

		{

		echo "<tr>";

		echo "<td>".$row['name']."</td>";

		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";

		echo "<td>".$row['address']."</td>";

		echo "</tr>";

		}

	echo "</table>";	

}

?>





<style>

input,textarea{width:200px}

input[type=submit]{width:100px}

</style>

<form method="post">

<table width="218" border="0">

  <tr>

    <td width="208"><input type="text" name="n" placeholder="Enter your name"/></td>

  </tr>

  <tr>

    <td><input type="text" name="e" placeholder="Enter your email"/></td>

  </tr>

  <tr>

    <td><input type="text" name="m" placeholder="Enter your mobile"/></td>

  </tr>

  <tr>

    <td><textarea name="add" placeholder="Enter your address"></textarea></td>

  </tr>

  <tr>

    <td>

	<input type="submit" name="save" value="Save Data"/>

	<input type="submit" name="disp" value="Display Data"/>

	</td>

  </tr>

</table>

</form>