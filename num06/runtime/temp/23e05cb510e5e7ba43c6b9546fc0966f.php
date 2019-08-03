<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_reimburse\add.html";i:1564555265;}*/ ?>
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
    <form class="layui-form">
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
                <label class="layui-form-label">报账部门</label>
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
                    <input type="text" class="layui-input" id="test1" placeholder="yyyy-MM-dd" required lay-verify="required">
                    <input type="hidden" name="retime">
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
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">房屋，水电，空调</label>
                <div class="layui-input-block">
                    <input type="text" name="life" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">设备占用</label>
                <div class="layui-input-block">
                    <input type="text" name="occu" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">设备折旧</label>
                <div class="layui-input-block">
                    <input type="text" name="deprec" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">其他1</label>
                <div class="layui-input-block">
                    <input type="text" name="upother1" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">职工有关费用</label>
                <div class="layui-input-block">
                    <input type="text" name="workers" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">职工工资</label>
                <div class="layui-input-block">
                    <input type="text" name="worker_money" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">养老保险费</label>
                <div class="layui-input-block">
                    <input type="text" name="insurance" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">住房公积金</label>
                <div class="layui-input-block">
                    <input type="text" name="provident_fund" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">其他福利</label>
                <div class="layui-input-block">
                    <input type="text" name="upother2" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">外协付款</label>
                <div class="layui-input-block">
                    <input type="text" name="outfee" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">办公费</label>
                <div class="layui-input-block">
                    <input type="text" name="office" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">邮电费</label>
                <div class="layui-input-block">
                    <input type="text" name="post" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">差旅费</label>
                <div class="layui-input-block">
                    <input type="text" name="costs" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">交通费</label>
                <div class="layui-input-block">
                    <input type="text" name="traffic" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">住宿费1</label>
                <div class="layui-input-block">
                    <input type="text" name="house" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">培训费</label>
                <div class="layui-input-block">
                    <input type="text" name="peixun" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">会议费</label>
                <div class="layui-input-block">
                    <input type="text" name="meeting" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">会议场地租赁费</label>
                <div class="layui-input-block">
                    <input type="text" name="meetsite" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">住宿费2</label>
                <div class="layui-input-block">
                    <input type="text" name="meethouse" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">印刷打印费</label>
                <div class="layui-input-block">
                    <input type="text" name="meetprint" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">车辆维修费</label>
                <div class="layui-input-block">
                    <input type="text" name="vehide" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">专能通讯网费</label>
                <div class="layui-input-block">
                    <input type="text" name="called" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">专用燃料费</label>
                <div class="layui-input-block">
                    <input type="text" name="fuel" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">专用材料费</label>
                <div class="layui-input-block">
                    <input type="text" name="material" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">出差补助费用</label>
                <div class="layui-input-block">
                    <input type="text" name="subsidy" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">租赁费</label>
                <div class="layui-input-block">
                    <input type="text" name="lease" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md5">
                <label class="layui-form-label">中标服务费</label>
                <div class="layui-input-block">
                    <input type="text" name="rebid" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
            <div class=" layui-col-md5">
                <label class="layui-form-label">税费</label>
                <div class="layui-input-block">
                    <input type="text" name="tax" style="width:200px;" lay-verify="number" autocomplete="off" placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
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
    laydate.render({
        elem: '#test1',
        done: function(value) {
            var newtime = new Date(value).getTime() / 1000;
            $('input[ name=retime ]').val(newtime);
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