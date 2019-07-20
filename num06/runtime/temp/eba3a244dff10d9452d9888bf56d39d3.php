<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\ceshi\index.html";i:1563179199;}*/ ?>
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head th:include="common/header::commonHeader">
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/num06/public/layui/css/layui.css" media="all" />
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>

<body>
    <table class="layui-hide" id="complainTable" lay-filter="complainList"></table>
    <script type="text/html" id="complain_toolbar">
        <div class="layui-btn-container">
    <button class="layui-btn layui-btn-danger layui-btn-sm" lay-event="delBatchAll"><i class="layui-icon"></i>批量删除</button>
    <button class="layui-btn layui-btn-sm" lay-event="add"><i class="layui-icon"></i>添加</button>
</div>
</script>
    <script type="text/html" id="barDemo">
        <a class="layui-btn layui-btn-xs" lay-event="detail">查看</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
    <script src="/num06/public/layui/layui.js"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script type="text/javascript">
    layui.config({
        base: '/num06/public/layui/src/' //静态资源所在路径
    }).extend({
        index: 'index' //主入口模块
    }).use(['table', 'layer', 'form', 'laypage'], function() {
        var table = layui.table,
            layer = layui.layer,
            form = layui.form,
            laypage = layui.laypage;

        table.render({
            id: "provinceReload",
            elem: '#complainTable',
            url: '/medicaladmin/complain/list',
            page: true,
            method: 'post',
            toolbar: '#complain_toolbar',
            limit: 10,
            response: {
                statusName: 'code',
                msgName: 'message',
                statusCode: 200,
                dataName: 'beans',
                countName: 'page',
            },
            request: {
                pageName: 'page',
                limitName: 'size'
            },
            cols: [
                [
                    { checkbox: true } //开启多选框
                    , { field: 'id', width: 150, title: '投诉ID' }, { field: 'serviceCode', width: 150, title: '服务编号' }, {
                        field: 'compType',
                        width: 150,
                        title: '服务类型',
                        templet: function(d) {
                            if (d.compType == 0) {
                                return '<span style="color: #D03948;">医院</span>';
                            } else if (d.compType == 1) {
                                return '<span style="color: #18A4D0;">科室</span>';
                            } else if (d.compType == 2) {
                                return '<span style="color: #5CD03F;">医生</span>';
                            }
                        }
                    }, { field: 'compOrder', width: 150, title: '投诉订单号' }, { field: 'compReason', width: 150, title: '投诉原因' }, { field: 'compDetail', width: 150, title: '投诉详情' }, {
                        field: 'complainState',
                        width: 150,
                        title: '投诉状态',
                        templet: function(d) {
                            if (d.complainState == 0) {
                                return '<span style="color: #D03948;">未处理</span>';
                            } else if (d.complainState == 1) {
                                return '<span style="color: #18A4D0;">已处理</span>';
                            }
                        }
                    }, {
                        field: 'validFlag',
                        width: 150,
                        title: '数据状态',
                        templet: function(d) {
                            if (d.validFlag == true) {
                                return '<span style="color: #18A4D0;">有效</span>';
                            } else {
                                return '<span style="color: #D03948;">无效</span>';
                            }
                        }
                    }, , { fixed: 'right', title: '操作', toolbar: '#barDemo' }
                ]
            ],
            limits: [5, 10, 20, 50]
        });


        table.on('tool(complainList)', function(obj) {
            var data = obj.data;
            json = JSON.stringify(data);
            switch (obj.event) {
                case 'detail':
                    console.log("投诉详情");
                    var index = layer.open({
                        type: 2,
                        title: "投诉详情页面",
                        area: ['30%', '60%'],
                        fix: false,
                        maxmin: true,
                        shadeClose: true,
                        shade: 0.4,
                        skin: 'layui-layer-rim',
                        content: ["/medicaladmin/complain/complainRead", "no"],
                    });
                    break;
                case 'edit':
                    var index = layer.open({
                        type: 2,
                        title: "编辑投诉页面",
                        area: ['30%', '60%'],
                        fix: false,
                        maxmin: true,
                        shadeClose: true,
                        shade: 0.4,
                        skin: 'layui-layer-rim',
                        content: ["/medicaladmin/complain/complainEdit", "no"],
                    });
                    break;
                case 'del':
                    var delIndex = layer.confirm('真的删除id为' + data.id + "的信息吗?", function(delIndex) {
                        $.ajax({
                            url: '/medicaladmin/complain/delete/' + data.id,
                            type: "post",
                            success: function(suc) {
                                if (suc.code == 200) {
                                    obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                                    layer.close(delIndex);
                                    console.log(delIndex);
                                    layer.msg("删除成功", {
                                        icon: 1
                                    });
                                } else {
                                    layer.msg("删除失败", {
                                        icon: 5
                                    });
                                }
                            }
                        });
                        layer.close(delIndex);
                    });
                    break;
            }
        });

    });
    </script>
</body>

</html>