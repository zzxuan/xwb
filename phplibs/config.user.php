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
        "username" => "xalwxx",
        "userpassword" => "xwb123",
        "userschool" => "西安朗文学校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "hwjy",
        "userpassword" => "xwb123",
        "userschool" => "弘文教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xahhjy",
        "userpassword" => "xwb123",
        "userschool" => "西安辉煌教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "zcjy",
        "userpassword" => "xwb123",
        "userschool" => "子成教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xgdlgqpy",
        "userpassword" => "xwb123",
        "userschool" => "西工大李高奇培优学校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "syjy",
        "userpassword" => "xwb123",
        "userschool" => "盛元教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "szju",
        "userpassword" => "xwb123",
        "userschool" => "史周教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "wjjy",
        "userpassword" => "xwb123",
        "userschool" => "西安武江教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xbyjy",
        "userpassword" => "xwb123",
        "userschool" => "新博雅教育",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "yrxx",
        "userpassword" => "xwb123",
        "userschool" => "育人学校",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "jbsxx",
        "userpassword" => "xwb123",
        "userschool" => "金博士学校",
        "usertype" => 1,
        );


    $userconfig[] = array(
        "username" => "xwb1",
        "userpassword" => "xwb123",
        "userschool" => "西北工业大学附中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb2",
        "userpassword" => "xwb123",
        "userschool" => "西安铁一中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb3",
        "userpassword" => "xwb123",
        "userschool" => "西安市高新一中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb4",
        "userpassword" => "xwb123",
        "userschool" => "西安交通大学附中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb5",
        "userpassword" => "xwb123",
        "userschool" => "陕西师范大学附中",
        "usertype" => 1,
        );
            $userconfig[] = array(
        "username" => "xwb6",
        "userpassword" => "xwb123",
        "userschool" => "长庆八中",
        "usertype" => 1,
        );

    $userconfig[] = array(
        "username" => "xwb7",
        "userpassword" => "xwb123",
        "userschool" => "西安交大附中浐灞欧亚中学",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb8",
        "userpassword" => "xwb123",
        "userschool" => "西安市曲江一中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb9",
        "userpassword" => "xwb123",
        "userschool" => "铁一中滨河学校",
        "usertype" => 1,
        );
        

    $userconfig[] = array(
        "username" => "xwb10",
        "userpassword" => "xwb123",
        "userschool" => "西安朗文学校",
        "usertype" => 1,
        );
            $userconfig[] = array(
        "username" => "xwb11",
        "userpassword" => "xwb123",
        "userschool" => "西安电子科技大学附中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb12",
        "userpassword" => "xwb123",
        "userschool" => "西安市三中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb13",
        "userpassword" => "xwb123",
        "userschool" => "西北大学附中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb14",
        "userpassword" => "xwb123",
        "userschool" => "西安市二十六中",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb15",
        "userpassword" => "xwb123",
        "userschool" => "西安市第七十中学",
        "usertype" => 1,
        );
            $userconfig[] = array(
        "username" => "xwb16",
        "userpassword" => "xwb123",
        "userschool" => "西安市第十六中学",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb17",
        "userpassword" => "xwb123",
        "userschool" => "西安市第一中学",
        "usertype" => 1,
        );
    $userconfig[] = array(
        "username" => "xwb18",
        "userpassword" => "xwb123",
        "userschool" => "东元路中学",
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