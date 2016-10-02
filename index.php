<?php
include 'pdoconnection.php';
include 'header.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
?>
<body>
    <h2><?php echo "<p>Signed in as " . $_SESSION['id']  . "!</p>" ?></h2>

</body>

<?php include 'footer.php' ?>