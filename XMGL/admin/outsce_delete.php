<?php
include_once'../sql.php';
$id=$_GET["id"];
$sql="delete from out_project where id=$id";
$result=mysql_query($sql);


if ($result) {
		echo "<script type='text/javascript'>alert('删除成功');
			location.href='../web/outscelist.php'</script>";
}else{
	echo "<script type='text/javascript'>alert('删除失败');
			location.href='../web/prolist.php'</script>";
}