<?php
include_once '../sql.php';

if(!empty($_POST['add']))
{	
	$number=$_POST['number'];
	$maketime=$_POST['maketime'];
	$makedepart=$_POST['makedepart'];
	$makeperson=$_POST['makeperson'];
	$maketype=$_POST['maketype'];
	$makemoney=$_POST['makemoney'];
	$tomoney=$_POST['tomoney'];
	$totime=$_POST['totime'];

	$sql="update make set maketime='$maketime',makedepart='$makedepart',makeperson='$makeperson',maketype='$maketype',makemoney='$makemoney',tomoney='$tomoney',totime='$totime'	 where makeid='$id'";
	
	$result=mysql_query($sql);

if ($result === false) {
          
            die(mysql_error());
        }


if ($result)
	{
	
		echo "<script type='text/javascript'>alert('修改成功');
			location.href='../web/recyclelist.php?number=$number'</script>";
	}
	else
	{
	
		echo "<script type='text/javascript'>alert('修改失败')";	   
			"location.href='../web/recyclelist.php'</script>";
	}
}


