<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_recycle\add.html";i:1563956751;}*/ ?>
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
                <label class="layui-form-label">签订部门</label>
                <div class="layui-input-block" style="width:200px;">
                    <select name="sign_id" lay-filter="aihao" required>
                        <option value=" ">请选择</option>
                        <?php if(is_array($sign_id) || $sign_id instanceof \think\Collection || $sign_id instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
        </div>
        <!-- -->
        <div class="layui-row layui-form-item">
            <div class=" layui-col-md5">
                <label class="layui-form-label">报账分类</label>
                <div class="layui-input-block" style="width:200px;">
                    <select name="respecies" lay-filter="aihao" required>
                        <option value="">请选择</option>
                        <option value="部门经营">部门经营</option>
                        <option value="部门生产">部门生产</option>
                        <option value="部门管理">部门管理</option>
                        <option value="公共经费">公共经费</option>
                        <option value="中心管理费">中心管理费</option>
                    </select>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">报账人</label>
                <div class="layui-input-block" style="width:200px;">
                    <input type="text" name="reusername" lay-verify="required" autocomplete="off" placeholder="请输入报账人名称" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">报账时间</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test1" name="sign_time" placeholder="yyyy-MM-dd" required lay-verify="required">
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">上交院相关费用</label>
                <div class="layui-input-block">
                    <input type="text" name="upper" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">管理费</label>
                <div class="layui-input-block">
                    <input type="text" name="management" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
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
</script>

</html>