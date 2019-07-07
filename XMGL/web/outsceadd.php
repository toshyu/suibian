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
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
<body>
    <div class="super-content RightMain" id="RightMain">
        <!--header-->
        <div class="superCtab">
            <div class="ctab-title clearfix">
                <h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
       
                <div class="ctab-Main-title">
                    <ul class="clearfix">
                                          <li ><a href="prolist.php">项目列表</a></li>
                        <li><a href="proadd.php">项目添加</a></li>
                        <li><a href="procutadd.php ">项目切块录入</a></li>
                        <li> <a href="procutlist.php ">项目切块列表</a></li>
                         <li class="cur"><a href="outsceadd.php">项目外协添加</a></li>
                        <li><a href="outscelist.php">项目外协列表</a></li>
                      <!--   <li><a href="tasklist.php">中心下达任务情况</a></li>
                        <li><a href="taskadd.php">中心下达任务添加</a></li> -->

                    </ul>
                </div>
  <form method="post" class="form-x" id="submit" action="../admin/outsce_add.php"    enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
    <!-- <div>
      <span><strong><?php //s$id=$_GET['id'];$name=$_GET['name']; echo $name.'项目外协添加'; ?></strong></span>
    </div> --><br>
   
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 外协基本信息</strong></div>
      <div class="body-content">
         <div class="form-group">
          <div class="label">
            <label>外协单位名称：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="outpro_unit" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>外协合同编号：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 300px;" name="outpro_number" value="" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>外协项目名称：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="outpro_name" value="" />
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>外协签订时间：</label>
          </div>
          <div class="field">
            <input type="date" class="input" name="outpro_time" value="" style="width: 300px;"/>
            <div class="tips"></div>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="label">
            <label>外协工期：</label>
          </div>
          <div class="field">
            <input type="date"name="outpro_start_time" value="开始时间"class="input1" />
            &nbsp;&nbsp;&nbsp;——&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name="outpro_end_time" value="结束时间"  class="input1"/>
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
            <input type="text" style="width: 300px;"  class="input" name="outpro_amount" value="" />
            <div class="tips"></div>
          </div>
        </div>
      
        <div class="form-group">
          <div class="label">
            <label>外协决算额：</label>
          </div>
          <div class="field">
            <input type="text" style="width: 300px;" class="input" name="outpro_account" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>决算日期：</label>
          </div>
          <div class="field">
            <input type="date"class="input" name="outpro_acc_time" value=""style="width: 300px;" />
          </div>
        </div>
        <div>
        <div class="form-group">
          <div class="label">
            <label>付款方式：</label>
          </div>
    

<p><label>第一笔款: </label><input type="date" name="outpro_paydate1"class="input1" />--<input type="date" name="outpro_paydate2"class="input1" />
金额: <input type="input" name="outpro_paymoney1" class="input1"/></p>
<div class="label"><label>      </label></div>
<p><label>第二笔款: </label><input type="date" name="outpro_paydate3"class="input1" />--<input type="date" name="outpro_paydate4"class="input1" />
金额:、<input type="input" name="outpro_paymoney2"class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>第三笔款: </label><input type="date" name="outpro_paydate5"class="input1" />--<input type="date" name="outpro_paydate6"class="input1" />
金额:<input type="input" name="outpro_paymoney3"class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>第四笔款: </label><input type="date" name="outpro_paydate7"class="input1" />--<input type="date" name="outpro_paydate8"class="input1" />
金额:<input type="input" name="outpro_paymoney4"class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>预留质量保证金: </label><input type="date" name="outpro_paydate9"class="input1" />--<input type="date" name="outpro_paydate10"class="input1" />
金额: <input type="input" name="outpro_paymoney5"class="input1" /></p>
<div class="label"><label>      </label></div>
<p><label>退保证金: </label><input type="date" name="outpro_paydate11"class="input1" />--<input type="date" name="outpro_paydate12"class="input1" />
金额: <input type="input" name="outpro_paymoney6"class="input1" /></p>

        </div>
        </div>
         
     <input type="hidden" name="id" value="<?php echo $id; ?>">
</div>


  <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加" name="add"></input>
              <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
          </div></form>
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