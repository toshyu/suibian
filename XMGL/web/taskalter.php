<!DOCTYPE html>
<html lang="zh-cn">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>中心任务修改</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
    <?php
   include_once '../sql.php';
   $id=$_GET['id'];

      $sql="select * from task where task_id=$id";
       $result=mysql_query($sql);
  
      while ($row = mysql_fetch_assoc($result))
      {
        ?>
     
 <form method="post" class="form-x" id="submit" action="../admin/taskalter.php" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
        
            <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 中心下达任务情况</strong></div>
            <div class="body-content">
                <div class="form-group">
                    <div class="label">
                        <label>中心内部切块表：</label>
                    </div>
                    <div class="field">
                       
                        有<input type="radio" style="width:30px;" name="task_table" checked="<?php if($row['checked']===有){ echo 'checked';} ?>"/>
                        否<input type="radio" style="width:30px;" name="task_table" checked="<?php if($row['checked']===否){ echo 'checked';} ?>" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>中心下达任务书：</label>
                    </div>
                    <div class="field">
                        已下达<input type="radio" style="width:30px;" name="task_book" value="<?php echo $row['task_book']; ?>" />
                        未下达<input type="radio" style="width:30px;" name="task_book" value="<?php echo $row['task_book'];?>" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>兴趣小组：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" name="task_group" style="width:300px;" value="<?php echo $row['task_group']; ?>" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>小组组长：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" name="task_gr_leader" value="<?php echo $row['task_gr_leader']; ?>" style="width: 300px;" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>项目经理：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" name="task_gr_pm" value="<?php echo $row['task_gr_pm']; ?>" style="width: 300px;" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>项目部实施计划：</label>
                    </div>
                    <div class="field">
                        提交<input type="radio" style="width:30px;" name="task_plan" value="<?php echo $row['task_plan'] ?>" />
                        未提交<input type="radio" style="width:30px;" name="task_plan" value="<?php echo $row['task_plan'] ?>" />
                        <div class="tips"></div>
                    </div>
                </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $row['task_id']; ?>"> 
   
     <?php } ?>



  <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit"value="确认修改" name="add">
            <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
          </div> </form>

</body>
</html>