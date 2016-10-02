<?php
include 'pdoconnection.php';
include 'header.php';

session_start();

$username = $_SESSION['id'];
$password = $_POST['upassword'];
$uemail = $_POST['uemail'];

$newedit = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
$row = mysqli_fetch_array($newedit);

if (isset($_POST['signup'])){
	echo "<h1><center>Your edit was sucessfully made. Please Refresh.</centerd></h1>";
	$finished = mysqli_query($conn, "UPDATE users SET email = '$uemail' WHERE username = '$username'");
}

?>

<body>
<div class="logincontainer">
<form action="editprofile.php" class="form1" method="post" id="loginform">
		<h1>Edit Your Profile</h1>
		<div class="imgcontainer">
		<div>
			<img src="">
		</div>
			<input type="text" placeholder="username" name="uname" value="<?php echo $row["username"]; ?>" required><br>
			<input type="password" placeholder="password>" name="upassword" value="<?php echo $row["password"]; ?>" required><br>
			<input type="text" placeholder="email" name="uemail" value="<?php echo $row["email"]; ?>" required><br>
			<button type="submit" name="signup" class="signin"><span>Submit Changes</span></button><br><br><br>
</form>
</div>
</div>
</body>

<?php include 'footer.php' ?>