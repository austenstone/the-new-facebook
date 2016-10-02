<?php
require_once 'pdoconnection.php';



if(isset($_POST['signup'])){

    $username = $_POST['uname'];
    $password = $_POST['upassword'];
    $email = $_POST['uemail'];
    echo $username;
    echo $password;
    echo $email;

    $insert = mysqli_query($conn, "INSERT INTO users (username, password, email)
    VALUES ('$username', '$password', '$email')");

    if ($insert) {
        echo "<h1><center>Successful Registration</center></h1>";
    } else {
        printf("Error: %s\n", mysqli_error($conn));
    }
}



 ?>
<form action="signup.php" method="post">
	<div class="imgcontainer">
	<div>
		<img src="">
	</div>
	<div class="logincontainer">
		<p>User Name</p>
		<input type="text" placeholder="enter username" name="uname">
		<p>Password</p>
		<input type="password" placeholder="enter password" name="upassword">
		<p>Email Adress</p>
		<input type="text" placeholder="enter email" name="uemail">
		<button type="submit" name="signup">Signup</button>
		<input type="checkbox" checked="checked"> Remember me
	</div>
</form>
