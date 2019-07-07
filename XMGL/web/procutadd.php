
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目成本信息</title>
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
                <div class="ctab-title clearfix">
                <h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
       
                <div class="ctab-Main-title">
                    <ul class="clearfix">
                                              <li><a href="prolist.php">项目列表</a></li>
                        <li><a href="proadd.php">项目添加</a></li>
                        <li class="cur"><a href="procutadd.php">项目切块录入</a></li>
                        <li> <a href="procutlist.php">项目切块列表</a></li>
                         <li><a href="outsceadd.php">项目外协添加</a></li>
                        <li><a href="outscelist.php">项目外协列表</a></li>
                       <!--  <li><a href="tasklist.php">中心下达任务情况</a></li>
                        <li><a href="taskadd.php">中心下达任务添加</a></li> -->
                    </ul>
                </div>
    <form method="post" class="form-x" id="submit" action="../admin/procutadd.php" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
        
            <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 成本切块</strong></div>
            <div class="body-content">
                <div class="form-group">
                    <div class="label">
                        <label>合同编号：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" style="width: 300px;" name="cutpronumber"/>
                        <div class="tips"></div>
                    </div>
                </div>

                  <div class="form-group">
                    <div class="label">
                        <label>切块额：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" style="width: 300px;" name="cutmoney" value="" />
                        <div class="tips"></div>
                    </div>
                </div>
                   <div class="form-group">
                    <div class="label">
                        <label>合同额：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" style="width: 300px;" name="promoney" value="" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>写入时间：</label>
                    </div>
                    <div class="field">
                        <input type="date" class="input" name="cuttime" id="date_info" value="" style="width: 300px;" />
                        <div class="tips"></div>
                    </div>
                </div>
<div>
              <div class="form-group">
          <div class="label">
            <label>生产费用：</label>
          </div>
<p><label>生产金额1: </label><input type="text" name="produce1" class="input1" />
部门：   <select  style="width: 100px;" name="depart1" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
            </select></p>
<div class="label"><label>      </label></div>
<p><label>生产金额2: </label><input type="text" name="produce2" class="input1" />
部门：   <select  style="width: 100px;" name="depart2" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
            </select></p>
        </div>
        </div>

 <div class="form-group">
          <div class="label">
            <label>经营费用：</label>
          </div>
<p><label>经营金额1: </label><input type="text" name="run1" class="input1" />
部门：   <select  style="width: 100px;" name="depart3" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
            </select></p>
<div class="label"><label>      </label></div>
<p><label>经营金额2: </label><input type="text" name="run2" class="input1" />
部门：   <select  style="width: 100px;"     name="depart4" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
            </select></p>
        </div>
        
                <div class="form-group">
                      <div class="label">
            <label>管理费用：</label>
          </div>
                 
  <p><label>管理金额: </label><input type="text" name="administration" class="input1" />
部门：   <select  style="width: 100px;" name="depart5" class="">
            <option value="民生地质中心">民生地质中心</option>
            </select></p>
      </div>

            </div>
                
    </div>
    <div class="field">
        <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加" name="add"></input>
        <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
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