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
<div id="divbody" style="position:absolute; width:1080px; height:560px; z-index:-1;overflow:auto;">
    <div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
        <img src="images/xwbcxbg.png" height="100%" width="100%"/>    
    </div>
    <div style="position:absolute;left:20%;top: 20%;width:15%; height:10%; ">    
        <a href="regchuzhong.php"><img src="images/xwbcz.png" height="100%" width="100%"/></a>    
    </div> 
    <div style="position:absolute;left:19%;top: 35%; width:18%; height:10%;">    
        <a href="reg.php"><img src="images/xwbxx.png" height="100%" width="100%"/></a>     
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
