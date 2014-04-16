<html>
<head>
</head>
<body>
  <?php
    if (!@$_COOKIE["mycookie_name"]) {
      ?>
<center>  
  <form action="actionone.php" method="post">
    Name : <input type="text" name="name"/>
    Password : <input type="password" name="password"/>
    <input type="submit" value="login"/>
  </form>
	<?php
	echo"If you do not have an account,please register first!";
	?>
  <form action="actiontwo.php" method="post">
  <input type="submit" value="register"/>
  </form>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</center>
</body>
</html>
