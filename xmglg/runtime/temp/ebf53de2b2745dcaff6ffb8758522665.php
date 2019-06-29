<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:92:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\pro_extend\proupdate.html";i:1561772223;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561340064;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/xmglg/public/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/xmglg/public/static/admin/webupload/style.css">
<style>
    .file-item {
    float: left;
    position: relative;
    width: 110px;
    height: 110px;
    margin: 0 20px 20px 0;
    padding: 4px;
}

.file-item .info {
    overflow: hidden;
}

.uploader-list {
    width: 100%;
    overflow: hidden;
}
</style>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>修改文章</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <form method="post" class="form-x" id="submit" action="<?php echo url('proUpdateDo'); ?>" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目费用录入</strong></div>
                        <div class="body-content">
                            <div class="form-group">
                                <div class="label">
                                    <label>报销合同编号：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="repronumber" value="<?php echo $vo['repronumber']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报销项目名称：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="reproname" value="<?php echo $vo['reproname']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>所属部门：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="redepart" value="<?php echo $vo['redepart']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报账人：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="reusername" value="<?php echo $vo['reusername']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报账时间：</label>
                                </div>
                                <div class="field">
                                    <input type="date" class="input" name="retime" value="<?php echo $vo['retime']; ?>" style="width: 300px;" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报销分类：</label>
                                </div>
                                <div class="field">
                                    <select class="input" name="respecies" style="width: 500px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                                        <option value="">部门经营</option>
                                        <option value="">部门生产</option>
                                        <option value="">部门管理</option>
                                        <option value="">公共经费</option>
                                        <option value="">中心管理费</option>
                                        <option value="" selected="selected">
                                            <?php echo $vo['respecies']; ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>上交院有关费用：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="upper" value="<?php echo $vo['upper']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>管理费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="management" value="<?php echo $vo['management']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>房屋使用、水电、空调：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="life" value="<?php echo $vo['life']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>设备占用费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="occu" value="<?php echo $vo['occu']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>设备折旧费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="deprec" value="<?php echo $vo['deprec']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>其它：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="upother" value="<?php echo $vo['upother']; ?>" />
                                </div>
                            </div>
                            <!--  <div class="form-group">
                <div class="label">
                    <label><strong>职工有关费用：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="pro_name" value="" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>职工工资：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="pro_name" value="" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>养老保险费：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="pro_name" value="" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>住房公积金：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="pro_name" value="" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>其它福利：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="pro_name" value="" />
                </div>
            </div> -->
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>外协付款：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="outfee" value="<?php echo $vo['outfee']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>办公费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="office" value="<?php echo $vo['office']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>邮电费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="post" value="<?php echo $vo['post']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>差旅费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="costs" value="<?php echo $vo['costs']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>交通费:</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="traffic" value="<?php echo $vo['traffic']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>住宿费:</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="house" value="<?php echo $vo['house']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>培训费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="train" value="<?php echo $vo['train']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>会议费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meeting" value="<?php echo $vo['meeting']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>会议场地租赁费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meetsite" value="<?php echo $vo['meetsite']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>住宿费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meethouse" value="<?php echo $vo['meethouse']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>印刷打印费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meetprint" value="<?php echo $vo['meetprint']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>车辆维护费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="vehide" value="<?php echo $vo['vehide']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>专能通讯网费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="called" value="<?php echo $vo['called']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>专用燃料费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="fuel" value="<?php echo $vo['fuel']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>专用材料费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="material" value="<?php echo $vo['material']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>出差布置费用：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="subsidy" value="<?php echo $vo['subsidy']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>租赁费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="lease" value="<?php echo $vo['lease']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>中标服务费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="rebid" value="<?php echo $vo['rebid']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>税费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="tax" value="<?php echo $vo['tax']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>其它：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 100px;float:right;
                        " name="othername" value="<?php echo $vo['othername']; ?>" />
                                </div>
                            </div>
                            <input type="hidden" name="reid" value="<?php echo $vo['reid']; ?>">
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="field">
                                <input class="button bg-main icon-check-square-o" type="submit" value="确认修改" name="">
                                <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
                            </div>
                    </form>
</body>

</html>