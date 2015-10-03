<?php

function getuserconfig()
{
    $userconfig = array();
    //********************以上请勿修改**************************************
    /*
    配置说明:分别为用户名,密码,学校名称
    usertype为用户类型 0表示超级管理员,1表示普通用户
    */
    $userconfig[] = array(
        "username" => "xwb1",
        "userpassword" => "xwb123",
        "userschool" => "西安弘文教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb2",
        "userpassword" => "xwb123",
        "userschool" => "西安付老师教室",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb3",
        "userpassword" => "xwb123",
        "userschool" => "西安武江教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb4",
        "userpassword" => "xwb123",
        "userschool" => "西安育人学校南郊分校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb5",
        "userpassword" => "xwb123",
        "userschool" => "西安朗文外国语培训学校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb6",
        "userpassword" => "xwb123",
        "userschool" => "西安朗文学校金博士分校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb7",
        "userpassword" => "xwb123",
        "userschool" => "西安朗文学校子成教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb8",
        "userpassword" => "xwb123",
        "userschool" => "西安成龙学校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb1",
        "userpassword" => "xwb123",
        "userschool" => "西安帝京学校",
        "usertype" => 1,
        );
    //---------------------------------------------------------------------
    //这里是超级管理员
    $userconfig[] = array(
        "username" => "xwbadmin",
        "userpassword" => "xwbadmin",
        "userschool" => "超级管理员",
        "usertype" => 0,
        );
    //---------------------------------------------------------------------
    //以下请勿修改
    return $userconfig;
}

?>