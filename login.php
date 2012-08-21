<?php
session_start();


if(isset($_POST['login']))
{
  include('class.login.php');

  $login = new Login();

  if($login->isLoggedIn())
     header('location: index.php');
  else
    $login->showErrors();

}
$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
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
</div>
<div id="lpage">
  <div id="lbox" class="panel panel-small">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <fieldset>
      <div class="field">
        <label>Email&nbsp;</label>
        <input class="text" id="login_user_email" name="username" size="43" type="text" />
      </div>
      <div class="field">
        <label>Password&nbsp;</label>
        <input class="text password" id="login_user_password" name="password" size="43" type="password" />
      </div>
      </fieldset>
      <fieldset class="submit">
      <p>
      <a href="/signup">Sign Up</a> ~ or ~ <a href="/auth/reset_password">Reset Password</a>
      </p>
	  <input type="submit" name="login" value="Log In" class="submit" />
      </fieldset>
	  <input type="hidden" name="token" value="<?php echo $token;?>" />
    </form>
  </div>
</div>
</body>