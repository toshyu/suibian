<?php
include_once'../sql.php';
$id=$_GET['id'];
$sql="select * from project where projectid=$id";
$result=mysql_query($sql);


 $row = mysql_fetch_assoc($result);
       
       
       ?>
       <!DOCTYPE html>
<html lang="zh-cn">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目信息</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
	<table>
    
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目基本信息</strong></div>
          <div class="label">
            <label class="input">合同编号：   <?php echo $row['pro_number']; ?> </label>
          </div>
      
          <div class="label">
            <label class="input">项目名称：   <?php echo $row['pro_name']; ?></label>
          </div>

          <div class="label">
            <label class="input">来源：       <?php echo $row['source']; ?></label>
          </div> 
          
          <div class="label">
            <label class="input">性质：       <?php echo $row['nature']; ?></label>
          </div>
     
          <div class="label">
           <label class="input">类型：        <?php echo $row['pro_type']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">委托单位：   <?php echo $row['unit_name']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">委托单位行业:<?php echo $row['unit_industy']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">签订时间：   <?php echo $row['time']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">项目开始时间:<?php echo $row['startdate']; ?></label>
          </div>
  
        
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目经济信息</strong></div>
   
          <div class="label">
            <label class="input">合同额：     <?php echo $row['amount']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">决算额：     <?php echo $row['account']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">决算日期：   <?php echo $row['acc_time']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">付款方式：</label>
          </div>
    

<p class="input"><label >第一笔款: </label><?php echo $row['paydate1']; ?>--<?php echo $row['paydate2']; ?>
金额: <?php echo $row['paymoney1']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>第二笔款: </label><?php echo $row['paydate3']; ?>--<?php echo $row['paydate4']; ?>
金额: <?php echo $row['paymoney2']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>第三笔款: </label><?php echo $row['paydate5']; ?>--<?php echo $row['paydate6']; ?>
金额: <?php echo $row['paymoney3']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>第四笔款: </label><?php echo $row['paydate7']; ?>--<?php echo $row['paydate8']; ?>
金额: <?php echo $row['paymoney4']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>退保证金: </label><?php echo $row['paydate9']; ?>--<?php echo $row['paydate10']; ?>
金额: <?php echo $row['paymoney5'];  ?></p>
         

              <div class="label">
            <label>投标保证金：</label>
          </div>
<p class="input"><label>时间: </label><?php echo $row['remitdate1']; ?>汇款金额: <?php echo $row['remit1']; ?>
汇入单位：<?php echo $row['remiter1']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['returndate1']; ?>回款金额: <?php echo $row['return1']; ?>
付款单位：<?php echo $row['returner1']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['rollindate1']; ?>转入金额: </label><?php echo $row['rollin1']; ?>
转入类型： <?php echo $row['totype1']; ?></p>


               <div class="label">
            <label>合同履约金：</label>
          </div>
<p class="input"><label>时间: </label><?php echo $row['remitdate2']; ?>汇款金额: <?php echo $row['remit2']; ?>
汇入单位：<?php echo $row['remiter2']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['returndate2']; ?>回款金额: <?php echo $row['return2']; ?>
付款单位：<?php echo $row['returner2']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['rollindate2']; ?>转入金额: </label><?php echo $row['rollin2']; ?>
转入类型： <?php echo $row['totype2']; ?></p>




           <div class="label">
            <label>质量保证金：</label>
          </div>
<p class="input"><label>时间: </label><?php echo $row['remitdate3']; ?>汇款金额: <?php echo $row['remit3']; ?>
汇入单位：<?php echo $row['remiter3']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['returndate3']; ?>回款金额: <?php echo $row['return3']; ?>
付款单位：<?php echo $row['returner3']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['rollindate2']; ?>转入金额: </label><?php echo $row['rollin2']; ?>
转入类型： <?php echo $row['totype3']; ?></p>


   <div class="label">
            <label>中标服务费：</label>
          </div>
<p class="input"><label>时间: </label><?php echo $row['remitdate4']; ?>汇款金额: <?php echo $row['remit4']; ?>
汇入单位：<?php echo $row['remiter4']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['returndate4']; ?>回款金额: <?php echo $row['return4']; ?>
付款单位：<?php echo $row['returner4']; ?></p>
<div class="label"><label>      </label></div>
<p class="input"><label>时间: </label><?php echo $row['rollindate4']; ?>转入金额: </label><?php echo $row['rollin4']; ?>
转入类型： <?php echo $row['totype4']; ?></p>
   <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>

</table>
</body>
</html>
150