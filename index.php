<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="application-name" content="Synoportal">
	<meta name="description" content="Web portal for the Synology NAS">
	<meta name="author" content="Timoline">
	
	<!-- Mobile settings -->
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	
	<!-- css -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">	
	<link href="assets/css/customstyle.css" rel="stylesheet" type="text/css">	
	<link href="assets/css/mobilestyle.css" rel="stylesheet" type="text/css">	
	
	<!-- js -->
	<script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>

	<!-- fav and touch icons -->
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">	
</head>
<body>

<?php 
include_once ("config.php");
include_once ("helpers/database.class.php");
include_once ("helpers/functions.php");
include_once ("helpers/paginator.class.php");

$pagelink 	= (isset($_GET['pagelink'])) ? $_GET['pagelink'] : $config["defaultpage"];
?>

<title><?php echo $config["sitename"] ;?> - <?php echo ucfirst($pagelink); ?></title>

<?php include_once("header.php"); ?>
		
<div class="container">
    <div id="overall_container">
        <div id="menu_container">
            <div id="leftbox"><?php include_once("menu/menu.php"); ?></div>
            <div id="rightbox"><?php include_once (getPageurl($pagelink)); ?></div>
        </div>
    </div>
</div>

<div class="footer">
	<?php include_once ("footer.php"); ?>
</div>
</body>
</html>