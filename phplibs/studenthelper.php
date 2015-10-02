<?php

require_once ('db.php');

class xwbstudent
{
    public $stdid;
    public $stdname;
    public $stdnum;
    public $stdgender;
    public $stdschool;
    public $stdgrade;
    public $stdaddress;
    public $stdpayaddress;
    public $createtime;

    function setvalues($row)
    {
        if (null == $row)
            return;
        if (isset($row['stdid']))
            $this->stdid = $row['stdid'];
        if (isset($row['stdname']))
            $this->stdname = $row['stdname'];
        if (isset($row['stdnum']))
            $this->stdnum = $row['stdnum'];
        if (isset($row['stdgender']))
            $this->stdgender = $row['stdgender'];
        if (isset($row['stdschool']))
            $this->stdschool = $row['stdschool'];
        if (isset($row['stdgrade']))
            $this->stdgrade = $row['stdgrade'];
        if (isset($row['stdaddress']))
            $this->stdaddress = $row['stdaddress'];
        if (isset($row['stdpayaddress']))
            $this->stdpayaddress = $row['stdpayaddress'];
        if (isset($row['createtime']))
            $this->createtime = $row['createtime'];
    }


    //添加学生
    public static function addstudent($name, $num, $gender, $school, $grader, $address,
        $payaddr)
    {
        $db = new DB();
        return $db->insert('xwb_student', array(
            "stdname" => $name,
            "stdnum" => trim($num),
            "stdgender" => $gender,
            "stdschool" => $school,
            "stdgrade" => $grader,
            "stdaddress" => $address,
            "stdpayaddress" => $payaddr,
            "createtime" => date("Y-m-d H:i:s")));
    }

    public static function isnumexist($num)
    {
        $db = new DB();
        $n = trim($num);
        $sql = "select * from xwb_student where stdnum = '$n'";
        $query = $db->query($sql);
        return ($query != null && mysql_num_rows($query) > 0);
    }

    public static function getstdbynum($num)
    {
        $db = new DB();
        $n = trim($num);
        $sql = "select * from xwb_student where stdnum = '$n'";
        $query = $db->query($sql);
        //$rt = array();
        while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
            $info = new xwbstudent();
            $info->setvalues($row);
            return $info;
        }
        return null;
    }
    
    public static function getallstd($cff)
    {
        $db = new DB();
        $sql = "select * from xwb_student where 1=1 and $cff";
        $query = $db->query($sql);
        $rt = array();
        while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
            $info = new xwbstudent();
            $info->setvalues($row);
            $rt[] = $info;
        }
        return $rt;
    }

    public static function getstdlimit($cff,$id, $count)
    {
        $db = new DB();
        $sql = "select * from xwb_student where 1=1 and $cff order by stdid limit $id,$count";
        $query = $db->query($sql);
        $rt = array();
        while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
            $info = new xwbstudent();
            $info->setvalues($row);
            $rt[] = $info;
        }
        return $rt;
    }
    
    public static function getstdlimitcount($cff)
    {
        $db = new DB();
        $sql = "SELECT COUNT(*) as count FROM xwb_student WHERE 1=1 and $cff";
        $query = $db->query($sql);
        //$rt = array();
        while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
            return $row['count'];
        }
        return false;
    }

    public static function deletestdbynum($num)
    {
        $db = new DB();
        return $db->delete('xwb_student' ,"stdnum = '".trim($num)."'");
    }

}
?>