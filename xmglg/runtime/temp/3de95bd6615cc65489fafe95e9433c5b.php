<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\pro_cut\proupdate.html";i:1561625623;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561340064;}*/ ?>
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
                    <form method="post" class="form-x" id="submit" action="../admin/procutalter.php" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 成本切块</strong></div>
                        <div class="body-content">
                            <div class="form-group">
                                <div class="label">
                                    <label>合同编号：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="cutpronumber" value="<?php echo $vo['cutpronumber']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>切块额：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="cutmoney" value="<?php echo $vo['cutmoney']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>合同额：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="promoney" value="<?php echo $vo['promoney']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>写入时间：</label>
                                </div>
                                <div class="field">
                                    <input type="date" class="input" name="cuttime" id="date_info" value="<?php echo $vo['cuttime']; ?>" style="width: 300px;" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="label">
                                        <label>生产费用：</label>
                                    </div>
                                    <p><label>生产金额1: </label><input type="text" name="produce1" class="input1" value="<?php echo $vo['produce1']; ?>" />
                                        <label>所占比例: </label><input type="text" class="input1" value="<?php echo $vo['producepce1']; ?>" />
                                        部门： <select style="width: 100px;" name="depart1" class="">
                                            <option value="中心办公室">中心办公室</option>
                                            <option value="地质环境所">地质环境所</option>
                                            <option value="地质遥感所">地质遥感所</option>
                                            <option value="水文地质所">水文地质所</option>
                                            <option value="胶东事业部">胶东事业部</option>
                                            <option value="<?php echo $vo['depart1']; ?>">
                                                <?php echo $vo['depart1']; ?>
                                            </option>
                                        </select></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>生产金额2: </label><input type="text" name="produce2" class="input1" value="<?php echo $vo['produce2']; ?>" />
                                        <label>所占比例: </label><input type="text" class="input1" value="<?php echo $vo['producepce2']; ?>" />
                                        部门： <select style="width: 100px;" name="depart2" class="">
                                            <option value="中心办公室">中心办公室</option>
                                            <option value="地质环境所">地质环境所</option>
                                            <option value="地质遥感所">地质遥感所</option>
                                            <option value="水文地质所">水文地质所</option>
                                            <option value="胶东事业部">胶东事业部</option>
                                            <option value="<?php echo $vo['depart2']; ?>">
                                                <?php echo $vo['depart2']; ?>
                                            </option>
                                        </select></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>经营费用：</label>
                                </div>
                                <p><label>经营金额1: </label><input type="text" name="run1" class="input1" value="<?php echo $vo['run1']; ?>" />
                                    <label>所占比例: </label><input type="text" class="input1" value="<?php echo $vo['runpce1']; ?>" />
                                    部门： <select style="width: 100px;" name="depart3" class="">
                                        <option value="中心办公室">中心办公室</option>
                                        <option value="地质环境所">地质环境所</option>
                                        <option value="地质遥感所">地质遥感所</option>
                                        <option value="水文地质所">水文地质所</option>
                                        <option value="胶东事业部">胶东事业部</option>
                                        <option value="<?php echo $vo['depart3']; ?>">
                                            <?php echo $vo['depart3']; ?>
                                        </option>
                                    </select></p>
                                <div class="label"><label> </label></div>
                                <p><label>经营金额2: </label><input type="text" name="run2" class="input1" value="<?php echo $vo['run2']; ?>" />
                                    <label>所占比例: </label><input type="text" class="input1" value="<?php echo $vo['runpce2']; ?>" />
                                    部门： <select style="width: 100px;" name="depart4" class="">
                                        <option value="中心办公室">中心办公室</option>
                                        <option value="地质环境所">地质环境所</option>
                                        <option value="地质遥感所">地质遥感所</option>
                                        <option value="水文地质所">水文地质所</option>
                                        <option value="胶东事业部">胶东事业部</option>
                                        <option value="<?php echo $vo['depart4']; ?>">
                                            <?php echo $vo['depart4']; ?>
                                        </option>
                                    </select></p>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>管理费用：</label>
                                </div>
                                <p><label>管理金额: </label><input type="text" name="administration" class="input1" value="<?php echo $vo['administration']; ?>" />
                                    <label>所占比例: </label><input type="text" class="input1" value="<?php echo $vo['administrationpce']; ?>" />
                                    部门： <select style="width: 100px;" name="depart5" class="">
                                        <option value="民生地质中心">民生地质中心</option>
                                    </select></p>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $vo['cutid']; ?>">
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="field">
                    <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认修改" name="add"></input>
                    <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
                </div>
                </form>
                <script>
                </script>
</body>

</html>