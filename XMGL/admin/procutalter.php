<?php
include_once '../sql.php';

if(!empty($_POST['add']))
{
		$cutpronumber=$_POST['cutpronumber'];
	$cutmoney=$_POST['cutmoney'];
	$promoney=$_POST['promoney'];
	$cuttime=$_POST['cuttime'];
	$produce1=$_POST['produce1'];
	$produce2=$_POST['produce2'];
	$run1=$_POST['run1'];
	$run2=$_POST['run2'];
	$administration=$_POST['administration'];
	$depart1=$_POST['depart1'];
	$depart2=$_POST['depart2'];
	$depart3=$_POST['depart3'];
	$depart4=$_POST['depart4'];
	$depart5=$_POST['depart5'];
	$producepce1=$produce1/$cutmoney*'100'.'%';
	$producepce2=$produce2/$cutmoney*'100'.'%';
	$runpce1=$run1/$cutmoney*'100'.'%';
	$runpce2=$run2/$cutmoney*'100'.'%';
	$administrationpce=$administration/$cutmoney*'100'.'%';
	$id=$_POST['id'];

	$sql="update cut set cutpronumber='$cutpronumber',cutmoney='$cutmoney',promoney='$promoney',cuttime='$cuttime',produce1='$produce1',produce2='$produce2',run1='$run1',run2='$run2',administration='$administration',depart1='$depart1',depart2='$depart2',depart3='$depart3',depart4='$depart4',depart5='$depart5',producepce1='$producepce1',producepce2='$producepce2',runpce1='$runpce2',runpce2='$runpce2',administrationpce='$administrationpce' where cutid='$id'";
	
	$result=mysql_query($sql);
if ($result === false) {
          
            die(mysql_error());
        }
if ($result)
	{
		
		echo "<script type='text/javascript'>alert('修改成功');
			location.href='../web/procutlist.php'</script>";
	}
	else
	{
		throw new Exception(mysql_error($this->link),1);
		echo "<script type='text/javascript'>alert('添加失败')";	   
			"location.href='projectadd.php'</script>";
	}
}
?>