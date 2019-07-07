<?php
include_once'../sql.php';
$id=$_GET['id'];
$sql="select * from out_project where id=$id";
$result=mysql_query($sql);


 $row = mysql_fetch_assoc($result);
       
    $pro_number= $row['outpro_number'];
  $pro_name= $row["outpro_name"];
  $unit_name= $row["outpro_unit"];
  
  $time = $row["outpro_time"];
  $startdate= $row["outpro_start_time"];
  $enddate = $row["outpro_end_time"];
  $amount = $row["outpro_amount"];
  $account=$row["outpro_account"];
  $acc_time=$row["outpro_acc_time"];
  $paydate1=$row["outpro_paydate1"];
  $paydate2=$row["outpro_paydate2"];
  $paydate3=$row["outpro_paydate3"];
  $paydate4=$row["outpro_paydate4"];
  $paydate5=$row["outpro_paydate5"];
  $paydate6=$row["outpro_paydate6"]; 
  $paydate7=$row["outpro_paydate7"];
  $paydate8=$row["outpro_paydate8"];
  $paydate9=$row["outpro_paydate9"];
  $paydate10=$row["outpro_paydate10"];
    $paydate11=$row["outpro_paydate11"];
  $paydate12=$row["outpro_paydate12"];
  $paymoney1=$row["outpro_paymoney1"];
  $paymoney2=$row["outpro_paymoney2"];
  $paymoney3=$row["outpro_paymoney3"];
  $paymoney4=$row["outpro_paymoney4"];
  $paymoney5=$row["outpro_paymoney5"];
  $paymoney6=$row["outpro_paymoney6"];
  
       
       ?>
       <!DOCTYPE html>
<html lang="zh-cn">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目外协相关</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
  <table>
    
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目基本信息</strong></div>
          <div class="label">
            <label class="input">外协合同编号：   <?php echo $pro_number; ?> </label>
          </div>
      
          <div class="label">
            <label class="input">外协项目名称：   <?php echo $pro_name; ?></label>
          </div>
  
          <div class="label">
            <label class="input">外协单位：   <?php echo $unit_name; ?></label>
          </div>
         
          <div class="label">
            <label class="input">签订时间：   <?php echo $time; ?></label>
          </div>
         
          <div class="label">
            <label class="input">项目开始时间:<?php echo $startdate; ?></label>
          </div>
  
        
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目经济信息</strong></div>
   
          <div class="label">
            <label class="input">外协合同额：     <?php echo $amount; ?></label>
          </div>
          
          <div class="label">
            <label class="input">外协决算额：     <?php echo $account; ?></label>
          </div>
          
          <div class="label">
            <label class="input">外协决算日期：   <?php echo $acc_time; ?></label>
          </div>
          
          <div class="label">
            <label class="input">付款方式：</label>
          </div>
    

<p class="input"><label>第一笔款: </label><?php echo $paydate1; ?>--<?php echo $paydate2; ?>
金额: <?php echo $paymoney1; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>第二笔款: </label><?php echo $paydate3; ?>--<?php echo $paydate4; ?>
金额: <?php echo $paymoney2; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>第三笔款: </label><?php echo $paydate5; ?>--<?php echo $paydate6; ?>
金额: <?php echo $paymoney3; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>第四笔款: </label><?php echo $paydate7; ?>--<?php echo $paydate8; ?>
金额: <?php echo $paymoney4; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>预留质量保证金: </label><?php echo $paydate9; ?>--<?php echo $paydate10; ?>
金额: <?php echo $paymoney5; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>退保证金: </label><?php echo $paydate11; ?>--<?php echo $paydate12; ?>
金额: <?php echo $paymoney6;  ?></p>
         
   <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>

</table>
</body>
</html>
150