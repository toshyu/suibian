<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_outsce\index.html";i:1564555934;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>外协列表</title>
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
            <div class="layui-card-header">外协列表</div>
            <div class="layui-card-body">
                <div class="layui-form">
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <div class="layui-form-label">外协合同</div>
                            <div class="layui-input-block">
                                <input type="text" class="layui-input" name="outsce_name" placeholder="外协合同">
                            </div>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <div class="layui-form-label">外协单位</div>
                            <div class="layui-input-block">
                                <input type="text" class="layui-input" name="outsce_unit" placeholder="外协单位">
                            </div>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <div class="layui-form-label">联系人</div>
                            <div class="layui-input-block">
                                <input type="text" class="layui-input" name="cantact" placeholder="联系人">
                            </div>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <a href="javascript:;" class="layui-btn" lay-submit lay-filter="search">搜索</a>
                        </div>
                    </div>
                </div>
                <hr>
                <table class="layui-hide" id="outsce_list" lay-filter="outsce_list"></table>
            </div>
        </div>
    </div>
    <script type="text/html" id="operation">
        <a href="<?php echo url('update'); ?>?id={{d.id}}"  href="javascript:;" class="layui-btn layui-btn-xs">编辑</a>
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
            elem: "#outsce_list",
            url: '<?php echo url("getOutsceList"); ?>',
            page: true,
            loading: true,
            toolbar: true,
            cols: [
                [
                    { field: 'outsce_sn', title: '外协合同编号' },
                    { field: 'outsce_name', title: '外协合同名称' },
                    { field: 'sign_time', title: '签订时间', templet: function(d) { return d.sign_time ? util.toDateString(d.sign_time * 1000, 'yyyy-MM-dd') : '' } },
                    { field: 'cantact', title: '联系人' },
                    { title: '操作', align: 'center', fixed: 'right', templet: '#operation' }
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
        })
        table.on('tool(outsce_list)', function(obj) {
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
            table.reload("outsce_list", {
                where: obj.field
            })
        })

    });
    </script>
</body>

</html>