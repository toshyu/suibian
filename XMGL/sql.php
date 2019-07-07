<?php
mysql_connect("localhost","root","")or die(mysql_errno());
mysql_select_db("xmgl")or die(mysql_errno());
mysql_query("set names 'utf-8'");


function news($pageNum = 1, $pageSize = 3,$table,$check)
{
    $array = array();
    $coon = mysqli_connect("localhost", "root");
    mysqli_select_db($coon, "xmgl");
    mysqli_set_charset($coon, "utf8");
    // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
    if ($check) {
    $rs = "select make.makemoney,make.makepronumber,reimburse.allmoney,reimburse.reproname from make inner join reimburse on make.makepronumber=reimburse.repronumber
 limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize ; 
    }else
    { $rs = "select * from $table limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;}
   
    $r = mysqli_query($coon, $rs);
    while ($obj = mysqli_fetch_object($r)) {
        $array[] = $obj;
    }
    mysqli_close($coon,"xmgl");
    return $array;
}

function allNews($table)
{
    $coon = mysqli_connect("localhost", "root");
    mysqli_select_db($coon, "xmgl");
    mysqli_set_charset($coon, "utf8");
    $rs = "select count(*) num from $table"; //可以显示出总页数
    $r = mysqli_query($coon, $rs);
    $obj = mysqli_fetch_object($r);
    mysqli_close($coon,"xmgl");
    return $obj->num;
}

