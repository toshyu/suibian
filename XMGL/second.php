<?php 
include_once 'sql.php';
$sql = "select * from project";
 

 $attr=mysql_query($sql);//返回一个二维数组
//将二维数组转换成字符串格式因为ajax返回的是text格式的
//echo "p001^汉族|p002^满族|p003^回族";//类似这种格式的才可以
 
$str = "";
foreach($attr as $v)
{
    //$str = implode("^",$v);//$v里面含有一条一条的数据，列与列之间的
    $str = $str.implode("^",$v);//否则等再次循环时会被替换
    $str = $str."|";   
}
     
$str = substr($str,0,strlen($str)-1);//截取字符串的长度
echo $str; 