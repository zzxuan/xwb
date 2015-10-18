<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>

<style type="text/css"> 
.f14{ font-size:14px; font-weight:bold; padding-left:5px; padding-top:3px; color: #F90}
</style>

</head>

<body style="background:#cbf4d8;">
   
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="images/leftico01.png" /></span>系统菜单
    </div>
    	<ul class="menuson">
        <li class="active"><cite></cite><a href="home.php" target="rightFrame">报名介绍</a><i></i></li>
        <li><cite></cite><a href="reginput.php" target="rightFrame">在线报名</a><i></i></li>
        <li><cite></cite><a href="stdsearch.php" target="rightFrame">报名查询</a><i></i></li>
        </ul>    
    </dd>

    
    </dl>

    <div style="position:absolute; bottom:0;left: 5; ">
    <div class="f14">参赛方式</div>
            	<ul style="background:none">
                    <li>西安地区：029-82666789  15388625733</li>
                    <li>延安地区：15388625733</li>
                    <li>联系人：马老师</li>
                    <li>地址：西安市兴庆南路与咸宁路十字向东200米路南（朗文学校2层）</li>
                    <li><b  style="color:#F00">希望杯交流QQ群：</b> </li>
                    <li>180896415(四年级)</li>
                    <li>221738043(五年级)</li>
                    <li>319644728(六年级)</li>
                    <li>319643080(初一)</li>
                    <li>240783971(初二）</li>
                </ul>
    </div>
</body>
</html>
