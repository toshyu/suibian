<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_recycle\index.html";i:1564707795;}*/ ?>
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
    <div class="layui-fluid">
        <div class="layui-card">
            <div class="layui-card-header">发票信息</div>
            <div class="layui-form">
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="project_name" placeholder="项目名称">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="maketime" placeholder="开票日期">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <select name="sign_id" id="">
                            <option value="">开票部门</option>
                            <?php if(is_array($sign_id) || $sign_id instanceof \think\Collection || $sign_id instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="makeperson" placeholder="开票人">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="maketype" placeholder="开票类型">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="makemoney" placeholder="开票额">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="tomoney" placeholder="到账额">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <input type="text" class="layui-input" name="totime" placeholder="到账时间">
                    </div>
                </div>
                <div class="layui-input-inline">
                    <div class="layui-form-item">
                        <a href="javascript:;" class="layui-btn" lay-submit lay-filter="search">搜索</a>
                    </div>
                </div>
            </div>
            <div class="layui-card-body">
                <table class="layui-hide" id="project_cut" lay-filter="project_cut"></table>
            </div>
        </div>
    </div>
    <table class="layui-hide" id="recycle_list" lay-filter="recycle_list"></table>
    <script type="text/html" id="operationTpl">
        <a class="layui-btn layui-btn-warm layui-btn-xs" lay-event="sel"> 查看</a>
        <a href="<?php echo url('update'); ?>?id={{d.id}}" class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a  class="layui-btn layui-btn-danger layui-btn-xs" lay-event="delete"> 删除</a>

    </script>
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
            util = layui.util,
            laydate = layui.laydate;
        table.render({
            elem: "#recycle_list",
            page: true,
            loding: true,
            url: "<?php echo url('recycleList'); ?>",
            toolbar: 'true',
            cols: [
                [{
                        field: 'project_name',
                        title: '项目名称',
                        minWidth: 130
                    },
                    { field: 'maketime', title: '开票日期', templet: function(d) { return d.maketime ? util.toDateString(d.maketime * 1000, 'yyyy-MM-dd') : '' } },
                    { field: 'makedepart', title: '开票部门', minWidth: 150 },
                    { field: 'makeperson', title: '开票人', minWidth: 130 },
                    { field: 'maketype', title: '开票类型', minWidth: 130 },
                    { field: 'makemoney', title: '开票金额', minWidth: 130 },
                    { field: 'tomoney', title: '到账额', minWidth: 130 },
                    { field: 'totime', title: '到账时间', minWidth: 130 },
                    { fixed: 'right', width: 165, title: '操作', align: 'center', toolbar: '#operationTpl' }

                ]
            ],
            parseData: function(res) {
                return {
                    code: res.code,
                    count: res.last_page,
                    data: res.data,
                    msg: res.msg
                }
            }
        });
        table.on('tool(recycle_list)', function(obj) {
            var id = obj.data.id;
            var layEvent = obj.event;
            //获取选中的数据
            var loading = layer.load(6);
            if (layEvent === 'delete') { //删除
                layer.confirm('真的删除行么', function(index) {
                    layer.close(index);
                    //向服务端发送删除指令
                    $.ajax({
                        url: 'prodelete',
                        data: { id: id },
                        success: function(obx) {
                            obj.del();
                            layer.msg('删除成功');
                            layer.close(loading);
                            //删除对应行（tr）的DOM结构，并更新缓存
                        },
                        error: function(obx) {
                            layer.msg('删除失败');
                            layer.close(loading);
                        }
                    })
                }, function() {
                    layer.close(loading);
                });
            }
        });
        form.on("submit(search)", function(obj) {
            obj.field.page = 1
            table.reload("recycle_list", {
                where: obj.field
            })
        });

    });
    </script>
</body>

</html>