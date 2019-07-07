	<?php
include_once '../sql.php';

if(!empty($_POST['add']))
{
	$task_table=$_POST['task_table'];
	$task_book=$_POST['task_book'];
	$task_group=$_POST['task_group'];
	$task_gr_leader=$_POST['task_gr_leader'];
	$task_gr_pm=$_POST['task_gr_pm'];
	$task_plan=$_POST['task_plan'];
	$sql="insert into task(task_table,task_book,task_group,,task_gr_pm,task_gr_leader,task_plan)
			 values('$task_table','$task_book','$task_group','$task_gr_pm','$task_gr_leader','$task_plan')";
	
	$result=mysql_query($sql);
	if ($result === false) {
          
            die(mysql_error());
        }
if ($result)
	{
		echo "<script type='text/javascript'>alert('添加成功');
			location.href='../web/tasklist.php'</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('添加失败');
			location.href='useradd.php'</script>";
	}
}
?>