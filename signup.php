<?php
require_once 'pdoconnection.php';
require_once 'header.php';



if(isset($_POST['signup'])){

    $username = $_POST['uname'];
    $password = $_POST['upassword'];
    $email = $_POST['uemail'];

    $checkusername = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' LIMIT 1");
    if ($checkusername -> num_rows > 0){
        echo "<h1><center>Username already taken</center></h1>";
    }else{
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $insert = mysqli_query($conn, "INSERT INTO users (username, password, email)
        VALUES ('$username', '$password_hash', '$email')");
        if ($insert) {
            echo "<h1><center>Successful Registration</center></h1>";
            echo "<h1><center>Go to Log In page to sign in</center></h1>";
        } else {
            printf("Error: %s\n", mysqli_error($conn));
        }
    }
}



 ?>
<!DOCTYPE html>

<div class="logincontainer">
<form action="signup.php" class="form1" method="post" id="loginform">
	<div class="imgcontainer">
	<div>
		<img src="">
	</div>
		<input type="text" placeholder="Username" name="uname" required><br>
		<input type="password" placeholder="Password" name="upassword" required><br>
		<input type="text" placeholder="E-mail" name="uemail" required><br>
		<button type="submit" class="signin"><span>Register</span></button><br><br><br><br>
</form>
	<a href="login.php">Already have an account?<br><div class="signin"><span>Log In</span></div><br></a>
</div>
