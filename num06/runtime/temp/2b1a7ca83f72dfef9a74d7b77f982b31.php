<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_reimburse\index.html";i:1564715336;}*/ ?>
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
            <div class="layui-card-header">报销列表</div>
            <div class="layui-card-body">
                <div class="layui-form">
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="project_name" placeholder="项目名称">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <select name="sign_id" id="">
                                <option value="">报销部门</option>
                                <?php if(is_array($sign_id) || $sign_id instanceof \think\Collection || $sign_id instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="reusername" placeholder="报账人">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="retime" placeholder="报账时间" id="retime">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
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
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="allmoney" placeholder="报销总额">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <a href="javascript:;" class="layui-btn" lay-submit lay-filter="search">搜索</a>
                        </div>
                    </div>
                </div>
                <hr>
                <table class="layui-hide" id="reimburse_list" lay-filter="reimburse_list"></table>
            </div>
        </div>
    </div>
    <script type="text/html" id="operationTpl">
        <a href="<?php echo url('index/project_outsce/sel'); ?>" class="layui-btn layui-btn-warm layui-btn-xs" lay-event="sel"> 查看</a>
        <a href="<?php echo url('index/project_reimburse/update'); ?>?id={{d.id}}&name={{d.project_name}}" class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
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
            elem: "#reimburse_list",
            page: true,
            loding: true,
            url: "<?php echo url('reimburselist'); ?>",
            toolbar: 'true',
            cols: [
                [
                    { field: 'project_name', title: '项目名称', minWidth: 100 },
                    { field: 'sign_id', title: '报账部门', minWidth: 150 },
                    { field: 'reusername', title: '报账人', minWidth: 130 },
                    { field: 'retime', title: '报账时间', templet: function(d) { return d.retime ? util.toDateString(d.retime * 1000, 'yyyy-MM-dd') : '' } },
                    { field: 'respecies', title: '分类', minWidth: 130 },
                    { field: 'allmoney', title: '报销总额', minWidth: 130 },
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
        form.on("submit(search)", function(obj) {
            obj.field.page = 1
            table.reload("reimburse_list", {
                where: obj.field
            })
        });

        table.on('tool(reimburse_list)', function(obj) {
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

    });
    </script>
</body>

</html>