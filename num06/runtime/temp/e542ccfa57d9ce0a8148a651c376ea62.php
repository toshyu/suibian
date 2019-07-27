<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_outsce\add.html";i:1564108504;}*/ ?>
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
        <legend>项目报销内容添加</legend>
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
            <div class=" layui-col-md5">
                <label class="layui-form-label">外协单位名称</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_unit" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <!-- -->
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">外协项目联系人</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_contracts" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">联系人电话</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_phone" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">外协项目合同编号</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_number" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <!--  -->
            <div class="layui-row layui-form-item">
                <div class=" layui-col-md5">
                    <label class="layui-form-label">外协项目合同名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="outpro_name" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                    </div>
                </div>
                <div class="  layui-col-md5">
                    <label class="layui-form-label">签订时间</label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" id="test1" name="outpro_time" placeholder="yyyy-MM-dd" required lay-verify="required">
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="layui-row layui-form-item">
                <div class="layui-col-md5">
                    <label class="layui-form-label">工期：</label>
                    <div class="layui-inline">
                        <input type="text" class="layui-input" placeholder="工期" name="construction_period" id="construction_period" required lay-verify="required">
                        <input name="outpro_start_time" type="hidden">
                        <input name="outpro_end_time" type="hidden">
                    </div>
                </div>
                <div class=" layui-col-md5">
                    <label class="layui-form-label">合同额</label>
                    <div class="layui-input-block">
                        <input type="text" name="outpro_amount" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="layui-row layui-form-item">
                <div class="  layui-col-md5">
                    <label class="layui-form-label">决算额</label>
                    <div class="layui-input-block">
                        <input type="text" name="outpro_account" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                    </div>
                </div>
                <div class="  layui-col-md5">
                    <label class="layui-form-label">决算时间</label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" id="test1" name="outpro_acc_time" placeholder="yyyy-MM-dd" required lay-verify="required">
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
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
}).use(['index', 'element', 'table', 'form', 'util', 'laydate'], function() {
    var $ = layui.$,
        table = layui.table,
        element = layui.element,
        form = layui.form,
        laydate = layui.laydate;

    $("body").on("keyup", ".amount", function() {
        var contract_amount = $("input[name=contract_amount]").val();
        if (!contract_amount) {
            layer.msg("请先选择项目");
            $(this).val("")
            return false;
        }

    })

    laydate.render({
        elem: "#construction_period",
        range: "/",
        done: function(value) {
            var time_arr = value.split("/");
            var start_time = new Date(time_arr[0]).getTime() / 1000;
            var end_time = new Date(time_arr[1]).getTime() / 1000;
            $("input[name=start_time]").val(start_time);
            $("input[name=end_time]").val(end_time);
            // console.log(start_time);
        }
    })

    lay('#test1').each(function() {
        laydate.render({
            elem: this,
            format: 'yyyy-MM-dd HH:mm:ss',
            type: 'datetime',
            trigger: 'click'
        });
    });



});
</script>

</html>