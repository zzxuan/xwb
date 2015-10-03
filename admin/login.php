<?php
session_start();
require_once ("../common.php");
require_once("../phplibs/userhelper.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginuser = xwbuser::userlogin($_POST['user'],$_POST['pass']);
    if($loginuser == null){
        echo "登录失败,请重新输入";
    }
    else{
        //登录成功
        $_SESSION['loginuser'] = $loginuser;
        jumpto("main.php");
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>希望杯后台登录</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/structure.css">
</head>

<body>
<form class="box login" name="form1" id="form1" method="post">
	<fieldset class="boxBody">
	  <label>用户名</label>
	  <input name="user" type="text" tabindex="1" placeholder="请输入用户名" required>
	  <label>密码</label>
	  <input name="pass" type="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="登录" tabindex="4">
	</footer>
</form>
<footer id="main">
  希望杯后台登录页面
</footer>
</body>
</html>
