<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project\update.html";i:1564034547;}*/ ?>
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
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvo): $mod = ($i % 2 );++$i;?>
    <div class="layui-form">
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">合同编号</label>
                <div class="layui-input-block">
                    <input type="text" name="order" lay-verify="required" autocomplete="off" placeholder="请输入合同编号" value="<?php echo $vvo['order']; ?>" class="layui-input" required>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md5">
                <label class="layui-form-label">项目名称</label>
                <div class="layui-input-block">
                    <input type="text" name="project_name" lay-verify="required" autocomplete="off" placeholder="请输入项目名称" value="<?php echo $vvo['project_name']; ?>" class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md3">
                <label class="layui-form-label">来源</label>
                <div class="layui-input-block">
                    <select name="source" lay-filter="aihao" required lay-verify="required">
                        <option value="<?php echo $vvo['source']; ?>"><?php if($vvo['source'] == 1): ?>合同
                            <?php elseif($vvo['source'] == 2): ?>备案
                            <?php elseif($vvo['source'] == 3): ?>上级下达
                            <?php else: ?>其他<?php endif; ?>
                        </option>
                        <option value="1">合同</option>
                        <option value="2">备案</option>
                        <option value="3">上级下达</option>
                        <option value="4">其他</option>
                    </select>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md3">
                <label class="layui-form-label">性质</label>
                <div class="layui-input-block">
                    <select name="nature" lay-filter="aihao" required lay-verify="required">
                        <option value="<?php echo $vvo['nature']; ?>"><?php if($vvo['nature'] == 1): ?>市场招标
                            <?php elseif($vvo['nature'] == 2): ?>财政招标
                            <?php elseif($vvo['nature'] == 3): ?>合作挂靠
                            <?php else: ?>其他<?php endif; ?></option>
                        <option value="1">市场招标</option>
                        <option value="2">财政招标</option>
                        <option value="3">合作挂靠</option>
                        <option value="4">其他</option>
                    </select>
                </div>
            </div>
            <div class=" layui-col-md3">
                <label class="layui-form-label">类型</label>
                <div class="layui-input-block">
                    <select name="type_id" lay-filter="aihao" required lay-varify="required">
                        <option value="<?php echo $vvo['type_id']; ?>"><?php echo $vvo['type_title']; ?></option>
                        <?php if(is_array($type_list) || $type_list instanceof \think\Collection || $type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
        </div>
        <p></p>
        <!--  -->
        <div class="layui-row">
            <div class="layui-form-item layui-col-md5">
                <label class="layui-form-label">委托单位：</label>
                <div class="layui-input-block">
                    <input type="text" name="unit_name" lay-verify="title" autocomplete="off" placeholder="请输入委托单位名称" value="<?php echo $vvo['unit_name']; ?>" class="layui-input" required>
                </div>
            </div>
            <div class="  layui-col-md5">
                <label class="layui-form-label">工期：</label>
                <div class="layui-inline">
                    <input type="text" class="layui-input" placeholder="工期" name="construction_period" value="<?php echo $vvo['construction_period']; ?>" id="construction_period" required lay-verify="required">
                    <input name="start_time" type="hidden">
                    <input name="end_time" type="hidden">
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md5">
                <label class="layui-form-label">委托单位行业</label>
                <div class="layui-input-block">
                    <select name="unit_id" lay-filter="aihao" required>
                        <option value="<?php echo $vvo['unit_id']; ?>"><?php echo $vvo['unit_title']; ?> </option>
                        <?php if(is_array($unit_industy_list) || $unit_industy_list instanceof \think\Collection || $unit_industy_list instanceof \think\Paginator): $i = 0; $__LIST__ = $unit_industy_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="  layui-col-md5">
                <label class="layui-form-label">签订时间：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test1" name="sign_time" value="<?php echo date('Y-m-d H:m:s',$vvo['sign_time']); ?>" placeholder="yyyy-MM-dd" required lay-verify="required">
                </div>
            </div>
            <!--  -->
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md5">
                <label class="layui-form-label">签订部门</label>
                <div class="layui-input-block">
                    <select name="sign_id" lay-filter="aihao" required>
                        <option value="<?php echo $vvo['sign_id']; ?>"><?php echo $vvo['sign_title']; ?> </option>
                        <?php if(is_array($sign_id) || $sign_id instanceof \think\Collection || $sign_id instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md5">
                <label class="layui-form-label">签订人：</label>
                <div class="layui-input-block">
                    <input type="text" name="sign_agent" value="<?php echo $vvo['sign_agent']; ?>" lay-verify="title" autocomplete="off" placeholder="请输入签订人" class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">合同额：</label>
            <div class="layui-input-block">
                <input type="text" name="contract_amount" value="<?php echo $vvo['contract_amount']; ?>" lay-verify="number" autocomplete="off" placeholder="请输入合同额" class="layui-input" required>
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">决算时间：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" id="test1" name="final_time" value="<?php echo date('Y-m-d H:m:s',$vvo['final_time']); ?>" placeholder="yyyy-MM-dd" required lay-verify="required">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">决算额：</label>
            <div class="layui-input-block">
                <input type="text" name="final_amount" value="<?php echo $vvo['final_amount']; ?>" lay-verify="number" autocomplete="off" placeholder="请输入决算额" class="layui-input" required>
            </div>
        </div>
        <!--  -->
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即修改</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
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
}).use(['index', 'form', 'element', 'laydate'], function() {
    var form = layui.form;
    var element = layui.element;
    var laydate = layui.laydate;
    var $ = layui.jquery;

    lay('#test1').each(function() {
        laydate.render({
            elem: this,
            format: 'yyyy-MM-dd HH:mm:ss',
            type: 'datetime',
            trigger: 'click'
        });
    });
    laydate.render({
        elem: "#construction_period",
        range: "/",
        done: function(value) {
            var time_arr = value.split("/");

            var start_time = new Date(time_arr[0]).getTime() / 1000;
            var end_time = new Date(time_arr[1]).getTime() / 1000;
            $("input[name=start_time]").val(start_time);
            $("input[name=end_time]").val(end_time);
            console.log(start_time);
        }
    })
    form.on('submit(demo1)', function(data) {
        delete data.field.construction_period;
        // console.log(data.field);
        $.ajax({
            url: 'addDo',
            data: data.field,
            success: function(data) {
                layer.msg("修改成功", function() {
                    window.location.reload();
                });
            }

        });
    });

});
</script>

</html>