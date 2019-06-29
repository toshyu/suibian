<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\pro_task\index.html";i:1561700055;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561340064;}*/ ?>
<!DOCTYPE html>
<html class=" js csstransforms3d">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>任务发布</title>
    <link rel="stylesheet" href="/xmglg/public/static/admin/css/base.css">
    <link rel="stylesheet" href="/xmglg/public/static/admin/css/page.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/xmglg/public/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/xmglg/public/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th {
        text-align: center
    }

    .long-td td {
        text-align: center
    }
    </style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>任务列表</h5>
            </div>
            <div class="ibox-content">
                <!--搜索框开始-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2" style="width: 100px">
                            <div class="input-group">
                                <a href="<?php echo url('proAdd'); ?>"><button class="btn btn-outline btn-primary" type="button">添加任务</button></a>
                            </div>
                        </div>
                        <div style="width:1100px; margin:20px;">
                            <table id="example" class="display defaultTable" style="width:100%; margin:20px; ">
                                <thead>
                                    <tr>
                                        <th class="t_6">中心内部切块表</th>
                                        <th class="t_6">中心下达任务书</th>
                                        <th class="t_6">兴趣小组</th>
                                        <th class="t_6">小组组长</th>
                                        <th class="t_6">项目经理</th>
                                        <th class="t_6">项目部实施计划</th>
                                        <th class="t_6">相关操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td class="t_7">
                                            <?php echo $vo['task_table']; ?>
                                        </td>
                                        <td class="t_7">
                                            <?php echo $vo['task_book']; ?>
                                        </td>
                                        <td class="t_7">
                                            <?php echo $vo['task_group']; ?>
                                        </td>
                                        <td class="t_7">
                                            <?php echo $vo['task_gr_leader']; ?>
                                        </td>
                                        <td class="t_7">
                                            <?php echo $vo['task_gr_pm']; ?>
                                        </td>
                                        <td class="t_7">
                                            <?php echo $vo['task_plan']; ?>
                                        </td>
                                        <td class="t_7">
                                            <div class="btn"><a href="<?php echo url('proUpdate'); ?>?id=<?php echo $vo['task_id']; ?>" class="modify">编辑</a><a href="<?php echo url('proDelete'); ?>?id=<?php echo $vo['task_id']; ?>" onclick="return confirm('是否确认删除?')" class="delete">删除</a></div>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
</body>
<script src="/xmglg/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/xmglg/public/static/admin/js/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function() {
    $('#example').dataTable({
        "lengthMenu": [5, 10, 20, 50, 100],
        "language": {
            "zeroRecords": "没有检索到数据",
            "lengthMenu": "每页 _MENU_ 条记录",
            "search": "搜索 ",
            "info": "共 _PAGES_ 页，_TOTAL_ 条记录，当前显示 _START_ 到 _END_ 条",
            "paginate": {
                "previous": "上一页",
                "next": "下一页",
                "decimal": ",",
                "thousands": "."
            }

        },
    });
});
</script>

</html>