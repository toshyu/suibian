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
    <?php
   include_once '../sql.php';
   $id=$_GET['id'];
      $sql="select * from out_project where id=$id";
       $result=mysql_query($sql);
      $row = mysql_fetch_assoc($result);
       {
        ?>
  <form method="post" class="form-x" id="submit" action="../admin/outsce_alter.php"    enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
    <div>
      <span><strong><?php $id=$_GET['id'];echo '项目外协情况'; ?></strong></span>
    </div><br>
    <div class="panel admin-panel" style="border: 1px solid #000000;">
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 外协基本信息</strong></div>
      <div class="body-content">
         <div class="form-group">
          <div class="label">
            <label>外协单位名称：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="outpro_unit" value="<?php echo $row['outpro_unit']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>外协合同编号：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 300px;" name="outpro_number" value="<?php echo $row['outpro_number']; ?>" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>外协项目名称：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="outpro_name" value="<?php echo $row['outpro_name']; ?>" />
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>外协签订时间：</label>
          </div>
          <div class="field">
            <input type="date" class="input" name="outpro_time" value="<?php echo $row['outpro_time']; ?>" style="width: 300px;"/>
            <div class="tips"></div>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="label">
            <label>外协工期：</label>
          </div>
          <div class="field">
            <input type="date" class="" name="outpro_start_time" value="<?php echo $row['outpro_start_time']; ?>"style="width: 300px; height: 45px;border-radius: 4px;" />
            &nbsp;&nbsp;&nbsp;——&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" class="" name="outpro_end_time" value="<?php echo $row['outpro_end_time']; ?>" style="width: 300px;height: 45px;border-radius: 4px;" />
            <div class="tips"></div>
          </div>
        </div>
        
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目经济信息</strong></div>
      <div class="body-content">
        <div class="form-group">
          <div class="label">
            <label>外协合同额：</label>
          </div>
          <div class="field">
            <input type="text" style="width: 300px;"  class="input" name="outpro_amount" value="<?php echo $row['outpro_amount']; ?>" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>外协决算额：</label>
          </div>
          <div class="field">
            <input type="text" style="width: 300px;" class="input" name="outpro_account" value="<?php echo $row['outpro_account']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>决算日期：</label>
          </div>
          <div class="field">
            <input type="date"class="input" name="outpro_acc_time" value="<?php echo $row['outpro_acc_time']; ?>"style="width: 300px;" />
          </div>
        </div>
        <div>
        <div class="form-group">
          <div class="label">
            <label>付款方式：</label>
          </div>
    

<p><label>第一笔款: </label><input type="date" name="outpro_paydate1" value="<?php echo $row['outpro_paydate1']; ?>" />--<input type="date" name="outpro_paydate2" value="<?php echo $row['outpro_paydate2']; ?>" />
金额: <input type="input" name="outpro_paymoney1" value="<?php echo $row['outpro_paymoney1']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>第二笔款: </label><input type="date" name="outpro_paydate3" value="<?php echo $row['outpro_paydate3']; ?>" />--<input type="date" name="outpro_paydate4" value="<?php echo $row['outpro_paydate4']; ?>" />
金额:、<input type="input" name="outpro_paymoney2" value="<?php echo $row['outpro_paymoney2']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>第三笔款: </label><input type="date" name="outpro_paydate5" value="<?php echo $row['outpro_paydate5']; ?>" />--<input type="date" name="outpro_paydate6" value="<?php echo $row['outpro_paydate6']; ?>" />
金额:<input type="input" name="outpro_paymoney3" value="<?php echo $row['outpro_paymoney3']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>第四笔款: </label><input type="date" name="outpro_paydate7" value="<?php echo $row['outpro_paydate7']; ?>" />--<input type="date" name="outpro_paydate8" value="<?php echo $row['outpro_paydate8']; ?>" />
金额:<input type="input" name="outpro_paymoney4" value="<?php echo $row['outpro_paymoney4']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>预留质量保证金: </label><input type="date" name="outpro_paydate9" value="<?php echo $row['outpro_paydate9']; ?>" />--<input type="date" name="outpro_paydate10" value="<?php echo $row['outpro_paydate10']; ?>" />
金额: <input type="input" name="outpro_paymoney5" value="<?php echo $row['outpro_paymoney5']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>退保证金: </label><input type="date" name="outpro_paydate11" value="<?php echo $row['outpro_paydate11']; ?>" />--<input type="date" name="outpro_paydate12" value="<?php echo $row['outpro_paydate12']; ?>" />
金额: <input type="input" name="outpro_paymoney6" value="<?php echo $row['outpro_paymoney6']; ?>" /></p>

        </div>
        </div>
         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     <?php } ?>
</div>
</form>

  <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit"value="确认修改" name="add">
            <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
          </div>

</body>
</html>