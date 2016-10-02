<?php
require_once 'pdoconnection.php';
 ?>
<form action="login.php" method="_POST">
	<div class="imgcontainer">
	<div>
		<img src="">
	</div>
	<div class="logincontainer">
		<p>User Name</p>
		<input type="text" placeholder="enter username" name="uname">
		<p>Password</p>
		<input type="password" placeholder="enter username" name="uname">
		<p>Email Adress</p>
		<input type="text" placeholder="enter username" name="uname">
		<button type="submit">Login</button>
		<input type="checkbox" checked="checked"> Remember me
	</div>
</form>