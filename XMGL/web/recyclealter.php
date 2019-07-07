<!DOCTYPE html>
<html lang="zh-cn">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目发票信息</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
 <?php
   include_once '../sql.php';
   $id=$_GET['id'];
      $sql="select * from make where makeid=$id";
       $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result))
       {
        ?>
  <form method="post" class="form-x" id="submit" action="../admin/recyclealter.php"    enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
    <div class="panel admin-panel" style="border: 1px solid #000000;">
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改发票信息</strong></div>
      <div class="body-content">
           <div class="form-group">
          <div class="label">
            <label>开票日期：</label>
          </div>
          <div class="field">
            <input type="date" class="input" style="width: 500px;" name="maketime" value="<?php echo $row['maketime']; ?>" />
          </div>
        </div>

          <input type="hidden" name="number" value=<?php echo $row['makepronumber'];?>>
      
           <div class="form-group">
          <div class="label">
            <label>开票部门：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makedepart" value="<?php echo $row['makedepart']; ?>" />
          </div>
        </div>
         <div class="form-group">
          <div class="label">
            <label>开票人：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makeperson" value="<?php echo $row['makeperson']; ?>" />
          </div>
        </div>
         <div class="form-group">
          <div class="label">
            <label>开票类型：</label>
          </div> 
          <div class="field" >
            <select  name="maketype"class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
            <option value="开票收款">开票收款</option>
            <option value="开票挂账">开票挂账</option>
            <option value="收部分款开部分票">收部分款开部分票</option>
            <option value="收部分款开全票">收部分款开全票</option>
            <option value="<?php echo $row['maketype']; ?>"><?php echo $row['maketype']; ?></option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>开票额：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makemoney" value="<?php echo $row['makemoney']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>到账额：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="tomoney" value="<?php echo $row['tomoney']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>到账时间：</label>
          </div>
          <div class="field">
            <input type="date" class="input" style="width: 500px;" name="totime" value="<?php echo $row['totime']; ?>" />
          </div>
        </div>




</form>
<?php }?>
  <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认修改" name="add"></input>
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