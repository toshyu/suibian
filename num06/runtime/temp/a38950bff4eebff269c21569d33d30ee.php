<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\PhpStudy\PHPTutorial\WWW\num06/application/index\view\project_cut\index.html";i:1563076445;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>项目切块</title>
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
            <div class="layui-card-header">项目切块</div>
            <div class="layui-card-body">
                <table class="layui-hide" id="project_cut" lay-filter="project_cut"></table>
            </div>
        </div>
    </div>
    </div>
    <script type="text/html" id="operationTpl">
        <a href="javascript:;" class="layui-btn layui-btn-xs">编辑</a>
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
            form = layui.form;

        table.render({
            elem: "#project_cut",
            page: true,
            loading: true,
            cols: [[
                { field: 'project_name', title: '项目名称', minWidth: 200 },
                { field: 'production_cost_all', title: '生产费用总计', minWidth: 150},
                { field: 'Management_const_all', title: '经营费用总计', minWidth: 150},
                { field: 'Administration_cost_all', title: '管理费用总计', minWidth: 150},
                { title: '操作', fixed: 'right', align: 'center', templet: '#operationTpl'}
            ]]
        })

    });
    </script>
</body>

</html>