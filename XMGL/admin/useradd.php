<?php
include_once '../sql.php';

if(!empty($_POST['publish']))
{
	$username=$_POST['username'];
	$password= $_POST["password"];
	$name= $_POST["name"];
	$group = $_POST["group"];
	$headman = $_POST["headman "];
	$manager= $_POST["manager"];
	$depart = $_POST["depart"];
	$phone = $_POST["phone"];
	$sql="insert into user(username,password,name,group,headman,manager,depart,phone)
			 values('$username','$password','$name','$group','$headman','$manager','$depart','$phone')";
	
	$result=mysql_query($sql);
if ($result)
	{
		echo "<script type='text/javascript'>alert('添加成功');
			location.href='userlist.php'</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('添加失败');
			location.href='useradd.php'</script>";
	}
}
?>