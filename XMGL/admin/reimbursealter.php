<?php
include_once '../sql.php';

if(!empty($_POST["add"]))
{
	$repronumber=$_POST["repronumber"];
	$reproname=$_POST['reproname'];
	$redepart=$_POST["redepart"];
	$reusername=$_POST["reusername"];
	$retime=$_POST["retime"];
	$respecies=$_POST["respecies"];
	$upper=$_POST["upper"];
	$management=$_POST["management"];
	$life=$_POST["life"];
	$occu=$_POST["occu"];
	$deprec=$_POST["deprec"];
	$upother=$_POST["upother"];
	$outfee=$_POST["outfee"];
	$office=$_POST["office"];
	$post=$_POST["post"];
	$costs=$_POST["costs"];
	$traffic=$_POST["traffic"];
	$house=$_POST["house"];
	$train=$_POST["train"];
	$meeting=$_POST["meeting"];
	$meetsite=$_POST["meetsite"];
	$meethouse=$_POST["meethouse"];
	$meetprint=$_POST["meetprint"];
	$vehide=$_POST["vehide"];
	$called=$_POST["called"];
	$fuel=$_POST["fuel"];
	$material=$_POST["meterial"];
	$subsidy=$_POST["subsidy"];
	$lease=$_POST["lease"];
	$rebid=$_POST["rebid"];
	$tax=$_POST["tax"];
	$othername=$_POST["othername"];
	$allmoney=$upper+$management+$life+$occu+$deprec+$upother+$outfee+$office+$post+$costs+$traffic+$house+$train+$meeting+$meetsite+$meethouse+$meetprint+$vehide+$called+$fuel+$material+$subsidy+$lease+$rebid+$tax+$othername;

	$sql="update reimburse set repronumber='$repronumber',reproname='$reproname',redepart='$redepart',reusername='$reusername',retime='$retime',respecies='$respecies',upper='$upper',management='$management',life='$life',occu='$occu',deprec='$deprec',upother='$upother',outfee='$outfee',office='$office',post='$post',costs='$costs',traffic='$traffic',house='$house',train='$train',meeting='$meeting',meetsite='$meetsite',meethouse='$meethouse',meetprint='$meetprint',vehide='$vehide',called='$called',fuel='$fuel',material='$material',subsidy='$subsidy',lease='$lease',rebid='$rebid',tax='$tax',othername='$othername'，allmoney="$allmoney" where reid='$id'";

			 

	
	$result=mysql_query($sql);
if ($result === false) {
          
            die(mysql_error());
        }
if ($result)
	{
		
		echo "<script type='text/javascript'>alert('修改成功');
			location.href='../web/pro_expend_add.php'</script>";
	}
	else
	{
		throw new Exception(mysql_error($this->link),1);
		echo "<script type='text/javascript'>alert('添加失败')";	   
			"location.href='../web/pro_expend_add.php'</script>";
	}
}
