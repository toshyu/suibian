<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_task\update.html";i:1564553945;}*/ ?>
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
        <legend>任务情况修改</legend>
    </fieldset>
    <div class="layui-form">
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <div class="layui-form-label"> 项目名称</div>
                <div class="layui-input-inline">
                    <select lay-filter="project" lay-search>
                        <option value="<?php echo $list['project_name']; ?>"><?php echo $list['project_name']; ?></option>
                    </select> </div>
            </div>
        </div>
        <!-- -->
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">中心内部切块表</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="radio" class="layui-input" name='task_table' value="1" <?php echo $list['task_table']==1?'checked':''; ?> />有&nbsp;&nbsp;
                    <input type="radio" class="layui-input" name='task_table' value="2" <?php echo $list['task_table']==2?'checked':''; ?> />否
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">中心下达任务书</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="radio" class="layui-input" name='task_book' value="1" <?php echo $list['task_book']==1?'checked':''; ?> />已下达&nbsp;&nbsp;
                    <input type="radio" class="layui-input" name='task_book' value="2" <?php echo $list['task_book']==2?'checked':''; ?> />未下达
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">兴趣小组</label>
                <div class="layui-input-block">
                    <input type="text" name="task_group" value="<?php echo $list['task_group']; ?>" style="width:200px;" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">组长</label>
                <div class="layui-input-block">
                    <input type="text" name="task_gr_leader" value="<?php echo $list['task_gr_leader']; ?>" style="width:200px;" lay-verify="require" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">项目经理</label>
                <div class="layui-input-block">
                    <input type="text" name="task_gr_pm" value="<?php echo $list['task_gr_pm']; ?>" style="width:200px;" lay-verify="require" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">项目部实施计划</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="radio" class="layui-input" name='task_plan' value="1" <?php echo $list['task_plan']==1?'checked' : ''; ?> />提交&nbsp;&nbsp;
                    <input type="radio" class="layui-input" name='task_plan' value="2" <?php echo $list['task_plan']==2?' checked' :''; ?> />未提交
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即修改</button>
            </div>
        </div>
    </div>
</body>
<script src="/num06/public/layui/layui.js"></script>
<script>
layui.config({
    base: '/num06/public/layui/src/' //静态资源所在路径
}).extend({
    index: 'index' //主入口模块
}).use(['index', 'element', 'form', 'util'], function() {
    var $ = layui.$,

        element = layui.element,
        form = layui.form;


    form.on('submit(demo1)', function(data) {
        $.ajax({
            url: 'updateDo',
            data: data.field,
            method: 'POST',
            success: function(data) {
                var load = layer.load(8, { shade: [0.1, "#fff"] });
                // console.log(data);
                if (data.success) {
                    layer.msg(data.msg, function() {
                        // window.location.reload();
                        layer.close(load);
                    });
                } else {
                    layer.msg(data.msg);
                }

            }


        });
    });


});
</script>
</script>

</html>