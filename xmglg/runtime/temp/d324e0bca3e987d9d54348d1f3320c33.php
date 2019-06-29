<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\pro_task\proadd.html";i:1561698544;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目任务信息</title>
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
                    <li><a href="tasklist.php">中心下达任务情况</a></li>
                    <li class="cur"><a href="taskadd.php">中心下达任务添加</a></li>
                    <li><a href="">xxxx</a></li>
                    <li><a href="">xxxx</a></li>
                    <li><a href="">xxxx</a></li>
                    <li> <a href="">xxxx</a></li>
                    <li><a href="">xxxx</a></li>
                    <li><a href="">xxxx</a></li>
                </ul>
            </div>
            <form method="post" class="form-x" id="submit" action="../admin/taskadd.php" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 中心下达任务情况</strong></div>
                <div class="body-content">
                    <div class="form-group">
                        <div class="label">
                            <label>中心内部切块表：</label>
                        </div>
                        <div class="field">
                            有<input type="radio" style="width:30px;" name="task_table" value="有" />
                            否<input type="radio" style="width:30px;" name="task_table" value="否" />
                            <div class="tips"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>中心下达任务书：</label>
                        </div>
                        <div class="field">
                            已下达<input type="radio" style="width:30px;" name="task_book" value="已下达" />
                            未下达<input type="radio" style="width:30px;" name="task_book" value="未下达" />
                            <div class="tips"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>兴趣小组：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" name="task_group" style="width:300px;" value="" />
                            <div class="tips"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>小组组长：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" name="task_gr_leader" value="" style="width: 300px;" />
                            <div class="tips"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>项目经理：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" name="task_gr_pm" value="" style="width: 300px;" />
                            <div class="tips"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>项目部实施计划：</label>
                        </div>
                        <div class="field">
                            提交<input type="radio" style="width:30px;" name="task_plan" value="提交" />
                            未提交<input type="radio" style="width:30px;" name="task_plan" value="未提交" />
                            <div class="tips"></div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加" name="add"></input>
                    <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
                </div>
            </form>
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