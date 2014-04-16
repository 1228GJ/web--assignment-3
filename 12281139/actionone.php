<?php
$username = $_POST["name"];
$password = $_POST["password"];
if(isset($username)&&isset($password)!=null)
{
	$con=mysql_connect("localhost","root","root");
	if(!$con)
	{
		die('Can not connect with the database:'.mysql_error());
	}
	else
	{
		mysql_select_db('my_db',$con); 

		$query = sprintf("select * from user where name = '$username' and password = '$password'");
		$result = mysql_query($query);
		$num = mysql_num_rows($result);
		if($num>0)
		{
			$info = mysql_fetch_assoc($result);
			header("location: login.php");
		}
		else 
		{	
			echo"<center><font color=red>Can not login.<br/>Maybe there is something wrong with the name or password!</font></center>";
?>
			<center>
			<form action="index.php" method="post">
			<input type="submit" value="back"/>
			</form>
			</center>
<?php		}
	}
}else
{ 
	header("Location: index.php");
} 
?>

