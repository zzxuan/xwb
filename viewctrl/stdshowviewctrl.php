<?php
session_start();
require_once ("../common.php");
//checklogin();
require_once("../phplibs/userhelper.php");
require_once ("../phplibs/studenthelper.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mtype = $_POST['mtype'];

    if ($mtype == 1) { //删除
        $num = $_POST['num'];
        if (!xwbstudent::deletestdbynum($num)) {
            echo "删除失败"; //输出json数据
            exit();
        }
        $arr = array('res' => true);
        echo json_encode($arr); //输出json数据
        exit();
    } else
        if ($mtype == 2) {
            $user = xwbuser::getloginuser();
            $cff = "stdpayaddress = '".$user->userschoolname."'";
            if($user->usertype == 0)
            {
                $cff = ' 1 = 1 ';
            }
            
            if($_POST['cff'] == 1){
                if(isset($_SESSION['cff']) && $_SESSION['cff'] != null){
                    $cff = $_SESSION['cff'];
                }
                else{
                    echo "没有可导出的数据";
                    exit();
                }
            }

            $stds = xwbstudent::getallstd($cff);

            if ($stds != null) { //mb_substr($hk->hmworkrequire,0,25,'utf-8')
                if (!file_exists("../data/")) { // 判断存放文件目录是否存在
                    mkdir("../data/", 0777, true);
                }
                $fname = "../data/std" . date("YmdHis") . ".csv";
                $handle = fopen($fname, "a+");
                //fwrite($handle, "xEFxBBxBF");
                fwrite($handle,pack("C*", 0xEF, 0xBB, 0xBF));//写入bom头
                $text = "ID,账号,姓名,性别,学校,年级,地址,缴费学校,注册时间,\r\n";
                fwrite($handle, $text);
                foreach ($stds as $std) {
                    $text = "$std->stdid,$std->stdnum,$std->stdname,$std->stdgender,$std->stdschool,$std->stdgrade,$std->stdaddress,$std->stdpayaddress,$std->createtime,$std->stdphone,$std->stdqq,\r\n";
                    fwrite($handle, $text);
                }
                fclose($handle);
                $arr = array('fname' => $fname);
                echo json_encode($arr); //输出json数据
                exit();
            }
            else
            {
                echo "查找数据失败";
            }
        }


}
?>