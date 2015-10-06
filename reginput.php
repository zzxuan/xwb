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
<style type="text/css"> 
    .divwstyle
    {
        margin:10px 10px 10px 85px;
        border:1px solid #99cccc;
    }
    .wrap
    {
        margin:0 auto;
        width:960px;
        background:#F00; 
        color:#FFF;
        text-align:center;
    } 
    /*主面板样式*/
    #container { 
        width:880px; 
        margin:0px auto;/*主面板DIV居中*/
    }
   /*顶部面板样式*/
    #header {
        width:100%;
        height:100px;
    }
    /*底部面板样式*/
    #footer {
        width:100%;
        height:100px;
    }
    .cat, .sidebar {
        float:left;
        width:50%;
        height:100%;
        text-align:center;
    }
</style>
</head>

</head>

<body >

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">报名入口</a></li>
    </ul>
    </div>
    <div id="container"> 
    <div id="header">
    
    </div> 
    <div id="main"> 
        <div class="cat">
            <a href="reg.php">
                <img src="./images/xwbtuanti.png" height="50" width="200" alt="团体报名入口" />
            </a>
        </div> 
        <div class="sidebar">
            <a href="regperson.php">
                <img src="./images/xwbgeren.png" height="50" width="200" alt="个人报名入口" />
            </a>
        </div> 
    </div> 
</div> 
    

</body>
</html>
