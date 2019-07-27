<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project\index.html";i:1564194557;}*/ ?>
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
            <div class="layui-card-header">项目列表</div>
            <div class="layui-card-body">
                <div class="layui-form">
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="order" placeholder="合同编号">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="project_name" placeholder="项目名称">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <select name="source" id="">
                                <option value="">项目来源</option>
                                <option value="1">合同</option>
                                <option value="2">备案</option>
                                <option value="3">上级下达</option>
                                <option value="4">其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <select name="nature" id="">
                                <option value="">项目性质</option>
                                <option value="1">市场招标</option>
                                <option value="2">财政招标</option>
                                <option value="3">合作挂靠</option>
                                <option value="4">其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <select name="type_id" id="">
                                <option value="">项目类型</option>
                                <?php if(is_array($type_list) || $type_list instanceof \think\Collection || $type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <select name="unit_id" id="">
                                <option value="">委托单位行业</option>
                                <?php if(is_array($unit_industy_list) || $unit_industy_list instanceof \think\Collection || $unit_industy_list instanceof \think\Paginator): $i = 0; $__LIST__ = $unit_industy_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="sign_time" placeholder="签订时间" id="sign_time">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" placeholder="工期" name="construction_period" id="construction_period">
                            <input type="hidden" name="start_time">
                            <input type="hidden" name="end_time">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <select name="sign_id" id="">
                                <option value="">签订部门</option>
                                <?php if(is_array($sign_id) || $sign_id instanceof \think\Collection || $sign_id instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="sign_agent" placeholder="经办人">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="contract_amount" placeholder="合同额">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="final_amount" placeholder="决算额">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <input type="text" class="layui-input" name="final_time" placeholder="决算日期" id="final_time">
                        </div>
                    </div>
                    <div class="layui-input-inline">
                        <div class="layui-form-item">
                            <a href="javascript:;" class="layui-btn" lay-submit lay-filter="search">搜索</a>
                            <!-- <button class="layui-btn layui-btn-sm" lay-event="delete">添加</button> -->
                        </div>
                    </div>
                </div>
                <hr>
                <table class="layui-hide" id="project_list" lay-filter="project_list"></table>
            </div>
        </div>
    </div>
    </div>
    <script type="text/html" id="operationTpl">
        <a class="layui-btn layui-btn-warm layui-btn-xs" lay-event="sel"> 查看</a>
        <a href="<?php echo url('index/project/update'); ?>?id={{d.id}}" class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
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

        laydate.render({
            elem: "#sign_time",
            done: function(value) {
                $("input[name=sign_time]").val(new Date(value).getTime() / 1000);
            }
        })
        laydate.render({
            elem: "#final_time",
            done: function(value) {
                $("input[name=final_time]").val(new Date(value).getTime() / 1000);
            }
        })
        laydate.render({
            elem: "#construction_period",
            range: "-",
            done: function(value) {
                var time_arr = value.split("/");
                var start_time = new Date(time_arr[0]).getTime() / 1000;
                var end_time = new Date(time_arr[1]).getTime() / 1000;
                $("input[name=start_time]").val(start_time);
                $("input[name=end_time]").val(end_time);
            }
        })


        table.render({
            elem: "#project_list",
            page: true,
            loding: true,
            url: "<?php echo url('project/getProjectList'); ?>",
            toolbar: 'default',
            cols: [
                [
                    { type: 'checkbox', fixed: 'left' }, { field: 'id', title: 'ID', width: 80, sort: true, fixed: 'left', totalRowText: '合计：' },
                    { field: 'order', sort: true, title: '合同编号', minWidth: 100 },
                    { field: 'project_name', title: '项目名称', minWidth: 150 },
                    { field: 'source', title: '项目来源', minWidth: 130 },
                    { field: 'nature', title: '项目性质', minWidth: 130 },
                    { field: 'type_id', title: '项目类型', minWidth: 130 },
                    { field: 'unit_name', title: '委托单位', minWidth: 130 },
                    { field: 'unit_id', title: '委托单位行业', minWidth: 130 },
                    { field: 'sign_time', title: '签订时间', minWidth: 130, templet: function(d) { return d.sign_time ? util.toDateString(d.sign_time * 1000, 'yyyy-MM-dd') : '' } },
                    { field: 'construction_period', title: '工期', minWidth: 130 },
                    { field: 'sign_id', title: '签订部门', minWidth: 130 },
                    { field: 'sign_agent', title: '经办人', minWidth: 130 },
                    { field: 'contract_amount', title: '合同额', minWidth: 130 },
                    { field: 'final_amount', title: '决算额', minWidth: 130 },
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
        table.on('toolbar(project_list)', function(obj) {
            var checkStatus = table.checkStatus(obj.config.id),
                data = checkStatus.data; //获取选中的数据
            switch (obj.event) {
                case 'delete':
                    if (data.length === 0) {
                        layer.msg('请选择一行');
                    } else {
                        layer.confirm('真的删除行么', function(index) {
                            layer.close(index);
                            //向服务端发送删除指令
                            $.ajax({
                                url: 'prodelete',
                                data: { id: checkStatus },
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
                    break;
            };
        });

        form.on("submit(search)", function(obj) {
            obj.field.page = 1
            table.reload("project_list", {
                where: obj.field
            })
        });

        table.on('tool(project_list)', function(obj) {
            var id = obj.data.id;
            var layEvent = obj.event;
            //获取选中的数据
            var loading = layer.load(2);
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