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
		<input type="text" placeholder="Username" name="uname"><br>
		<input type="password" placeholder="Password" name="uname"><br>
		<input type="text" placeholder="E-mail" name="uname"><br>
		<button type="submit" class="signin">Sign In</button><br>
		<input type="checkbox" class="checkbox" checked="checked"> Remember me
	</div>
</form>