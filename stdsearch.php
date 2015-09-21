<?php
session_start();
require_once ("common.php");
require_once ("phplibs/studenthelper.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( '' == $_POST['stdnum'] ) {
        echo "<br><font color=\"#FF0000\">请检查输入内容</font></br>";
    } else {
        if(xwbstudent::isnumexist($_POST['stdnum'])){
            jumpto("stdshow.php?num=".$_POST['stdnum']);
        }
        else{
            echo "<br><font color=\"#FF0000\">账号不存在</font></br>";
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生查询</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="js/select-ui.min.js"></script>


<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
<script type="text/javascript">

function checkboxclick()
{
 var btn = document.getElementById('regsubbtn');
 btn.style.background="#4154e2"; 
 btn.disabled = false;
}

</script>
<style type="text/css"> 
    .divwstyle
    {
        margin:10px 10px 10px 85px;
        border:1px solid #99cccc;
    }
</style>
</head>

</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">在线报名</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>信息查询</span></div>
    <form id="form1" name="form1" method="post">
    <ul class="forminfo">
    
    <li><label>QQ号<b>*</b></label><input name="stdnum" type="text" class="nameinput" /><i>请输入注册的QQ账号</i></li>

    <li><label>&nbsp;</label><input id="regsubbtn" name="" type="submit" class="btn" value="查询"/></li>
    </ul>
    </form>
    
    </div>
</body>
</html>
