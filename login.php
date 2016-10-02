<?php
require_once 'pdoconnection.php';
require_once 'header.php';

if (isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['upassword'];
    $checkifuserexists = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' LIMIT 1");

    if ($checkifuserexists -> num_rows > 0){
        echo "<h1><center>Found a user</center></h1>";
        $row = mysqli_fetch_array($checkifuserexists);
        $hashed_password = $row['password'];
        echo $hashed_password;
        echo "<h1><center>Password check</center></h1>";
        if (password_verify($password, $hashed_password)){
            header('Location: index.php');
        }else{
            echo "<h1><center>Wrong log in information! Try again!</center></h1>";
        }
    }
}


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
		<button type="submit" name="login" class="signin"><span>Sign In</span></button><br>
		<input type="checkbox" class="checkbox" checked="checked">Remember me<br><br><br>
	</form>
	<a href="signup.php">Don't have an account Yet?<br><div class="signin"><span>Register</span></div><br></a>
</div>
