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
<footer>
<p>copyright - Austen Stone & Max 2016</p>
</footer>
