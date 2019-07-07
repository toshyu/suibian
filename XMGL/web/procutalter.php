
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
      
                 <?php
   include_once '../sql.php';
   $id=$_GET['id'];
      $sql="select * from cut where cutid=$id";
            $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result))
       {
        ?>
    <form method="post" class="form-x" id="submit" action="../admin/procutalter.php" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
        
            <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 成本切块</strong></div>
            <div class="body-content">
              <div class="form-group">
                    <div class="label">
                        <label>合同编号：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" style="width: 300px;" name="cutpronumber" value="<?php echo $row['cutpronumber'];?>"/>
                        <div class="tips"></div>
                    </div>
                </div>

                  <div class="form-group">
                    <div class="label">
                        <label>切块额：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" style="width: 300px;" name="cutmoney" value="<?php echo $row['cutmoney'];?>" />
                        <div class="tips"></div>
                    </div>
                </div>
                   <div class="form-group">
                    <div class="label">
                        <label>合同额：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" style="width: 300px;" name="promoney" value="<?php echo $row['promoney'];?>" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>写入时间：</label>
                    </div>
                    <div class="field">
                        <input type="date" class="input" name="cuttime" id="date_info" value="<?php echo $row['cuttime'];?>" style="width: 300px;" />
                        <div class="tips"></div>
                    </div>
                </div>
<div>
              <div class="form-group">
          <div class="label">
            <label>生产费用：</label>
          </div>
<p><label>生产金额1: </label><input type="text" name="produce1" class="input1" value="<?php echo $row['produce1']; ?>" />
    <label>所占比例: </label><input type="text"  class="input1" value="<?php echo $row['producepce1']; ?>" />
部门：   <select  style="width: 100px;" name="depart1" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
            <option value="<?php echo $row['depart1'];?>"><?php echo $row['depart1'];?></option>
            </select></p>
<div class="label"><label>      </label></div>
<p><label>生产金额2: </label><input type="text" name="produce2" class="input1" value="<?php echo $row['produce2']; ?>" />
     <label>所占比例: </label><input type="text" class="input1" value="<?php echo $row['producepce2']; ?>" />
部门：   <select  style="width: 100px;" name="depart2" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
              <option value="<?php echo $row['depart2'];?>"><?php echo $row['depart2'];?></option>
            </select></p>
        </div>
        </div>

 <div class="form-group">
          <div class="label">
            <label>经营费用：</label>
          </div>
<p><label>经营金额1: </label><input type="text" name="run1" class="input1"value="<?php echo $row['run1']; ?>"  />
     <label>所占比例: </label><input type="text"  class="input1" value="<?php echo $row['runpce1']; ?>" />
部门：   <select  style="width: 100px;" name="depart3" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
              <option value="<?php echo $row['depart3'];?>"><?php echo $row['depart3'];?><?php echo $row['depart3'];?></option>
            </select></p>
<div class="label"><label>      </label></div>
<p><label>经营金额2: </label><input type="text" name="run2" class="input1"value="<?php echo $row['run2']; ?>"  />
     <label>所占比例: </label><input type="text" class="input1" value="<?php echo $row['runpce2']; ?>" />
部门：   <select  style="width: 100px;"     name="depart4" class="">
            <option value="中心办公室">中心办公室</option>
            <option value="地质环境所">地质环境所</option>
            <option value="地质遥感所">地质遥感所</option>
            <option value="水文地质所">水文地质所</option>
            <option value="胶东事业部">胶东事业部</option>
            <option value="<?php echo $row['depart4'];?>"><?php echo $row['depart3'];?><?php echo $row['depart4'];?></option>
            </select></p>
        </div>
        
                <div class="form-group">
                      <div class="label">
            <label>管理费用：</label>
          </div>
                 
  <p><label>管理金额: </label><input type="text" name="administration" class="input1" value="<?php echo $row['administration']; ?>" />
     <label>所占比例: </label><input type="text"  class="input1" value="<?php echo $row['administrationpce']; ?>" />
部门：   <select  style="width: 100px;" name="depart5" class="">
            <option value="民生地质中心">民生地质中心</option>
            </select></p>
      </div>
                </div>
            <input type="hidden" name="id" value="<?php echo $row['cutid'];?>">
                <?php }?>
    </div>
    <div class="field">
        <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认修改" name="add"></input>
        <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
    </div></form>
    <script>
   
    </script>
</body>
</html>