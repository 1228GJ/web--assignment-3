<?php
@$username = $_POST["name"];
@$password = $_POST["password"];
@$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

// do authentication here

setcookie("mycookie_name", $username);
setcookie("count", ++$count);

?>
<html>
<head>
<title>
Welcome!
</title>
</head>
<body>
<center>
Welcome <? echo @$_POST["name"] ?>!<br/>
You have visited the site <? echo $count ?> times.
<a href="logout.php">logout</a>
</center>
</body>
</html>
