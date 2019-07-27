<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_task\add.html";i:1564020480;}*/ ?>
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
        <legend>任务情况添加</legend>
    </fieldset>
    <div class="layui-form">
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <div class="layui-form-label">请选择项目</div>
                <div class="layui-input-inline">
                    <select name="pro_id" lay-filter="project" lay-search>
                        <option value="">请选择</option>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['project_name']; ?> </option> <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select> </div>
            </div>
        </div>
        <!-- -->
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">中心内部切块表</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="radio" class="layui-input" name='task_table' value="1" checked="checked" />有&nbsp;&nbsp;
                    <input type="radio" class="layui-input" name='task_table' value="0" />否
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">中心下达任务书</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="radio" class="layui-input" name='task_book' value="1" checked="checked" />已下达&nbsp;&nbsp;
                    <input type="radio" class="layui-input" name='task_book' value="0" />未下达
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">兴趣小组</label>
                <div class="layui-input-block">
                    <input type="text" name="task_group" style="width:200px;" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">组长</label>
                <div class="layui-input-block">
                    <input type="text" name="task_gr_leader" style="width:200px;" lay-verify="require" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">项目经理</label>
                <div class="layui-input-block">
                    <input type="text" name="task_gr_pm" style="width:200px;" lay-verify="require" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">项目部实施计划</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="radio" class="layui-input" name='task_plan' value="1" checked="checked" />提交&nbsp;&nbsp;
                    <input type="radio" class="layui-input" name='task_plan' value="0" />未提交
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
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
            url: 'addDo',
            data: data.field,
            success: function(data) {
                layer.msg("提交成功", function() {
                    window.location.reload();
                });
            }

        });
    });


});
</script>
</script>

</html>