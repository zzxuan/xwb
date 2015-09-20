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
    
    <ul class="forminfo">
    <li><label>考生姓名<b>*</b></label><input name="" type="text" class="nameinput" width="150px"/></li>
    <li><label>性别<b>*</b></label>
    
    <div class="vocation">
    <select class="select3">
    <option>男</option>
    <option>女</option>
    </select>
    </div>

    </li>
    <li><label>QQ号<b>*</b></label><input name="" type="text" class="nameinput" /><i>作为缴费的依据，请填写真实信息</i></li>
    <li><label>就读学校<b>*</b></label><input name="" type="text" class="dfinput" /><i>填写学校全称</i></li>
    <li><label>所在年级<b>*</b></label>
        
    <div class="vocation">
    <select class="select2">
    <option>四年级</option>
    <option>五年级</option>
    <option>六年级</option>
    <option>初一年级</option>
    <option>初二年级</option>
    </select>
    </div>
    
    </li>
    <li><label>联系地址<b>*</b></label><input name="" type="text" class="dfinput" /></li>
    <li><label>缴费地点<b>*</b></label>
    
    <div class="vocation">
    <select class="select1">
    <option>西安弘文教育</option>
    <option>西安付老师教室</option>
    <option>西安武江教育</option>
    <option>西安育人学校南郊分校</option>
    <option>西安朗文外国语培训学校</option>
    <option>西安朗文学校金博士分校</option>
    <option>西安朗文学校子成教育</option>
    <option>西安成龙学校</option>
    <option>西安帝京学校</option>
    </select>
    </div>
    </li>
    
    <li><label>报名须知<b>*</b></label>
    
    <div class="divwstyle">
    <ul class="iconlist">
    
    <li><img src="images/weixin.png" width="120" height="120"/><p><a>官方微信</a></p></li>
    <li>
    <p>四年级群号 123456</p>
    <p>五年级群号 123456</p>
    <p>六年级群号 123456</p>
    <p>初一群号   123456</p>
    <p>初二群号   123456</p>
    </li>
    </ul>
    </div>
    </li>
    <li><label>&nbsp;</label><input type="checkbox" onclick ="checkboxclick()">已阅读须知</input></li>
    <li><label>&nbsp;</label><input disabled="true" id="regsubbtn" name="" type="button" class="btndis" value="提交信息"/></li>
    </ul>
    
    
    </div>
</body>
</html>
