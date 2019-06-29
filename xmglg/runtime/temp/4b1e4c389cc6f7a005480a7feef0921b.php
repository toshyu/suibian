<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\pro_extend\proadd.html";i:1561704719;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561340064;}*/ ?>
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
    .file-item{float: left; position: relative; width: 110px;height: 110px; margin: 0 20px 20px 0; padding: 4px;}
.file-item .info{overflow: hidden;}
.uploader-list{width: 100%; overflow: hidden;}
</style>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加</h5>
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
                    <form method="post" class="form-x" id="submit" action="<?php echo url('proDoAdd'); ?>" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目费用录入</strong></div>
                        <div class="body-content">
                            <div class="form-group">
                                <div class="label">
                                    <label>报销合同编号：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="repronumber" value="" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报销项目名称：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="reproname" value="" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>所属部门：</label>
                                </div>
                                <div class="field">
                                    <select style="width: 135px;" name="redepart" class="">
                                        <option value="中心办公室">中心办公室</option>
                                        <option value="地质环境所">地质环境所</option>
                                        <option value="地质遥感所">地质遥感所</option>
                                        <option value="水文地质所">水文地质所</option>
                                        <option value="胶东事业部">胶东事业部</option>
                                    </select>
                                    <!-- <input type="text" class="input" style="width: 300px;" name="redepart" value="" /> -->
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报账人：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="reusername" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报账时间：</label>
                                </div>
                                <div class="field">
                                    <input type="date" class="input" name="retime" value="" style="width: 300px;" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>报销分类：</label>
                                </div>
                                <div class="field">
                                    <select class="input" name="respecies" style="width: 500px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                                        <option value="部门经营">部门经营</option>
                                        <option value="部门生产">部门生产</option>
                                        <option value="部门管理">部门管理</option>
                                        <option value="公共经费">公共经费</option>
                                        <option value="中心管理费">中心管理费</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>上交院有关费用：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="upper" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>管理费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="management" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>房屋使用、水电、空调：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="life" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>设备占用费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="occu" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>设备折旧费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="deprec" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>其它：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="upother" value="" />
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
                                    <input type="text" class="input" style="width: 500px;" name="outfee" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>办公费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="office" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>邮电费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="post" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>差旅费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="costs" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>交通费:</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="traffic" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>住宿费:</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="house" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>培训费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="train" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>会议费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meeting" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>会议场地租赁费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meetsite" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>住宿费：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meethouse" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>印刷打印费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="meetprint" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>车辆维护费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="vehide" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>专能通讯网费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="called" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>专用燃料费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="fuel" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>专用材料费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="material" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>出差布置费用：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="subsidy" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>租赁费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="lease" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>中标服务费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="rebid" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>税费：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="tax" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label><strong>其它：</strong></label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 100px;float:right;
                        " name="othername" value="" />
                                </div>
                            </div>
                            <div class="field">
                                <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加"></input>
                                <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
                            </div>
                    </form>
                    <script>
                    $(document).ready(function() {
                        var time = new Date();
                        var day = ("0" + time.getDate()).slice(-2);
                        var month = ("0" + (time.getMonth() + 1)).slice(-2);
                        var today = time.getFullYear() + "-" + (month) + "-" + (day);
                        $('input[type="date"]').val(today);
                    });
                    </script>
</body>

</html>