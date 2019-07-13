<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"E:\LL\wamp\www\num06/application/index\view\ruleset\setgrade.html";i:1552644730;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>客户评分设置</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/public/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/public/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/public/layui/css/template.css" media="all">
</head>

<body>
    <div class="layui-fluid">
        <div class="layui-card">
            <div class="layui-card-header">客户评分设置</div>
            <div class="layui-card-body">
                <table class="layui-hide" id="roleTable" lay-filter="roleTable"></table>
            </div>
        </div>
    </div>

    <script src="/public/layui/layui.js"></script>
    <script>
        layui.config({
            base: '/public/layui/src/' //静态资源所在路径
        }).extend({
            index: 'index' //主入口模块
        }).use(['index', 'element', 'jquery', 'form', 'table', 'laytpl', 'myutil', 'util', 'eleTree'], function () {
            var $ = layui.$,
                form = layui.form,
                table = layui.table,
                laytpl = layui.laytpl,
                myutil = layui.myutil,
                util = layui.util,
                eleTree = layui.eleTree;

        });



    </script>
</body>

</html>