<?php
session_start();

include('class.login.php');

$login = new Login();

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>Sparx Computers - Login</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/default.css"/>
<!--[if lte IE 6]>
<script type="text/javascript" src="../js/supersleight-min.js"></script>
<![endif]-->
</head>
<body class="loginpage">
<div id="topbar">
	<div id="minilogo"><a href="http://dev.amarant.co.vu">&nbsp;</a></div>
	<?php if($login->isLoggedIn()) {?>
	<div id="logout" align="right">
		<a href="logout.php">Logout</a>
	</div>
	<?php } ?>
</div>
<div id="lpage">
  <div id="lbox" class="panel panel-small">
	  <?php if($login->isLoggedIn()) {?>
	  Testing The Logged-in area. Success!
	<?php }else{ ?>
	  Please <a href="login.php">login</a> to view member's only area.
	<?php } ?>
  </div>
</div>
</body>
