<?php
include 'pdoconnection.php';
include 'header.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}

if (isset($_POST['status'])){
    $username = $_SESSION['id'];
    $status_update = $_POST['status_update'];
    $insert1 = mysqli_query($conn, "INSERT INTO status (username, status_update)
    VALUES ('$username', '$status_update')");
}

?>
<body>
    <h2><?php echo "<p>Signed in as " . $_SESSION['id']  . ".</p>" ?></h2>
    	<div>
    	<form action="index.php" method="post">
    		<h3>Update Your Status</h3>
            <textarea name="status_update" cols="40" rows="5"></textarea>
    		<button type="submit" name="status"><span>Update</span></button><br><br><br>
    	</form>
    </div>


</body>

<?php include 'footer.php' ?>
