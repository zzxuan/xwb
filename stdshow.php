<?php
session_start();
require_once ("common.php");
require_once ("phplibs/studenthelper.php");

$stdinfo = null;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET['num'])) {
        echo "<br><font color=\"#FF0000\">参数错误</font></br>";
        exit();
    } else {
        $stdinfo = xwbstudent::getstdbynum($_GET['num']);
    }
}

if ($stdinfo == null) {
    echo "<br><font color=\"#FF0000\">参数错误</font></br>";
    exit();
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
    <ul class="forminfo">
    <li><label>考生姓名<b>*</b></label><label><nobr ><?php echo $stdinfo->stdname; ?></nobr></label></li>
    <li><label>性别<b>*</b></label><label><nobr ><?php echo $stdinfo->stdgender; ?></nobr></label></li>
    <li><label>邮箱(账号)<b>*</b></label><label><nobr ><?php echo $stdinfo->stdnum; ?></nobr></label></li>
    <li><label>就读学校<b>*</b></label><label><nobr ><?php echo $stdinfo->stdschool; ?></nobr></label></li>
    <li><label>所在年级<b>*</b></label><label><nobr ><?php echo $stdinfo->stdgrade; ?></nobr></label></li>
    <li><label>缴费地点<b>*</b></label><label><nobr ><?php echo $stdinfo->
stdpayaddress; ?></nobr></label></li>
    <?php
if ($stdinfo->stdtype != 0) {
    echo "<li><label>联系地址<b>*</b></label><label><nobr >" . $stdinfo->stdaddress .
        "</nobr></label></li>";
    echo "<li><label>电话<b>*</b></label><label><nobr >" . $stdinfo->stdphone .
        "</nobr></label></li>";
    echo "<li><label>QQ号<b>*</b></label><label><nobr >" . $stdinfo->stdqq .
        "</nobr></label></li>";
}
?>
    
    <li><label>注册时间<b>*</b></label><label><nobr ><?php echo $stdinfo->
createtime; ?></nobr></label></li>
    </ul>
    
    </div>
</body>
</html>
