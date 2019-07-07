<?php
include_once '../sql.php';

if(!empty($_POST['add']))
{	
	$id=$_POST['id'];
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

	$sql="update out_project set 
	outpro_number='$pro_number',outpro_name='$pro_name',outpro_unit='$unit_name',outpro_time='$time',outpro_start_time='$startdate',outpro_end_time='$enddate',outpro_amount='$amount',outpro_account='$account',outpro_acc_time='$acc_time',outpro_paydate1='$paydate1',outpro_paydate2='$paydate2',outpro_paydate3='$paydate4',outpro_paydate4='$paydate4',outpro_paydate5='$paydate5',outpro_paydate6='$paydate6',outpro_paydate7='$paydate7',outpro_paydate8='$paydate8',outpro_paydate9='$paydate9',outpro_paydate10='$paydate10',outpro_paydate11='$paydate11',outpro_paydate12='$paydate12',outpro_paymoney1='$paymoney1',outpro_paymoney2='$paymoney2',outpro_paymoney3='$paymoney3',outpro_paymoney4='$paymoney4',outpro_paymoney5='$paymoney5',outpro_paymoney6='$paymoney6' where id='$id'";
	
	$result=mysql_query($sql);

if ($result === false) {
          
            die(mysql_error());
        }


if ($result)
	{
	
		echo "<script type='text/javascript'>alert('修改成功');
			location.href='../web/outscelist.php'</script>";
	}
	else
	{
	
		echo "<script type='text/javascript'>alert('修改失败')";	   
			"location.href='../web/outscelist.php'</script>";
	}
}


