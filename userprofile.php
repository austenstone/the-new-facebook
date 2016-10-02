<?php
include 'pdoconnection.php';
include 'header.php';
session_start();
?>
<body>
<div class="wrapper">
	<div class="cover">
		<div class="cover1" style="background:url(http://www.simplytravel.co.za/gallerylive/Seychelles_Surfing_banner.jpg) no-repeat;background-position: 50%;"></div>
	</div>
	<div class="mainbanner">
	<h2><?php echo "<div style='text-transform: capitalize;display:inline;'> " . $_SESSION['id']  . "</div>" ?></h2>
	</div>
</div>
</body>
<?php $time = date('Y-m-d G:i:s');
echo $time;?>

<?php include 'footer.php' ?>