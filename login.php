<?php
require_once 'pdoconnection.php';
require_once 'header.php';
 ?>
<div class="logincontainer">
<form class="form1" action="login.php" method="post" id="loginform">
	<div class="imgcontainer">
	<div>
		<img src="">
	</div>
		<input type="text" placeholder="Username or E-mail" name="uname" required><br>
		<input type="password" placeholder="Password" name="upassword" required><br>
		<input type="text" placeholder="E-mail" name="uemail" required><br>
		<button type="submit" class="signin"><span>Sign In</span></button><br>
		<input type="checkbox" class="checkbox" checked="checked">Remember me<br><br><br>
	</form>
	<a href="signup.php">Don't have an account Yet?<br><div class="signin"><span>Register</span></div><br></a>
</div>