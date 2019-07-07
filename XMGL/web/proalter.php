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
   <?php
   include_once '../sql.php';
   $id=$_GET['id'];
      $sql="select * from project where projectid=$id";
       $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result))
       {
        ?>
  <form method="post" class="form-x" id="submit" action="../admin/proalter.php"    enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
    <div class="panel admin-panel" style="border: 1px solid #000000;">
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目基本信息</strong><span class="icon-pencil-square-o" style="float:right;"><a href="outscelist.php?id=<?php echo $row['projectid']; ?>">外协列表</a></span>&nbsp<span class="icon-pencil-square-o" style="float:right;"><a href="outsceadd.php?id=<?php echo $row['projectid'] ?>&name=<?php echo $row['pro_name']; ?>">添加外协</a></span></div>
      <div class="body-content">
        <div class="form-group">
          <div class="label">
            <label>合同编号：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 300px;" name="pro_number" value="<?php echo $row['pro_number']; ?>" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>项目名称：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="pro_name" value="<?php echo $row['pro_name'];?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>来源：</label>
          </div> 
          <div class="field" >
            <select name="source"class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
            <option value="合同">合同</option>
            <option value="备案">备案</option>
            <option value="上级下达">上级下达</option>
            <option value="其他">其他</option>
            <option value="" selected='selected'><?php echo $row['source']; ?></option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>性质：</label>
          </div>
          <div class="field" >
            <select  name="nature"class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
            <option value="市场招标">市场招标</option>
            <option value="财政招标">财政招标</option>
            <option value="合作挂靠">合作挂靠</option>
            <option value="其他">其他</option>
            <option value="" selected="selected"><?php echo $row['nature']; ?></option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
           <label>类型：</label>
          </div> 

            <select  class="input" name="pro_type"style="width: 500px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
            <option value="地质灾害评估">地质灾害评估</option>
            <option value="地质灾害勘察">地质灾害勘察</option> 
            <option value="地质灾害设计">地质灾害设计</option>
            <option value="地质勘察（地质找矿）">地质勘察（地质找矿）</option>
            <option value="压覆矿产资源调查">压覆矿产资源调查</option>
            <option value="地下水评价">地下水评价</option>
            <option value="济南泉水环境评价">济南泉水环境评价</option>
            <option value="水文地质勘察">水文地质勘察</option>
            <option value="环境地质调查">环境地质调查</option>
            <option value="土地开发利用和矿山恢复治理方案编制（两案编制）">土地开发利用和矿山恢复治理方案编制（两案编制）</option>
            <option value="遥感地质">遥感地质</option>
            <option value="测量">测量</option>
            <option value="储量核实">储量核实</option>
            <option value="其他">其他</option>
            <option value="" selected="selected"><?php echo $row['pro_type'];?></option>
            </select>
          </div>
      

        <div class="form-group">
          <div class="label">
            <label>委托单位：</label>
          </div>
          <div class="field">
            <input type="text" class="input" name="unit_name" value="<?php echo $row['unit_name']; ?>" />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>委托单位行业：</label>
          </div>
          <div class="field">
            <select  name="unit_industy"class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
            <option value="政府部门">政府部门</option>
            <option value="国土">国土</option>
            <option value="规划">规划</option>
            <option value="水利">水利</option>
            <option value="建筑">建筑</option>
            <option value="交通">交通</option>
            <option value="环保">环保</option>
            <option value="电力">电力</option>
            <option value="能源">能源</option>
            <option value="控股投资">控股投资</option>
            <option value="其他">其他</option>
            <option value="" selected='selected'> <?php echo $row['unit_industy']; ?> </option>
            </select>
          </div>
        </div> 

        <div class="form-group">
          <div class="label">
            <label>签订时间：</label>
          </div>
          <div class="field">
            <input type="date" class="input" name="time" value="<?php echo $row['time']; ?>" style="width: 300px;"/>
            <div class="tips"></div>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="label">
            <label>工期：</label>
          </div>
          <div class="field">
            <input type="date" class="" name="startdate" value="<?php echo $row['startdate']; ?>"style="width: 300px; height: 45px;border-radius: 4px;" />
            &nbsp;&nbsp;&nbsp;——&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" class="" name="enddate" value="<?php echo $row['enddate'];?>" style="width: 300px;height: 45px;border-radius: 4px;" />
            <div class="tips"></div>
          </div>
        </div>
       
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目经济信息</strong></div>
      <div class="body-content">
        <div class="form-group">
          <div class="label">
            <label>合同额：</label>
          </div>
          <div class="field">
            <input type="text" style="width: 300px;"  class="input" name="amount" value="<?php echo $row['amount']; ?>" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>决算额：</label>
          </div> 
          <div class="field">
            <input type="text" style="width: 300px;" class="input" name="account" value="<?php  echo $row['account']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>决算日期：</label>
          </div>
          <div class="field">
            <input type="date"class="input" name="acc_time" value="<?php echo $row['acc_time']; ?>"style="width: 300px;" />
          </div>
        </div>
        <div>
        <div class="form-group">
          <div class="label">
            <label>付款方式：</label>
          </div>

<p><label>第一笔款: </label><input type="date" name="paydate1" value="<?php echo $row['paydate1']; ?>" />--<input type="date" name="paydate2" value="<?php echo $row['paydate2']; ?>" />
金额: </label><input type="input" name="paymoney1" value="<?php echo $row['paymoney1']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>第二笔款: </label><input type="date" name="paydate3" value="<?php echo $row['paydate3']; ?>" />--<input type="date" name="paydate4" value="<?php echo $row['paydate4']; ?>" />
金额: </label><input type="input" name="paymoney2" value="<?php echo $row['paymoney2']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>第三笔款: </label><input type="date" name="paydate5" value="<?php echo $row['paydate5']; ?>" />--<input type="date" name="paydate6" value="<?php echo $row['paydate6']; ?>" />
金额: </label><input type="input" name="paymoney3" value="<?php echo $row['paymoney3']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>第四笔款: </label><input type="date" name="paydate7" value="<?php echo $row['paydate7']; ?>" />--<input type="date" name="paydate8" value="<?php echo $row['paydate8']; ?>" />
金额: </label><input type="input" name="paymoney4" value="<?php echo $row['paymoney4']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>退保证金: </label><input type="date" name="paydate9" value="<?php echo $row['paydate9']; ?>" />--<input type="date" name="paydate10" value="<?php echo $row['paydate10']; ?>" />
金额: </label><input type="input" name="paymoney5" value="<?php echo $row['paymoney5']; ?>" /></p>

        </div>
        </div>
    
      <div>
        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 三金一费信息</strong></div>
      <div class="body-content">
        <div class="form-group">
          <div class="label">
            <label>投标保证金：</label>
          </div>

<p><label>时间: </label><input type="date" name="remitdate1" value="<?php echo $row['remitdate1']; ?>" />汇款金额: </label><input type="input" name="remit1"  value="<?php echo $row['remit1']; ?>" />
汇入单位：<input type="input" name="remiter1"  value="<?php echo $row['remiter1']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate1"  value="<?php echo $row['returndate1']; ?>" />回款金额: </label><input type="input" name="return1"  value="<?php echo $row['return1']; ?>" />
付款单位：<input type="input" name="returner1"  value="<?php echo $row['returner1']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate1"  value="<?php echo $row['rollindate1']; ?>" />转入金额: </label><input type="input" name="rollin1"  value="<?php echo $row['rollin1']; ?>" />
转入类型：   <select  style="width: 135px;" name="totype1" >
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            <option value="" selected="selected"><?php echo $row['totype1']; ?></option>
            </select></p>
</div>
</div>
</div>
            <div>
              <div class="form-group">
          <div class="label">
            <label>合同履约金：</label>
          </div>       
<p><label>时间: </label><input type="date" name="remitdate2"  value="<?php echo $row['remitdate2']; ?>" />汇款金额: </label><input type="input" name="remit2"  value="<?php echo $row['remit2']; ?>" />
汇入单位：<input type="input" name="remiter2"  value="<?php echo $row['remiter2']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate2"  value="<?php echo $row['returndate2']; ?>" />回款金额: </label><input type="input" name="return2"  value="<?php echo $row['return2']; ?>" />
付款单位：<input type="input" name="returner2"  value="<?php echo $row['returner2']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate2"  value="<?php echo $row['rollindate2']; ?>" />转入金额: </label><input type="input" name="rollin2"  value="<?php echo $row['rollin2']; ?>" />
转入类型：   <select  style="width: 135px;" name="totype2"> 
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            <option value="" selected="selected"><?php echo $row['totype2']; ?></option>
            </select></p>

        </div>
        </div>
     
           <div class="form-group">
          <div class="label">
            <label>质量保证金：</label>
          </div>
<p><label>时间: </label><input type="date" name="remitdate3"  value="<?php echo $row['remitdate3']; ?>" />汇款金额: </label><input type="input" name="remit3" value="<?php echo $row['remit3']; ?>" />
汇入单位：<input type="input" name="remiter3" value="<?php echo $row['remiter3']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate3" value="<?php echo $row['returndate3']; ?>" />回款金额: </label><input type="input" name="return3" value="<?php echo $row['return3']; ?>" />
付款单位：<input type="input" name="returner3" value="<?php echo $row['returner3']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate3" value="<?php echo $row['rollindate3']; ?>" />转入金额: </label><input type="input" name="rollin3" value="<?php echo $row['rollin3']; ?>" />
转入类型：   <select  style="width: 135px;" name="totype3">
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            <option value="" selected='selected'><?php echo $row['totype3']; ?></option>
            </select></p>
</div>
</div>
  <div>
   <div class="form-group">
          <div class="label">
            <label>中标服务费：</label>
          </div>
<p><label>时间: </label><input type="date" name="remitdate4" value="<?php echo $row['remitdate4']; ?>" />汇款金额: </label><input type="input" name="remit4" value="<?php echo $row['remit4']; ?>" />
汇入单位：<input type="input" name="remiter4" value="<?php echo $row['remiter4']; ?>"  /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate4" value="<?php echo $row['returndate4']; ?>" />回款金额: </label><input type="input" name="return4" value="<?php echo $row['return4']; ?>" />
付款单位：<input type="input" name="returner4" value="<?php echo $row['returner4']; ?>" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate4" value="<?php echo $row['rollindate4']; ?>" />转入金额: </label><input type="input" name="rollin4" value="<?php echo $row['rollin4']; ?>" />
转入类型：   <select  style="width: 135px;" name="totype4">
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            <option value="" selected="selected"> <?php echo $row['totype4']; ?></option>
            </select></p>
</div>
</div>
<input type="hidden" name="id" value="<?php echo $row['projectid']; ?>">
</form>
<?php } ?>
   <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认修改" name="add">
              <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
          </div>
</body>
</html>