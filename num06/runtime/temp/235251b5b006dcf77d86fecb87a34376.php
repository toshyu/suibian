<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_cut\add.html";i:1563068996;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>消息中心首页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/num06/public/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/template.css" media="all">
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>项目内容添加</legend>
    </fieldset>
    <form class="layui-form" action="<?php echo url('index/projectCut/AddDo'); ?>" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 成本切块</strong></div>
        <div class="body-content">
            <div class="layui-form-item layui-col-md6">
                <label class="layui-form-label">合同额</label>
                <div class="layui-input-block">
                    <input type="text" name="promoney" lay-verify="title" autocomplete="off" placeholder="请输入合同额" class="layui-input">
                </div>
            </div>
            <!--  -->
            <div class="layui-form-item layui-col-md6">
                <label class="layui-form-label">决算额</label>
                <div class="layui-input-block">
                    <input type="text" name="cutmoney" lay-verify="title" autocomplete="off" placeholder="请输入合同额" class="layui-input">
                </div>
            </div>
            <!--  -->
            <div class="layui-form-item layui-col-md6">
                <label class="layui-form-label">写入时间：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test1" name="cuttime" placeholder="yyyy-MM-dd">
                </div>
            </div>
            <!--  -->
            <div>
                <div class="form-group">
                    <div class="label">
                        <label>生产费用：</label>
                    </div>
                    <p><label>生产金额1: </label><input type="text" name="produce1" class="input1" />
                        部门： <select style="width: 100px;" name="depart1" class="">
                            <option value="中心办公室">中心办公室</option>
                            <option value="地质环境所">地质环境所</option>
                            <option value="地质遥感所">地质遥感所</option>
                            <option value="水文地质所">水文地质所</option>
                            <option value="胶东事业部">胶东事业部</option>
                        </select></p>
                    <div class="label"><label> </label></div>
                    <p><label>生产金额2: </label><input type="text" name="produce2" class="input1" />
                        部门： <select style="width: 100px;" name="depart2" class="">
                            <option value="中心办公室">中心办公室</option>
                            <option value="地质环境所">地质环境所</option>
                            <option value="地质遥感所">地质遥感所</option>
                            <option value="水文地质所">水文地质所</option>
                            <option value="胶东事业部">胶东事业部</option>
                        </select></p>
                </div>
            </div>
            <!-- <input type="hidden" name="produceAll" id="p1" class="input1"> -->
            <div class="form-group">
                <div class="label">
                    <label>经营费用：</label>
                </div>
                <p><label>经营金额1: </label><input type="text" name="run1" class="input1" />
                    部门： <select style="width: 100px;" name="depart3" class="">
                        <option value="中心办公室">中心办公室</option>
                        <option value="地质环境所">地质环境所</option>
                        <option value="地质遥感所">地质遥感所</option>
                        <option value="水文地质所">水文地质所</option>
                        <option value="胶东事业部">胶东事业部</option>
                    </select></p>
                <div class="label"><label> </label></div>
                <p><label>经营金额2: </label><input type="text" name="run2" class="input1" />
                    部门： <select style="width: 100px;" name="depart4" class="">
                        <option value="中心办公室">中心办公室</option>
                        <option value="地质环境所">地质环境所</option>
                        <option value="地质遥感所">地质遥感所</option>
                        <option value="水文地质所">水文地质所</option>
                        <option value="胶东事业部">胶东事业部</option>
                    </select></p>
            </div>
            <!-- <input type="hidden" name="runAll" id="r1" class="input1"> -->
            <div class="form-group">
                <div class="label">
                    <label>管理费用：</label>
                </div>
                <p><label>管理金额: </label><input type="text" name="administration" class="input1" />
                    部门： <select style="width: 100px;" name="depart5" class="">
                        <option value="民生地质中心">民生地质中心</option>
                    </select></p>
            </div>
            <!--     <input type="hidden" name="a1" class="input1"> -->
        </div>
        </div>
        <div class="field">
            <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加" name=""></input>
            <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
        </div>
    </form>
    <script type="text/javascript" src="/xmglg/public/static/admin/js/jquery.js"></script>
    <script>
    $(document).ready(function() {
        var time = new Date();
        var day = ("0" + time.getDate()).slice(-2);
        var month = ("0" + (time.getMonth() + 1)).slice(-2);
        var today = time.getFullYear() + "-" + (month) + "-" + (day);
        $('input[type="date"]').val(today);
    });
    // var produceAll = document.getElementById("t1").value;
    // document.getElementById("t2").value = value;
    </script>
</body>

</html>