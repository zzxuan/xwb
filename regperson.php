<?php
session_start();
require_once ("common.php");
require_once ("phplibs/studenthelper.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ('' == $_POST['stdname'] || '' == $_POST['stdgender'] || '' == $_POST['stdnum'] ||
        '' == $_POST['stdschool']||'' == $_POST['stdgrade']||'' == $_POST['address']
        ||'' == $_POST['payaddress']||'' == $_POST['stdphone']||'' == $_POST['stdqq']) {
        echo "<br><font color=\"#FF0000\">请检查输入内容</font></br>";
    } else {
        if(xwbstudent::isnumexist($_POST['stdnum'])){
            echo "<br><font color=\"#FF0000\">账号已存在请重新注册</font></br>";
        }else if(!CheckEmail($_POST['stdnum'])){
            echo "<br><font color=\"#FF0000\">邮箱不合法,请输入常用邮箱!</font></br>";
        }
        else{
            if(xwbstudent::addstudentperson($_POST['stdname'],$_POST['stdnum']
            ,$_POST['stdgender'],$_POST['stdschool'],$_POST['stdgrade']
            ,$_POST['address'],$_POST['payaddress'],$_POST['stdphone']
            ,$_POST['stdqq']
            ))
            {
                echo "<br><font color=\"#FF0000\">注册成功!</font></br>";
                jumpto("stdshow.php?num=".$_POST['stdnum']);
            }
            else{
                echo "<br><font color=\"#FF0000\">注册失败!</font></br>";
            }
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线报名</title>
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
    
    <div class="formtitle"><span>基本信息</span></div>
    <form id="form1" name="form1" method="post">
    <ul class="forminfo">
    <li><label>考生姓名<b>*</b></label><input name="stdname" type="text" class="nameinput" width="150px"/></li>
    <li><label>性别<b>*</b></label>
    
    <div class="vocation">
    <select class="select3" name="stdgender">
    <option>男</option>
    <option>女</option>
    </select>
    </div>

    </li>
    <li><label>邮箱<b>*</b></label><input name="stdnum" type="text" class="nameinput" /><i>作为登录账号,请填写您的常用邮箱</i></li>
    <li><label>电话<b>*</b></label><input name="stdphone" type="text" class="nameinput" /></li>
    <li><label>QQ号<b>*</b></label><input name="stdqq" type="text" class="nameinput" /></li>
    <li><label>就读学校<b>*</b></label><input name="stdschool" type="text" class="dfinput" /><i>填写学校全称</i></li>
    <li><label>所在年级<b>*</b></label>
        
    <div class="vocation">
    <select class="select2" name="stdgrade">
    <option>四年级</option>
    <option>五年级</option>
    <option>六年级</option>
    <option>初一年级</option>
    <option>初二年级</option>
    </select>
    </div>
    
    </li>
    <li><label>联系地址<b>*</b></label><input name="address" type="text" class="dfinput" /></li>
    <li><label>缴费地点<b>*</b></label>
    
    <div class="vocation">
    <select class="select1" name="payaddress">
    <option>希望杯组委会</option>
    </select>
    </div>
    </li>
    
    <li><label>&nbsp;</label><input id="regsubbtn" name="" type="submit" class="btn" value="提交信息"/></li>
    </ul>
    </form>
    
    </div>
</body>
</html>
