<?php
include 'pdoconnection.php';
include 'header.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
?>
<body>

</body>

<?php include 'footer.php' ?>