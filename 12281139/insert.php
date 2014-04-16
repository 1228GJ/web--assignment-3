

<?php

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

mysql_query("INSERT INTO user(name,password) VALUES('$_POST[name]','$_POST[password]')") or die(mysql_error);

echo "1 record added";
header("Location: index.php");

?>