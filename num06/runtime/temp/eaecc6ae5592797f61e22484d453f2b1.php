<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project\index.html";i:1563003584;}*/ ?>
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
                <table class="layui-hide" id="project_list"></table>
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
    }).use(['index', 'element', 'table', 'form'], function() {
        var $ = layui.$,
            table = layui.table,
            element = layui.element
            form = layui.form;

        $.get("<?php echo url('project/getProjectList'); ?>", function(res){
            console.log(res);
        })
        table.render({
            elem: "#project_list",
            page: true,
            loding: true,
            url: "<?php echo url('project/getProjectList'); ?>",
            cols: [[
                { field: 'order', title: '合同编号', minWidth: 100 },
                { field: 'project_name', title: '项目名称', minWidth: 150 },
                { field: 'source', title: '项目来源', minWidth: 130 },
                { field: 'nature', title: '项目性质', minWidth: 130 },
                { field: 'type_id', title: '项目类型', minWidth: 130 },
                { field: 'unit_name', title: '委托单位', minWidth: 130 },
                { field: 'unit_id', title: '委托单位行业', minWidth: 130 },
                { field: 'sign_time', title: '签订时间', minWidth: 130 },
                { field: 'end_time', title: '工期', minWidth: 130 },
                { field: 'sign_id', title: '签订部门', minWidth: 130 },
                { field: 'sign_agent', title: '经办人', minWidth: 130 },
                { field: 'contract_amount', title: '合同额', minWidth: 130 },
                { field: 'final_amount', title: '决算额', minWidth: 130 },
                { fixed: 'right', title: '操作', align: 'center', templet: '#operationTpl' }
            ]],
            parseData: function(res){
                return {
                    code: res.code,
                    count: res.last_page,
                    data: res.data,
                    msg: res.msg
                }
            }
        })
    });
    </script>
</body>

</html>