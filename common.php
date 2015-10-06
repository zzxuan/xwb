<?php
date_default_timezone_set('PRC');


function jumpto($url)
{
    echo "<script language=\"javascript\">";
    echo "document.location=\"" . $url . "\"";
    echo "</script>";
}

function CheckEmail($email)  
{  
    global $dArr;  
    $dArr = array(  
    '163.com','126.com','sina.com','yahoo.com.cn','yahoo.com','sohu.com','yeah.net','139.com',  
    'tom.com','21cn.com','qq.com','foxmail.com','gmail.com','hotmail.com','263.net',  
    'vip.qq.com','vip.163.com','vip.sina.com','vip.sina.com.cn','vip.foxmail.com',  
    );  
    if(empty($email)) return FALSE;  
    list($e,$d) = explode('@', $email);  
    if(!empty($e) && !empty($d))  
    {  
        $d = strtolower($d);  
        if(!in_array($d,$dArr)) return FALSE;  
        return preg_match('/^[a-z0-9]+([\+_\-\.]?[a-z0-9]+)*/i', $e);  
    }  
    return FALSE;  
} 

?>