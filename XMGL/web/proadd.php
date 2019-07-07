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
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
 
</head>
<body>
    <div class="super-content RightMain" id="RightMain">
        <!--header-->
        <div class="superCtab">
            <div class="ctab-title clearfix">
                <h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
       
                <div class="ctab-Main-title">
                    <ul class="clearfix">
                                             <li><a href="prolist.php">项目列表</a></li>
                        <li class="cur"><a href="proadd.php">项目添加</a></li>
                        <li><a href="procutadd.php">项目切块录入</a></li>
                        <li> <a href="procutlist.php">项目切块列表</a></li>
                         <li><a href="outsceadd.php">项目外协添加</a></li>
                        <li><a href="outscelist.php">项目外协列表</a></li>
                        <!-- <li><a href="tasklist.php">中心下达任务情况</a></li>
                        <li><a href="taskadd.php">中心下达任务添加</a></li> -->

                    </ul>
                </div>
  <form method="post" class="form-x" id="submit" action="../admin/proadd.php"    enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
 
          <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目基本信息</strong></div>
      <div class="body-content">
        <div class="form-group">
          <div class="label">
            <label>合同编号：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 300px;" name="pro_number" value="" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>项目名称：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="pro_name" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>来源：</label>
          </div> 
          <div class="field" >
            <select  name="source"class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
            <option value="合同">合同</option>
            <option value="备案">备案</option>
            <option value="上级下达">上级下达</option>
            <option value="其他">其他</option>
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
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
           <label>类型：</label>
          </div>
          <div class="field" >
            <select class="input" name="pro_type"style="width: 500px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
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
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>委托单位：</label>
          </div>
          <div class="field">
            <input type="text" class="input" name="unit_name" value="" />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>委托单位行业：</label>
          </div>
          <div class="field">
            <select name="unit_industy"class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
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
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>签订时间：</label>
          </div>
          <div class="field">
            <input type="date" class="input" name="time" value="" style="width: 300px;"/>
            <div class="tips"></div>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="label">
            <label>工期：</label>
          </div>
          <div class="field">
            <input type="date" class="" name="startdate" value="开始时间"style="width: 300px; height: 45px;border-radius: 4px;" />
            &nbsp;&nbsp;&nbsp;——&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" class="" name="enddate" value="结束时间" style="width: 300px;height: 45px;border-radius: 4px;" />
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
            <input type="text" style="width: 300px;"  class="input" name="amount" value="" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>决算额：</label>
          </div>
          <div class="field">
            <input type="text" style="width: 300px;" class="input" name="account" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>决算日期：</label>
          </div>
          <div class="field">
            <input type="date"class="input" name="acc_time" value=""style="width: 300px;" />
          </div>
        </div>
        <div>
        <div class="form-group">
          <div class="label">
            <label>付款方式：</label>
          </div>
    

<p><label>第一笔款: </label><input type="date" name="paydate1" class="input1" />--<input type="date" name="paydate2" class="input1" />
金额: </label><input type="input" name="paymoney1" class="input1" /></p>
<div class="label"><label></label></div>
<p><label>第二笔款: </label><input type="date" name="paydate3" class="input1"/>--<input type="date" name="paydate4" class="input1" />
金额: </label><input type="input" name="paymoney2"  class="input1"/></p>
<div class="label"><label>      </label></div>
<p><label>第三笔款: </label><input type="date" name="paydate5" class="input1" />--<input type="date" name="paydate6" class="input1" />
金额: </label><input type="input" name="paymoney3" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>第四笔款: </label><input type="date" name="paydate7" class="input1" />--<input type="date" name="paydate8" class="input1" />
金额: </label><input type="input" name="paymoney4" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>退保证金: </label><input type="date" name="paydate9" class="input1" />--<input type="date" name="paydate10" class="input1" />
金额: </label><input type="input" name="paymoney5" class="input1" /></p>

        </div>
        </div>
         
      <div>
        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 三金一费信息</strong></div>
      <div class="body-content">
        <div class="form-group">
          <div class="label">
            <label>投标保证金：</label>
          </div>
         
<p><label>时间: </label><input type="date" name="remitdate1" class="input1" />汇款金额: </label><input type="input" name="remit1" class="input1" />
汇入单位：<input type="input" name="remiter1" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate1" class="input1" />回款金额: </label><input type="input" name="return1" class="input1" />
付款单位：<input type="input" name="returner1" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate1" class="input1" />转入金额: </label><input type="input" name="rollin1" class="input1" />
转入类型：   <select  style="width: 135px;" name="totype1" class="">
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            </select></p>

</div>
</div>
</div>
            <div>
              <div class="form-group">
          <div class="label">
            <label>合同履约金：</label>
          </div>
         
<p><label>时间: </label><input type="date" name="remitdate2" class="input1" />汇款金额: </label><input type="input" name="remit2" class="input1" />
汇入单位：<input type="input" name="remiter2" class="input1"/></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate2" class="input1" />回款金额: </label><input type="input" name="return2" class="input1" />
付款单位：<input type="input" name="returner2" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate2" class="input1" />转入金额: </label><input type="input" name="rollin2" class="input1" />
转入类型：   <select  style="width: 135px;" name="totype2" class="">
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            </select></p>

        </div>
        </div>
        <div>
           <div class="form-group">
          <div class="label">
            <label>质量保证金：</label>
          </div>
<p><label>时间: </label><input type="date" name="remitdate3" class="input1" />汇款金额: </label><input type="input" name="remit3" class="input1" />
汇入单位：<input type="input" name="remiter3" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate3" class="input1" />回款金额: </label><input type="input" name="return3" class="input1" />
付款单位：<input type="input" name="returner3" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate3" class="input1" />转入金额: </label><input type="input" name="rollin3" class="input1" />
转入类型：   <select  style="width: 135px;" name="totype3" class="">
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            </select></p>
</div>
</div>
  <div>
   <div class="form-group">
          <div class="label">
            <label>中标服务费：</label>
          </div>
<p><label>时间: </label><input type="date" name="remitdate4" class="input1" />汇款金额: </label><input type="input" name="remit4" class="input1" />
汇入单位：<input type="input" name="remiter4" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="returndate4" class="input1" />回款金额: </label><input type="input" name="return4" class="input1" />
付款单位：<input type="input" name="returner4" class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>时间: </label><input type="date" name="rollindate4" class="input1" />转入金额: </label><input type="input" name="rollin4" class="input1" />
转入类型：   <select  style="width: 135px;" name="totype4" class="">
            <option>投标保证金</option> 
            <option>合同履约金</option>
            <option>质量保证金</option>
            <option>中标服务费</option>
            </select></p>
</div>
</div>
</form>

  <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加" name="add"></input>
            <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
          </div>
 <script>
    $(document).ready(function() {
        var time = new Date();
        var day = ("0" + time.getDate()).slice(-2);
        var month = ("0" + (time.getMonth() + 1)).slice(-2);
        var today = time.getFullYear() + "-" + (month) + "-" + (day);
        $('input[type="date"]').val(today);
    });
    </script>
</body>
</html>