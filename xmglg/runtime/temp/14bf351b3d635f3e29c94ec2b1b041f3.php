<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\pro_extend\index.html";i:1561704988;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561340064;}*/ ?>
<!DOCTYPE html>
<html class=" js csstransforms3d">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>项目信息</title>
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
                <h5>项目列表</h5>
            </div>
            <div class="ibox-content">
                <!--搜索框开始-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2" style="width: 100px">
                            <div class="input-group">
                                <a href="<?php echo url('proadd'); ?>"><button class="btn btn-outline btn-primary" type="button">添加项目</button></a>
                            </div>
                        </div>
                        <div style="width:1100px; margin:20px;">
                            <table id="example" class="display defaultTable" style="width:100%; margin:20px; ">
                                <thead>
                                    <tr>
                                        <th class="t_1">报销合同编号</th>
                                        <th class="t_2">报销合同名称</th>
                                        <th class="t_3">报账时间</th>
                                        <th class="t_4">报账人</th>
                                        <th class="t_5">操作菜单</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td class="t_1"><?php echo $vo['repronumber']; ?></td>
                                        <td class="t_2"><?php echo $vo['reproname']; ?></td>
                                        <td class="t_3"><?php echo $vo['retime']; ?></td>
                                        <td class="t_4"><?php echo $vo['reusername']; ?></td>
                                        <td class="t_5">
                                            <div class="btn"><a href="<?php echo url('proUpdate'); ?>?id=<?php echo $vo['reid']; ?>" class="modify">编辑</a><a href="<?php echo url('proDelete'); ?>?id=<?php echo $vo['reid']; ?>" onclick="return confirm('是否确认删除?')" class="delete">删除</a></div>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!--  <div class="pageSelect">
                            <span>共 <b><?php //echo $znum; ?></b> 条 每页 <b>3 </b>条  <?php //echo $pageNum; ?>/<?php//s echo $endPage;?></span>
                            <div class="pageWrap">
                                <a class="pagePre" href="?pageNum=<?php //echo $pageNum==1?1:($pageNum-1)?>"><i class="ico-pre">&nbsp;</i></a><a href="?pageNum=1" class="pagenumb">首页</a>

                                <a href="?pageNum=1" class="pagenumb cur">1</a>
                                <a href="?pageNum=2" class="pagenumb" id="num1">2</a>
                                <a href="?pageNum=3" class="pagenumb" id="num2">3</a>
                                 <a href="?pageNum=<?php// echo $endPage;?>" class="pagenumb">尾页</a>
                                <a href="?pageNum=<?php //echo $pageNum==$endPage?$endPage:($pageNum+1)?>" class="pagenext"><i class="ico-next">&nbsp;</i></a>
                            </div>
                        </div> -->
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
</body>

</html>