<?php
include_once '../sql.php';

if(!empty($_POST['add']))
{
	$makepronumber=$_POST['makepronumber'];
	$maketime=$_POST['maketime'];
	$makedepart=$_POST['makedepart'];
	$makeperson=$_POST['makeperson'];
	$maketype=$_POST['maketype'];
	$makemoney=$_POST['makemoney'];
	$tomoney=$_POST['tomoney'];
	$totime=$_POST['totime'];

	$sql="insert into make(makepronumber,maketime,makedepart,makeperson,maketype,makemoney,tomoney,totime)
			 values('$makepronumber','$maketime','$makedepart','$makeperson','$maketype','$makemoney','$tomoney','$totime')";
	$result=mysql_query($sql);
if ($result === false) {
          
            die(mysql_error());
        }
if ($result)
	{
		
		echo "<script type='text/javascript'>alert('添加成功');
			location.href='../web/recycleadd.php'</script>";
	}
	else
	{
		throw new Exception(mysql_error($this->link),1);
		echo "<script type='text/javascript'>alert('添加失败')";	   
			"location.href='projectadd.php'</script>";
	}
}
?>