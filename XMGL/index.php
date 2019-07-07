<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目管理中心</title>  
    <link rel="stylesheet" href="web/css/pintuer.css">
    <link rel="stylesheet" href="web/css/admin.css">
    <script src="web/js/jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="web/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />项目管理中心</h1>
  </div>
 </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>用户管理</h2>
  <ul >
    <li><a href="web/useradd.php" target="right"><span class="icon-caret-right"></span>人员录入</a></li>
    <li><a href="userlist.html" target="right"><span class="icon-caret-right"></span>人员查询</a></li>
    <li><a href="userpass.html" target="right"><span class="icon-caret-right"></span>人员修改</a></li>  
    
  </ul>   
    
  <h2><span class="icon-user"></span>项目情况</h2>
  <ul >
    <li><a href="web/proadd.php" target="right"><span class="icon-caret-right"></span>项目信息录入</a></li>
    <li><a href="web/prolist.php" target="right"><span class="icon-caret-right"></span>项目信息列表</a></li>   
  </ul>   

   
  <h2><span class="icon-user"></span>任务发布</h2>
  <ul >
    <li><a href="task.html" target="right"><span class="icon-caret-right"></span>任务发布录入</a></li>
    <li><a href="taskadd.html" target="right"><span class="icon-caret-right"></span>任务发布修改</a></li>
    <li><a href="taskquery.html" target="right"><span class="icon-caret-right"></span>任务发布查询</a></li>   
  </ul> 

  <h2><span class="icon-user"></span>资金切块</h2>
  <ul>
    <li><a href="cut.html" target="right"><span class="icon-caret-right"></span>切块录入</a></li>
    <li><a href="cutquery.html" target="right"><span class="icon-caret-right"></span>切块查询</a></li>
    <li><a href="cutadd.html" target="right"><span class="icon-caret-right"></span>切块修改</a></li>        
  </ul>  
  <h2><span class="icon-user"></span>资金回收</h2>
  <ul>
    <li><a href="web/recycle.php" target="right"><span class="icon-caret-right"></span>项目收款</a></li>
    
  </ul>  
   <h2><span class="icon-user"></span>费用支出</h2>
  <ul>
    <li><a href="web/pro_expend_add.php" target="right"><span class="icon-caret-right"></span>报销录入</a></li>
    <li><a href="web/pro_expend_list.php" target="right"><span class="icon-caret-right"></span>报销查询</a></li>  
  </ul>  
   <h2><span class="icon-user"></span>成本核算</h2>
  <ul >
    <li><a href="" target="right"><span class="icon-caret-right"></span>整体盈亏统计</a></li>
    <li><a href="" target="right"><span class="icon-caret-right"></span>分门别类统计</a></li> 
     <li><a href="" target="right"><span class="icon-caret-right"></span>按照科目统计</a></li> 
      <li><a href="" target="right"><span class="icon-caret-right"></span>三金一费统计</a></li>  
  </ul> 
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
    $(this).next().slideToggle(200);  
    $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
      $("#a_leader_txt").text($(this).text());
      $(".leftnav ul li a").removeClass("on");
    $(this).addClass("on");
  })
});
</script>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>