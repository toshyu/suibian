<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\PhpStudy\PHPTutorial\WWW\num06/application/index\view\index\home.html";i:1563073036;}*/ ?>
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
            <div class="layui-card-header">测试</div>
            <a href="<?php echo url('Menu/index'); ?>">菜单编辑</a>
            <div class="layui-card-body">
                <table class="layui-hide" id="test"></table>
            </div>
        </div>
        <!-- <div class="layadmin-tips">
            <i class="layui-icon layui-icon-face-smile layui-anim" face="" style="font-size:250px;"></i>
            <div class="layui-text">
                <h1>
                    <span class="layui-anim layui-anim-scale" style="font-size:80px;">欢迎光临</span>
                    <span class="layui-anim layui-anim-scale" style="font-size:80px;">客官里边请</span>
                </h1>
            </div>
        </div> -->
    </div>
    <script src="/num06/public/layui/layui.js"></script>
    <script>
    layui.config({
        base: '/num06/public/layui/src/' //静态资源所在路径
    }).extend({
        index: 'index' //主入口模块
    }).use(['index', 'element', 'table', 'form'], function() {
        var $ = layui.$,
            table = layui.table,
            element = layui.element
        form = layui.form;

        table.render({
            elem: '#test',
            cols: [
                [
                    { type: 'checkbox', fixed: 'left', rowspan: 2 },
                    { field: 'sort', title: '序号', rowspan: 2 },
                    { title: '类型', colspan: 3, align: 'center' },
                    { field: 'color', title: '颜色', rowspan: 2 },
                    { title: '操作', rowspan: 2, templet: function() { return "<a class='layui-btn layui-btn-xs'>123</a>" } },
                    { field: 'sort', title: '序号', rowspan: 2 },
                    { title: '类型', colspan: 3, align: 'center' },
                    { field: 'color', title: '颜色', rowspan: 2 },
                    { title: '操作', rowspan: 2, templet: function() { return "<a class='layui-btn layui-btn-xs'>123</a>" } },
                    { field: 'sort', title: '序号', rowspan: 2 },
                    { title: '类型', colspan: 3, align: 'center' },
                    { field: 'color', title: '颜色', rowspan: 2 },
                    { title: '操作', rowspan: 2, templet: function() { return "<a class='layui-btn layui-btn-xs'>123</a>" } },
                    { field: 'sort', title: '序号', rowspan: 2 },
                    { title: '类型', colspan: 3, align: 'center' },
                    { field: 'color', title: '颜色', rowspan: 2 },
                    { title: '操作', rowspan: 2, templet: function() { return "<a class='layui-btn layui-btn-xs'>123</a>" } },
                ],
                [
                    { field: 'province', title: '省' },
                    { field: 'city', title: '市' },
                    { field: 'zone', title: '区' },
                    { field: 'province', title: '省' },
                    { field: 'city', title: '市' },
                    { field: 'zone', title: '区' },
                    { field: 'province', title: '省' },
                    { field: 'city', title: '市' },
                    { field: 'zone', title: '区' },
                    { field: 'province', title: '省' },
                    { field: 'city', title: '市' },
                    { field: 'zone', title: '区' }
                ]
            ],
            data: [
                { sort: 1, province: "省", city: '市', zone: '区', color: 'red' },
                { sort: 1, province: "省", city: '市', zone: '区', color: 'red' },
                { sort: 1, province: "省", city: '市', zone: '区', color: 'red' },
            ]
        })

    });
    </script>
</body>

</html>