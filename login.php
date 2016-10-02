<?php
require_once 'pdoconnection.php';
require_once 'header.php';
 ?>
<form action="login.php" method="post" id="loginform">
	<div class="imgcontainer">
	<div>
		<img src="">
	</div>
	<div class="logincontainer">
		<input type="text" placeholder="Username" name="uname" required><br>
		<input type="password" placeholder="Password" name="uname" required><br>
		<input type="text" placeholder="E-mail" name="uname" required><br>
		<button type="submit" class="signin"><span>Sign In</span></button><br>
		<input type="checkbox" class="checkbox" checked="checked">Remember me<br><br><br>
	</form>
	<a href="login.php">Don't have an account Yet?<br><button type="submit" class="signin"><span>Register</span></button><br></a>
</div>