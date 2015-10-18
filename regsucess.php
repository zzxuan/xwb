<?php
session_start();
require_once ("common.php");
require_once ("phplibs/studenthelper.php");

$getnum = null;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET['num'])) {
        echo "<br><font color=\"#FF0000\">参数错误</font></br>";
        exit();
    } else {
        $getnum = $_GET['num'];
    }
}

if ($getnum == null) {
    echo "<br><font color=\"#FF0000\">参数错误</font></br>";
    exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui">
<title>注册成功</title>



</head>

</head>

<body >
    <br><font color="#FF0000">注册成功! 2秒后跳转到显示页面</font></br>
    <script type="text/javascript">
    setTimeout(function(){
    document.write("<br><font color=\"#FF0000\">注册成功! 1秒后跳转到显示页面</font></br>");
    },1000);
    setTimeout(function(){
    <?php
        echo "document.location=\"stdshow.php?num=$getnum\"";
    ?>
    },2000);
    </script>

</body>
</html>
