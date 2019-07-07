<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目发票信息</title>
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
                         <li ><a href="recyclelist.php">发票列表</a></li>
                        <li class="cur"><a href="recycleadd.php">发票添加</a></li>
                        <li><a href="procut.php">xxxx</a></li>
                        <li> <a href="procutlist.php">xxxx</a></li>
                        <li><a href="wenzhang_kehu.html">xxxx</a></li>
                        <li><a href="wenzhang_remen.html">xxxx</a></li>
                        <li><a href="wenzhang_aboutus.html">xxxx</a></li>
                        <li><a href="wenzhang_lianxi.html">xxxx</a></li>
                    </ul>
                       
                    </ul>
                </div>
  <form method="post" class="form-x" id="submit" action="../admin/recycleadd.php"    enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
    <div class="panel admin-panel" style="border: 1px solid #000000;">
      <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 添加发票信息</strong></div>
      <div class="body-content">
           <div class="form-group">
          <div class="label">
            <label>开票日期：</label>
          </div>
          <div class="field">
            <input type="date" class="input" style="width: 500px;" name="maketime" value="" />
          </div>
        </div>
           <div class="form-group">
          <div class="label">
            <label>项目编号：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makepronumber" value="" />
          </div>
        </div>
        
           <div class="form-group">
          <div class="label">
            <label>开票部门：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makedepart" value="" />
          </div>
        </div>
         <div class="form-group">
          <div class="label">
            <label>开票人：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makeperson" value="" />
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
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>开票额：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="makemoney" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>到账额：</label>
          </div>
          <div class="field">
            <input type="text" class="input" style="width: 500px;" name="tomoney" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>到账时间：</label>
          </div>
          <div class="field">
            <input type="date" class="input" style="width: 500px;" name="totime" value="" />
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