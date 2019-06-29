<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\index\index.html";i:1561793238;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561790290;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\footer.html";i:1561790369;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
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
    <div class="wrapper wrapper-content">
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <div>尊敬的会员<span id="weather"></span></div>
        </div>
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
                                <a href="<?php echo url('pro_Add'); ?>"><button class="btn btn-outline btn-primary" type="button">添加项目</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--搜索框结束-->
                <div class="hr-line-dashed"></div>
                <div class="example-wrap">
                    <div class="example">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="long-tr">
                                    <th>项目编号</th>
                                    <th>项目名称</th>
                                    <th width="15%">添加时间</th>
                                    <th width="15%">更新时间</th>
                                    <th width="20%">操作</th>
                                </tr>
                            </thead>
                            <tbody id="article_list">
                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                                <tr class="long-td">
                                    <td><?php echo $vo['pro_number']; ?></td>
                                    <td><?php echo $vo['pro_name']; ?></td>
                                    <td><?php echo $vo['pro_create_time']; ?></td>
                                    <td><?php echo $vo['pro_update_time']; ?></td>
                                    <td>
                                        <a href="javascript:;" onclick="giveQx({{d[i].id}})" class="btn btn-info btn-outline btn-xs">
                                            <i class="fa fa-paste"></i> 进入</a>&nbsp;&nbsp;
                                        <a href="<?php echo url('edit_cate',['id'=>$vo['id']]); ?>" class="btn btn-primary btn-outline btn-xs">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="del_cate(<?php echo $vo['id']; ?>)" class="btn btn-danger btn-outline btn-xs">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/xmglg/public/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/xmglg/public/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/xmglg/public/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/xmglg/public/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/xmglg/public/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/xmglg/public/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/xmglg/public/static/admin/js/plugins/switchery/switchery.js"></script>
<!--IOS开关样式-->
<script src="/xmglg/public/static/admin/js/jquery.form.js"></script>
<script src="/xmglg/public/static/admin/js/layer/layer.js"></script>
<script src="/xmglg/public/static/admin/js/laypage/laypage.js"></script>
<script src="/xmglg/public/static/admin/js/laytpl/laytpl.js"></script>
<script src="/xmglg/public/static/admin/js/lunhui.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/xmglg/public/static/admin/js/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function() { $(".i-checks").iCheck({ checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green", }) });
</script>
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
    <script src="/xmglg/public/static/admin/js/jquery.leoweather.min.js"></script>
    <script type="text/javascript">
    $('#weather').leoweather({ format: '，{时段}好！<span id="colock">现在时间是：<strong>{年}年{月}月{日}日 星期{周} {时}:{分}:{秒}</strong></span>， <b>{城市}天气</b> {天气} {夜间气温}℃ ~ {白天气温}℃' });
    </script>
</body>

</html>