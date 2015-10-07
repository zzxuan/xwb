<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
        <img src="images/xwbcxbg.png" height="100%" width="100%"/>    
    </div>
    <div style="position:fixed;left:20%;top: 20%;width:15%; height:10%; ">    
        <a href="regchuzhong.php"><img src="images/xwbcz.png" height="100%" width="100%"/></a>    
    </div> 
    <div style="position:fixed;left:20%;top: 35%; width:15%; height:10%;">    
        <a href="reg.php"><img src="images/xwbxx.png" height="100%" width="100%"/></a>     
    </div>
</div> 
    

</body>
</html>
