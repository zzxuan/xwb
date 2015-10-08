<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui">
<title>报名入口</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="js/select-ui.min.js"></script>
<script type="text/javascript"> 
<!-- 
        //平台、设备和操作系统 
        var system = { 
            win: false, 
            mac: false, 
            xll: false, 
            ipad:false 
        }; 
        //检测平台 
        var p = navigator.platform; 
        system.win = p.indexOf("Win") == 0; 
        system.mac = p.indexOf("Mac") == 0; 
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0); 
        system.ipad = (navigator.userAgent.match(/iPad/i) != null)?true:false; 
        //跳转语句，如果是手机访问就自动跳转到wap.baidu.com页面 
        if (system.win || system.mac || system.xll||system.ipad) { 
 //window.location.href = "reginputMobile.php"; 
        } else { 
 
            window.location.href = "reginputMobile.php"; 
        } 
--> 
</script> 

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

</head>

</head>

<body >
<div style="position:absolute; width:1080px; height:560px; z-index:-1;overflow:auto;">
    <div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
        <img src="images/xwbzbg.png" height="100%" width="100%"/>    
    </div>
    <div style="position:absolute;left:60%;top: 20%;width:15%; height:10%; ">    
        <a href="regchuxiao.php"><img src="images/xwbtuanti.png" height="100%" width="100%"/></a>    
    </div> 
    <div style="position:absolute;left:60%;top: 30%; width:16%; height:9%;">    
        <a href="regperson.php"><img src="images/xwbgeren.png" height="100%" width="100%"/></a>     
    </div>
</div> 
    <script type="text/javascript">
if(document.body.scrollWidth>document.body.scrollHeight){
document.getElementById('divbody').style.width=document.body.scrollWidth + 'px';
document.getElementById('divbody').style.height=document.body.scrollHeight + 'px';
}
else
{
    document.getElementById('divbody').style.width=document.body.scrollWidth + 'px';
    document.getElementById('divbody').style.height=document.body.scrollWidth * 0.6 + 'px';
}

</script>

</body>
</html>
