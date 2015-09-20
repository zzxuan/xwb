<?php

require_once ('db.php');

class hwuser
{
    public $stdid;
    public $stdname;
    public $stdnum;
    public $stdgender;
    public $stdschool;
    public $stdgrade;
    public $stdaddress;
    public $stdpayaddress;

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
    }

    
    //添加学生
    public static function addstudent($name, $num, $gender, $school, $grader, $address,
        $payaddr)
    {
        $db = new DB();
        return $db->insert('xwb_student', array(
            "stdname" => $name,
            "stdnum" => $num,
            "stdgender" => $gender,
            "stdschool" => $school,
            "stdgrade" => $grader,
            "stdaddress" => $address,
            "stdpayaddress" => $payaddr));
    }


}
?>