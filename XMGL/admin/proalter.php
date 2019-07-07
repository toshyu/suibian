<?php
include_once 'D:\phptutorial\www\xmgl\sql.php';
if (!empty($_POST['add'])) {
	$id=$_POST['id'];
    $pro_number = $_POST['pro_number'];
    $pro_name = $_POST["pro_name"];
    $source = $_POST["source"];
    $nature = $_POST["nature"];
    $pro_type = $_POST["pro_type"];
    $unit_name = $_POST["unit_name"];
    $unit_industy = $_POST["unit_industy"];
    $time = $_POST["time"];
    $startdate = $_POST["startdate"];
    $enddate = $_POST["enddate"];
    $amount = $_POST["amount"];
    $account = $_POST["account"];
    $acc_time = $_POST["acc_time"];
    $paydate1 = $_POST["paydate1"];
    $paydate2 = $_POST["paydate2"];
    $paydate3 = $_POST["paydate3"];
    $paydate4 = $_POST["paydate4"];
    $paydate5 = $_POST["paydate5"];
    $paydate6 = $_POST["paydate6"];
    $paydate7 = $_POST["paydate7"];
    $paydate8 = $_POST["paydate8"];
    $paydate9 = $_POST["paydate9"];
    $paydate10 = $_POST["paydate10"];
    $paymoney1 = $_POST["paymoney1"];
    $paymoney2 = $_POST["paymoney2"];
    $paymoney3 = $_POST["paymoney3"];
    $paymoney4 = $_POST["paymoney4"];
    $paymoney5 = $_POST["paymoney5"];
    $remitdate1 = $_POST["remitdate1"];
    $remitdate2 = $_POST["remitdate2"];
    $remitdate3 = $_POST["remitdate3"];
    $remitdate4 = $_POST["remitdate4"];
    $remit1 = $_POST["remit1"];
    $remit2 = $_POST["remit2"];
    $remit3 = $_POST["remit3"];
    $remit4 = $_POST["remit4"];
    $remiter1 = $_POST["remiter1"];
    $remiter2 = $_POST["remiter2"];
    $remiter3 = $_POST["remiter3"];
    $remiter4 = $_POST["remiter4"];
    $returndate1 = $_POST["returndate1"];
    $returndate2 = $_POST["returndate2"];
    $returndate3 = $_POST["returndate3"];
    $returndate4 = $_POST["returndate4"];
    $return1 = $_POST["return1"];
    $return2 = $_POST["return2"];
    $return3 = $_POST["return3"];
    $return4 = $_POST["return4"];
    $returner1 = $_POST["returner1"];
    $returner2 = $_POST["returner2"];
    $returner3 = $_POST["returner3"];
    $returner4 = $_POST["returner4"];
    $rollindate1 = $_POST["rollindate1"];
    $rollindate2 = $_POST["rollindate2"];
    $rollindate3 = $_POST["rollindate3"];
    $rollindate4 = $_POST["rollindate4"];
    $rollin1 = $_POST["rollin1"];
    $rollin2 = $_POST["rollin2"];
    $rollin3 = $_POST["rollin3"];
    $rollin4 = $_POST["rollin4"];
    $totype1 = $_POST["totype1"];
    $totype2 = $_POST["totype2"];
    $totype3 = $_POST["totype3"];
    $totype4 = $_POST["totype4"];
    $sql = "update project set 
	pro_number='$pro_number',pro_name='$pro_name',source='$source',nature='$nature',pro_type='$pro_type',unit_name='$unit_name',unit_industy='$unit_industy',time='$time',startdate='$startdate',enddate='$enddate',amount='$amount',account='$account',acc_time='$acc_time',paydate1='$paydate1',paydate2='$paydate2',paydate3='$paydate4',paydate4='$paydate4',paydate5='$paydate5',paydate6='$paydate6',paydate7='$paydate7',paydate8='$paydate8',paydate9='$paydate9',paydate10='$paydate10',paymoney1='$paymoney1',paymoney2='$paymoney2',paymoney3='$paymoney3',paymoney4='$paymoney4',paymoney5='$paymoney5',remitdate1='$remitdate1',remitdate2='$remitdate2',remitdate3='$remitdate3',remitdate4='$remitdate4',remit1='$remit1',remit2='$remit2',remit3='$remit3',remit4='$remit4',remiter1='$remiter1',remiter2='$remiter2',remiter3='$remiter3',remiter4='$remiter4',returndate1='$returndate1',returndate2='$returndate2',returndate3='$returndate3',returndate4='$returndate4',return1='$return1',return2='$return2',return3='$return3',return4='$return4',returner1='$returner1',returner2='$returner2',returner3='$returner3',returner4='$returner4',rollindate1='$rollindate1',rollindate2='$rollindate2',rollindate3='$rollindate3',rollindate4='$rollindate4',rollin1='$rollin1',rollin2='$rollin2',rollin3='$rollin3',rollin4='$rollin4',totype1='$totype1',totype2='$totype2',totype3='$totype3',totype4='$totype4' where projectid='$id'";
			
	
	$result=mysql_query($sql);

if ($result)
    {
    
        echo "<script type='text/javascript'>alert('修改成功');
            location.href='../web/proalter.php'</script>";
    }
    else
    {
    
        echo "<script type='text/javascript'>alert('添加失败')";       
            "location.href='projectadd.php'</script>";
    }
}
