<?php
session_start();
require_once ("common.php");
require_once ("phplibs/studenthelper.php");

$stdname = '';
$stdgender = '';
$stdnum = '';
$stdschool = '';
$stdgrade = '';
$payaddress = '';
$stdphone = '';
$stdqq = '';
$address = '';

$err = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $stdname = $_POST['stdname'] ;
    $stdgender = $_POST['stdgender'] ;
    $stdnum = $_POST['stdnum'] ;
    $stdschool = $_POST['stdschool'] ;
    $stdgrade = $_POST['stdgrade'] ;
    $payaddress = $_POST['payaddress'] ;
    $stdphone = $_POST['stdphone'] ;
    $stdqq = $_POST['stdqq'] ;
    $address = $_POST['address'];
    
    if ('' == $_POST['stdname'] || '' == $_POST['stdgender'] || '' == $_POST['stdnum'] ||
        '' == $_POST['stdschool']||'' == $_POST['stdgrade']||'' == $_POST['address']
        ||'' == $_POST['payaddress']||'' == $_POST['stdphone']||'' == $_POST['stdqq']) {
        $err = "<font color=\"#FF0000\">请检查输入内容</font>";
    }else if(!preg_match('/^[\x80-\xff]{2,16}$/',$_POST['stdname'])){//匹配2到四个汉字  
        $err = "<font color=\"#FF0000\">请输入正确的姓名(2-4个汉字)</font>";
    }
     else {
        if(xwbstudent::isnumexist($_POST['stdnum'])){
            $err = "<font color=\"#FF0000\">账号已存在请重新注册</font>";
        }else if(!CheckEmail($_POST['stdnum'])){
            $err = "<font color=\"#FF0000\">邮箱不合法,请输入常用邮箱!</font>";
        }
        else{
            if(xwbstudent::addstudentperson($_POST['stdname'],$_POST['stdnum']
            ,$_POST['stdgender'],$_POST['stdschool'],$_POST['stdgrade']
            ,$_POST['address'],$_POST['payaddress'],$_POST['stdphone']
            ,$_POST['stdqq']
            ))
            {
                echo "<br><font color=\"#FF0000\">注册成功!</font></br>";
                jumpto("regsucess.php?num=".$_POST['stdnum']);
            }
            else{
                $err = "<font color=\"#FF0000\">注册失败!</font>";
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
    <li><label>考生姓名<b>*</b></label><input name="stdname" type="text" class="nameinput" width="150px"  value="<?php echo $stdname;?>"/></li>
    <li><label>性别<b>*</b></label>
    
    <div class="vocation">
    <select class="select3" name="stdgender">
    <option>男</option>
    <option>女</option>
    </select>
    </div>

    </li>
    <li><label>邮箱<b>*</b></label><input name="stdnum" type="text" class="nameinput"  value="<?php echo $stdnum;?>"/><i>作为登录账号,请填写您的常用邮箱</i></li>
    <li><label>电话<b>*</b></label><input name="stdphone" type="text" class="nameinput"  value="<?php echo $stdphone;?>"/></li>
    <li><label>QQ号<b>*</b></label><input name="stdqq" type="text" class="nameinput"  value="<?php echo $stdqq;?>"/></li>
    <li><label>就读学校<b>*</b></label><input name="stdschool" type="text" class="dfinput"  value="<?php echo $stdschool;?>"/><i>填写学校全称</i></li>
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
    <li><label>联系地址<b>*</b></label><input name="address" type="text" class="dfinput"  value="<?php echo $address;?>"/></li>
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
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        
        <div class="tipright">
        <p><?php
             	echo $err;   
        ?></p>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />
        </div>
    
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
          $(".click").click(function(){
          $(".tip").fadeIn(200);
          });
          
          $(".tiptop a").click(function(){
          $(".tip").fadeOut(200);
        });
        
          $(".sure").click(function(){
          $(".tip").fadeOut(100);
        });
        
          $(".cancel").click(function(){
          $(".tip").fadeOut(100);
        });
        <?php
            if($err != null){
             	echo "$(\".tip\").fadeIn(200)";   
            }
        ?>
        });
    </script>
    </div>
</body>
<script type="text/javascript">

$("[name='stdgender']").val("<?php echo $stdgender;?>");
$("[name='stdgrade']").val("<?php echo $stdgrade;?>");
$("[name='payaddress']").val("<?php echo $payaddress;?>");

</script>
</html>
