<?php
include_once '../sql.php';

if(!empty($_POST['add']))
{	$outpro_id=$_POST['id'];
	$pro_number=$_POST['outpro_number'];
	$pro_name= $_POST["outpro_name"];
	$unit_name= $_POST["outpro_unit"];
	$time = $_POST["outpro_time"];
	$startdate= $_POST["outpro_start_time"];
	$enddate = $_POST["outpro_end_time"];
	$amount = $_POST["outpro_amount"];
	$account=$_POST["outpro_account"];
	$acc_time=$_POST["outpro_acc_time"];
	$paydate1=$_POST["outpro_paydate1"];
	$paydate2=$_POST["outpro_paydate2"];
	$paydate3=$_POST["outpro_paydate3"];
	$paydate4=$_POST["outpro_paydate4"];
	$paydate5=$_POST["outpro_paydate5"];
	$paydate6=$_POST["outpro_paydate6"];	
	$paydate7=$_POST["outpro_paydate7"];
	$paydate8=$_POST["outpro_paydate8"];
	$paydate9=$_POST["outpro_paydate9"];
	$paydate10=$_POST["outpro_paydate10"];
	$paydate11=$_POST["outpro_paydate11"];
	$paydate12=$_POST["outpro_paydate12"];
	$paymoney1=$_POST["outpro_paymoney1"];
	$paymoney2=$_POST["outpro_paymoney2"];
	$paymoney3=$_POST["outpro_paymoney3"];
	$paymoney4=$_POST["outpro_paymoney4"];
	$paymoney5=$_POST["outpro_paymoney5"];
	$paymoney6=$_POST["outpro_paymoney6"];

	$sql="insert into out_project(outpro_id,outpro_number,outpro_name,outpro_unit,outpro_time,outpro_start_time,outpro_end_time,outpro_acc_time,outpro_account,outpro_amount,outpro_paydate1,outpro_paydate2,outpro_paydate3,outpro_paydate4,outpro_paydate5,outpro_paydate6,outpro_paydate7,outpro_paydate8,outpro_paydate9,outpro_paydate10,outpro_paydate11,outpro_paydate12,outpro_paymoney1,outpro_paymoney2,outpro_paymoney3,outpro_paymoney4,outpro_paymoney5,outpro_paymoney6)
			 values('$outpro_id','$pro_number','$pro_name','$unit_name','$time','$startdate','$enddate','$amount','$account','$acc_time','$paydate1','$paydate2','$paydate3','$paydate4','$paydate5','$paydate6','$paydate7','$paydate8','$paydate9','$paydate10','$paydate11','$paydate12','$paymoney1','$paymoney2','$paymoney3','$paymoney4','$paymoney5','$paymoney6')";
	
	$result=mysql_query($sql);
if ($result === false) {
          
            die(mysql_error());
        }
if ($result)
	{
	
		echo "<script type='text/javascript'>alert('添加成功');
			location.href='../web/outsceadd.php'</script>";
	}
	else
	{
		throw new Exception(mysql_error($this->link),1);
		echo "<script type='text/javascript'>alert('添加失败')";	   
			"location.href='projectadd.php'</script>";
	}
}
?>