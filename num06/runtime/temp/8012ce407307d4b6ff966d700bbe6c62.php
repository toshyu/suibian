<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_recycle\update.html";i:1564709558;}*/ ?>
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
        <legend>项目发票内容修改</legend>
    </fieldset>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvo): $mod = ($i % 2 );++$i;?>
    <div class="layui-form">
        <div class="layui-row layui-form-item  layui-col-md6">
            <div class="layui-form-label">请选择项目</div>
            <div class="layui-input-block">
                <select lay-filter="project" lay-search lay-verify="required">
                    <option value=" "><?php echo $vvo['project_name']; ?> </option>
                </select> </div>
        </div>
        <div class="layui-row layui-form-item  layui-col-md5">
            <label class="layui-form-label">开票时间：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo date('Y-m-d' ,$vvo['maketime']); ?>" id="time2" placeholder="yyyy-MM-dd" required lay-verify="required">
                <input type="hidden" name="maketime" value="">
            </div>
        </div>
        <!-- -->
        <div class="layui-row layui-form-item  layui-col-md6">
            <label class="layui-form-label">开票部门：</label>
            <div class="layui-input-block">
                <select name="makedepart" lay-filter="project" lay_search lay-verify="required">
                    <option value="$vvo.title"><?php echo $vvo['ptitle']; ?></option>
                    <?php if(is_array($type_list) || $type_list instanceof \think\Collection || $type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-row layui-form-item  layui-col-md6">
            <label class="layui-form-label">开票人：</label>
            <div class="layui-input-block">
                <input type="text" name="makeperson" value="<?php echo $vvo['makeperson']; ?>" lay-verify="title" autocomplete="off" placeholder="请输入 " class="layui-input" required lay-verify="required">
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item  layui-col-md6">
            <label class="layui-form-label">开票类型：</label>
            <div class="layui-input-block">
                <select name="maketype" lay-filter="project" lay-search lay-verify="required">
                    <option value="<?php echo $vvo['maketype']; ?>"><?php echo $vvo['maketype']; ?></option>
                    <option value="开票收款">开票收款</option>
                    <option value="开票挂账">开票挂账</option>
                    <option value="收部分款开部分票">收部分款开部分票</option>
                    <option value="收部分款开全票">收部分款开全票</option>
                </select> </div>
        </div>
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">开票额：</label>
            <div class="layui-input-block">
                <input type="text" name="makemoney" lay-verify="number" value="<?php echo $vvo['makemoney']; ?>" autocomplete="off" placeholder="请输入合同额" class="layui-input" required lay-verify="required">
            </div>
        </div>
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">到账额：</label>
            <div class="layui-input-block">
                <input type="text" name="tomoney" lay-verify="number" value="<?php echo $vvo['tomoney']; ?>" autocomplete="off" placeholder="请输入合同额" class="layui-input" required lay-verify="required">
            </div>
        </div>
        <div class="layui-row layui-form-item  layui-col-md5">
            <label class="layui-form-label">到账时间：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo date('Y-m-d' ,$vvo['totime']); ?>" id="time3" placeholder="yyyy-MM-dd" required lay-verify="required">
                <input type="hidden" name="totime">
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--  -->
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <a type="reset" href="javascript:history.go(-1);" class="layui-btn layui-btn-danger">返回</a>
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
            $(this).val("");
            return false;
        }

    })
    laydate.render({
        elem: '#time2',
        done: function(value) {
            var newtime1 = new Date(value).getTime() / 1000;
            $('input[ name=maketime ]').val(newtime1);
        }
    })
    laydate.render({
        elem: '#time3',
        done: function(value) {
            var newtime2 = new Date(value).getTime() / 1000;
            $('input[name="totime"]').val(newtime2);
        }
    })
    form.on('submit(demo1)',
        function(data) {
            $.ajax({
                url: 'addDo',
                data: data.field,
                method: 'POST',
                success: function(data) {
                    if (data.success) {
                        layer.msg(data.msg, function() {
                            window.location.reload();
                        });
                    } else {
                        layer.msg(data.msg);
                    }
                }
            })
        })


});
</script>
</script>

</html>