<?php
session_start();
require_once ("../common.php");
require_once ("../phplibs/userhelper.php");
xwbuser::checklogin();
require_once ("../phplibs/studenthelper.php");

$user = xwbuser::getloginuser();

$pageCount = 25;
$pageIndex = 1;

$cff = null;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo json_encode($_POST);
    if (isset($_POST['pindex'])) {
        $pageIndex = $_POST['pindex'];
        if ($pageIndex < 1) {
            $pageIndex = 1;
        }
    } else
        if (isset($_POST['stdkey'])) {
            $_SESSION['cff'] = null;
            if ($_POST['stdkey'] == "" || $_POST['stdtype'] == '') {
                $cff = null;
            } else {
                if ($user->usertype != 0) {
                    $cff = "stdpayaddress = '" . $user->userschoolname . "' ";
                } else {
                    $cff = " 1 = 1 ";
                }

                if ($_POST['stdtype'] == '按姓名') {
                    $cff .= "and stdname = '" . $_POST['stdkey'] . "' ";
                } else
                    if ($_POST['stdtype'] == '按班级') {
                        $cff .= "and stdgrade = '" . $_POST['stdkey'] . "' ";
                    } else
                        if ($_POST['stdtype'] == '按账号') {
                            $cff .= "and stdnum = '" . $_POST['stdkey'] . "' ";
                        } else
                            if ($_POST['stdtype'] == '按ID') {
                                $cff .= "and stdid = '" . $_POST['stdkey'] . "' ";
                            }
                $_SESSION['cff'] = $cff;
            }

        }
}
if ($_SESSION['cff'] != null) {
    $cff = $_SESSION['cff'];
    $startid = ($pageIndex - 1) * $pageCount;
    $hmwks = xwbstudent::getstdlimit($cff, $startid, $pageCount);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生管理</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<link href="../css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="../js/select-ui.min.js"></script>
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

});
</script>
<script language="javascript">
function deletehmwork(stdnum,tdobj){
    if(!confirm("是否删除该信息,删除后将不可恢复！")){
        return;
    }
    $.ajax({
         url: "../viewctrl/stdshowviewctrl.php",  
         type: "POST",
         data:{mtype:1,num:stdnum},
         dataType: "json",
         error: function(xhr){  
             alert(xhr.responseText); //返回失败信息 
         },  
         success: function(msg){//如果调用php成功    
             var table=document.getElementById("hmktable");
             table.deleteRow(tdobj.parentNode.parentNode.rowIndex);
         }
     });
}

function submitform(p){
    var pind = document.getElementById("pindex");
    var pageindex = parseInt(pind.value);
    pind.value = pageindex + p;
    var fm=document.getElementById("form1");
    fm.submit();
}

function expdata(){
    $.ajax({
         url: "../viewctrl/stdshowviewctrl.php",  
         type: "POST",
         data:{mtype:2,cff:1},
         dataType: "json",
         error: function(xhr){  
             alert(xhr.responseText); //返回失败信息 
         },  
         success: function(msg){//如果调用php成功    
             //alert(msg.fname);
             document.location = msg.fname;
         }
     });
}

</script>
</head>
<body>
<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li>学生查询</li>
    </ul>
</div>

<div class="rightinfo">

    <div class="tools">
    <form name="form1" id="formsearch" method="post">
    <ul class="toolbar">
    <li><input name="stdkey" type="text" class="nameinput" /></li>
    
    <li>
        
    <div class="vocation">
    <select class="select2" name="stdtype">
    <option>按姓名</option>
    <option>按班级</option>
    <option>按账号</option>
    <option>按ID</option>
    </select>
    </div>
    
    </li>
    
    <li><input id="regsubbtn" name="search" type="submit" class="btn" value="查询"/></li>
    
    </ul>
    </form>
        <form name="form1" id="form1" method="post">
    	<ul class="toolbar1">
        <li class="click"  onclick="expdata()"><span><img src="../images/t01.png" /></span>导出</li>
        <li>第&nbsp;<input id="pindex" name="pindex" style="width:20px;" value="<?php echo
$pageIndex; ?> "/>&nbsp;页</li>
        <li class="click"  onclick="submitform(0)"><span><img src="../images/t01.png" /></span>跳转</li>
        <li class="click" onclick="submitform(-1)"><span><img src="../images/t01.png" /></span>上一页</li>
        <li class="click" onclick="submitform(1)"><span><img src="../images/t02.png" /></span>下一页</li>
        </ul>
        </form>
    
    </div>

<div>

<table class="tablelist" id="hmktable">
    <thead>

    <tr>     
        <th>ID</th>
        <th>账号</th>
		<th>姓名</th>
        <th>性别</th>
        <th>就读学校</th>
		<th>所在年级</th>
        <th>缴费地点</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
<?php

if ($hmwks != null) { //mb_substr($hk->hmworkrequire,0,25,'utf-8')
    foreach ($hmwks as $std) {
        echo "<tr>
            <td>" . $std->stdid . "</td>
            <td>" . $std->stdnum . "</td>
            <td>" . $std->stdname . "</td>
            <td>" . $std->stdgender . "</td>
            <td>" . $std->stdschool . "</td>
            <td>" . $std->stdgrade . "</td>
            <td>" . $std->stdpayaddress . "</td>
            <td>" . $std->createtime . "</td>
            <td ><a href=\"../stdshow.php?num=" . $std->stdnum . "\" class=\"tablelink\">查看</a>
            <a href=\"#\" onclick=\"deletehmwork($std->stdnum,this)\" class=\"tablelink\">删除</a></td>
            </tr>";
    }
}
?>
</tbody>
</table>

</div>


</div>
<script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
</script>
</body>
</html>
