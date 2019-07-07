<?php
include_once'../sql.php';
$id=$_GET['id'];
$sql="select * from reimburse where reid=$id";
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
    <title>项目费用支出</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
	<table>
    
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 报销项目信息</strong></div>
          <div class="label">
            <label class="input">报销合同编号：   <?php echo $row['repronumber']; ?> </label>
          </div>
      
          <div class="label">
            <label class="input">报销项目名称：   <?php echo $row['reproname']; ?></label>
          </div>

          <div class="label">
            <label class="input">所属部门：       <?php echo $row['redepart']; ?></label>
          </div> 
          
          <div class="label">
            <label class="input">报账人：       <?php echo $row['reusername']; ?></label>
          </div>
     
          <div class="label">
           <label class="input">报账时间：        <?php echo $row['retime']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">报销分类：   <?php echo $row['respecies']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">上交院有关费用:<?php echo $row['upper']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">管理费：   <?php echo $row['management']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">房屋使用、水电相关费用:<?php echo $row['life']; ?></label>
          </div>
     
          <div class="label">
            <label class="input">设备占用费：     <?php echo $row['occu']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">设备折旧费：     <?php echo $row['deprec']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">其它：   <?php echo $row['upother']; ?></label>
          </div>
          <div class="label">
            <label class="input">外协付款：   <?php echo $row['outfee']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">办公费:<?php echo $row['office']; ?></label>
          </div>
     
          <div class="label">
            <label class="input">邮电费：     <?php echo $row['post']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">差旅费：     <?php echo $row['costs']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">交通费：   <?php echo $row['traffic']; ?></label>
          </div>
          <div class="label">
            <label class="input">住宿费：   <?php echo $row['house']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">培训费:<?php echo $row['train']; ?></label>
          </div>
     
          <div class="label">
            <label class="input">会议费：     <?php echo $row['meeting']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">会议场地租赁费：     <?php echo $row['meetsite']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">住宿费：   <?php echo $row['meethouse']; ?></label>
          </div>
          <div class="label">
            <label class="input">印刷打印费：   <?php echo $row['meetprint']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">车辆维修费:<?php echo $row['vehide']; ?></label>
          </div>
     
          <div class="label">
            <label class="input">专能通讯网费：     <?php echo $row['called']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">专用燃料费：     <?php echo $row['fuel']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">专用材料费：   <?php echo $row['material']; ?></label>
          </div>
          <div class="label">
            <label class="input">出差不煮费用：   <?php echo $row['subsidy']; ?></label>
          </div>
         
          <div class="label">
            <label class="input">租赁费:<?php echo $row['lease']; ?></label>
          </div>
     
          <div class="label">
            <label class="input">中标服务费：     <?php echo $row['rebid']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">税费：     <?php echo $row['tax']; ?></label>
          </div>
          
          <div class="label">
            <label class="input">其它：   <?php echo $row['othername']; ?></label>
          </div>
           <div class="label">
            <label class="input">总计：   <?php echo $row['allmoney']; ?></label>
          </div>
          
        

   <a  class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>

</table>
</body>
</html>
150