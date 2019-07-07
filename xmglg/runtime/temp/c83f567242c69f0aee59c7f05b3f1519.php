<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\project\proupdate.html";i:1562305089;s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\public\header.html";i:1561790290;}*/ ?>
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
                    <!--startprint1-->
                    <form method="post" class="form-x" id="submit" action="<?php echo url('proUpdateDo'); ?>" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
                        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目基本信息</strong>&nbsp</div>
                        <div class="body-content">
                            <div class="form-group">
                                <div class="label">
                                    <label>合同编号：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 300px;" name="pro_number" value="<?php echo $vo['pro_number']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>项目名称：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" style="width: 500px;" name="pro_name" value="<?php echo $vo['pro_name']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>来源：</label>
                                </div>
                                <div class="field">
                                    <select name="source" class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                                        <option value="合同">合同</option>
                                        <option value="备案">备案</option>
                                        <option value="上级下达">上级下达</option>
                                        <option value="其他">其他</option>
                                        <option value="" selected='selected'>
                                            <?php echo $vo['source']; ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>性质：</label>
                                </div>
                                <div class="field">
                                    <select name="nature" class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                                        <option value="市场招标">市场招标</option>
                                        <option value="财政招标">财政招标</option>
                                        <option value="合作挂靠">合作挂靠</option>
                                        <option value="其他">其他</option>
                                        <option value="" selected="selected">
                                            <?php echo $vo['nature']; ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>类型：</label>
                                </div>
                                <select class="input" name="pro_type" style="width: 500px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                                    <option value="地质灾害评估">地质灾害评估</option>
                                    <option value="地质灾害勘察">地质灾害勘察</option>
                                    <option value="地质灾害设计">地质灾害设计</option>
                                    <option value="地质勘察（地质找矿）">地质勘察（地质找矿）</option>
                                    <option value="压覆矿产资源调查">压覆矿产资源调查</option>
                                    <option value="地下水评价">地下水评价</option>
                                    <option value="济南泉水环境评价">济南泉水环境评价</option>
                                    <option value="水文地质勘察">水文地质勘察</option>
                                    <option value="环境地质调查">环境地质调查</option>
                                    <option value="土地开发利用和矿山恢复治理方案编制（两案编制）">土地开发利用和矿山恢复治理方案编制（两案编制）</option>
                                    <option value="遥感地质">遥感地质</option>
                                    <option value="测量">测量</option>
                                    <option value="储量核实">储量核实</option>
                                    <option value="其他">其他</option>
                                    <option value="" selected="selected">
                                        <?php echo $vo['pro_type']; ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>委托单位：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" name="unit_name" value="<?php echo $vo['unit_name']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>委托单位行业：</label>
                                </div>
                                <div class="field">
                                    <select name="unit_industy" class="input" style="width: 300px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                                        <option value="政府部门">政府部门</option>
                                        <option value="国土">国土</option>
                                        <option value="规划">规划</option>
                                        <option value="水利">水利</option>
                                        <option value="建筑">建筑</option>
                                        <option value="交通">交通</option>
                                        <option value="环保">环保</option>
                                        <option value="电力">电力</option>
                                        <option value="能源">能源</option>
                                        <option value="控股投资">控股投资</option>
                                        <option value="其他">其他</option>
                                        <option value="" selected='selected'>
                                            <?php echo $vo['unit_industy']; ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>签订时间：</label>
                                </div>
                                <div class="field">
                                    <input type="date" class="input" name="time" value="<?php echo $vo['time']; ?>" style="width: 300px;" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>工期：</label>
                            </div>
                            <div class="field">
                                <input type="date" class="" name="startdate" value="<?php echo $vo['startdate']; ?>" style="width: 300px; height: 45px;border-radius: 4px;" />
                                &nbsp;&nbsp;&nbsp;——&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="date" class="" name="enddate" value="<?php echo $vo['enddate']; ?>" style="width: 300px;height: 45px;border-radius: 4px;" />
                                <div class="tips"></div>
                            </div>
                        </div>
                        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目经济信息</strong></div>
                        <div class="body-content">
                            <div class="form-group">
                                <div class="label">
                                    <label>合同额：</label>
                                </div>
                                <div class="field">
                                    <input type="text" style="width: 300px;" class="input" name="amount" value="<?php echo $vo['amount']; ?>" />
                                    <div class="tips"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>决算额：</label>
                                </div>
                                <div class="field">
                                    <input type="text" style="width: 300px;" class="input" name="account" value="<?php echo $vo['account']; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>决算日期：</label>
                                </div>
                                <div class="field">
                                    <input type="date" class="input" name="acc_time" value="<?php echo $vo['acc_time']; ?>" style="width: 300px;" />
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="label">
                                        <label>付款方式：</label>
                                    </div>
                                    <p><label>第一笔款: </label><input type="date" name="paydate1" value="<?php echo $vo['paydate1']; ?>" />--<input type="date" name="paydate2" value="<?php echo $vo['paydate2']; ?>" />
                                        金额: </label><input type="input" name="paymoney1" value="<?php echo $vo['paymoney1']; ?>" /></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>第二笔款: </label><input type="date" name="paydate3" value="<?php echo $vo['paydate3']; ?>" />--<input type="date" name="paydate4" value="<?php echo $vo['paydate4']; ?>" />
                                        金额: </label><input type="input" name="paymoney2" value="<?php echo $vo['paymoney2']; ?>" /></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>第三笔款: </label><input type="date" name="paydate5" value="<?php echo $vo['paydate5']; ?>" />--<input type="date" name="paydate6" value="<?php echo $vo['paydate6']; ?>" />
                                        金额: </label><input type="input" name="paymoney3" value="<?php echo $vo['paymoney3']; ?>" /></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>第四笔款: </label><input type="date" name="paydate7" value="<?php echo $vo['paydate7']; ?>" />--<input type="date" name="paydate8" value="<?php echo $vo['paydate8']; ?>" />
                                        金额: </label><input type="input" name="paymoney4" value="<?php echo $vo['paymoney4']; ?>" /></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>退保证金: </label><input type="date" name="paydate9" value="<?php echo $vo['paydate9']; ?>" />--<input type="date" name="paydate10" value="<?php echo $vo['paydate10']; ?>" />
                                        金额: </label><input type="input" name="paymoney5" value="<?php echo $vo['paymoney5']; ?>" /></p>
                                </div>
                            </div>
                            <div>
                                <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 三金一费信息</strong></div>
                                <div class="body-content">
                                    <div class="form-group">
                                        <div class="label">
                                            <label>投标保证金：</label>
                                        </div>
                                        <p><label>时间: </label><input type="date" name="remitdate1" value="<?php echo $vo['remitdate1']; ?>" />汇款金额: </label><input type="input" name="remit1" value="<?php echo $vo['remit1']; ?>" />
                                            汇入单位：<input type="input" name="remiter1" value="<?php echo $vo['remiter1']; ?>" /></p>
                                        <div class="label"><label> </label></div>
                                        <p><label>时间: </label><input type="date" name="returndate1" value="<?php echo $vo['returndate1']; ?>" />回款金额: </label><input type="input" name="return1" value="<?php echo $vo['return1']; ?>" />
                                            付款单位：<input type="input" name="returner1" value="<?php echo $vo['returner1']; ?>" /></p>
                                        <div class="label"><label> </label></div>
                                        <p><label>时间: </label><input type="date" name="rollindate1" value="<?php echo $vo['rollindate1']; ?>" />转入金额: </label><input type="input" name="rollin1" value="<?php echo $vo['rollin1']; ?>" />
                                            转入类型： <select style="width: 135px;" name="totype1">
                                                <option>投标保证金</option>
                                                <option>合同履约金</option>
                                                <option>质量保证金</option>
                                                <option>中标服务费</option>
                                                <option value="" selected="selected">
                                                    <?php echo $vo['totype1']; ?>
                                                </option>
                                            </select></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="label">
                                        <label>合同履约金：</label>
                                    </div>
                                    <p><label>时间: </label><input type="date" name="remitdate2" value="<?php echo $vo['remitdate2']; ?>" />汇款金额: </label><input type="input" name="remit2" value="<?php echo $vo['remit2']; ?>" />
                                        汇入单位：<input type="input" name="remiter2" value="<?php echo $vo['remiter2']; ?>" /></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>时间: </label><input type="date" name="returndate2" value="<?php echo $vo['returndate2']; ?>" />回款金额: </label><input type="input" name="return2" value="<?php echo $vo['return2']; ?>" />
                                        付款单位：<input type="input" name="returner2" value="<?php echo $vo['returner2']; ?>" /></p>
                                    <div class="label"><label> </label></div>
                                    <p><label>时间: </label><input type="date" name="rollindate2" value="<?php echo $vo['rollindate2']; ?>" />转入金额: </label><input type="input" name="rollin2" value="<?php echo $vo['rollin2']; ?>" />
                                        转入类型： <select style="width: 135px;" name="totype2">
                                            <option>投标保证金</option>
                                            <option>合同履约金</option>
                                            <option>质量保证金</option>
                                            <option>中标服务费</option>
                                            <option value="" selected="selected">
                                                <?php echo $vo['totype2']; ?>
                                            </option>
                                        </select></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>质量保证金：</label>
                                </div>
                                <p><label>时间: </label><input type="date" name="remitdate3" value="<?php echo $vo['remitdate3']; ?>" />汇款金额: </label><input type="input" name="remit3" value="<?php echo $vo['remit3']; ?>" />
                                    汇入单位：<input type="input" name="remiter3" value="<?php echo $vo['remiter3']; ?>" /></p>
                                <div class="label"><label> </label></div>
                                <p><label>时间: </label><input type="date" name="returndate3" value="<?php echo $vo['returndate3']; ?>" />回款金额: </label><input type="input" name="return3" value="<?php echo $vo['return3']; ?>" />
                                    付款单位：<input type="input" name="returner3" value="<?php echo $vo['returner3']; ?>" /></p>
                                <div class="label"><label> </label></div>
                                <p><label>时间: </label><input type="date" name="rollindate3" value="<?php echo $vo['rollindate3']; ?>" />转入金额: </label><input type="input" name="rollin3" value="<?php echo $vo['rollin3']; ?>" />
                                    转入类型： <select style="width: 135px;" name="totype3">
                                        <option>投标保证金</option>
                                        <option>合同履约金</option>
                                        <option>质量保证金</option>
                                        <option>中标服务费</option>
                                        <option value="" selected='selected'>
                                            <?php echo $vo['totype3']; ?>
                                        </option>
                                    </select></p>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <div class="label">
                                    <label>中标服务费：</label>
                                </div>
                                <p><label>时间: </label><input type="date" name="remitdate4" value="<?php echo $vo['remitdate4']; ?>" />汇款金额: </label><input type="input" name="remit4" value="<?php echo $vo['remit4']; ?>" />
                                    汇入单位：<input type="input" name="remiter4" value="<?php echo $vo['remiter4']; ?>" /></p>
                                <div class="label"><label> </label></div>
                                <p><label>时间: </label><input type="date" name="returndate4" value="<?php echo $vo['returndate4']; ?>" />回款金额: </label><input type="input" name="return4" value="<?php echo $vo['return4']; ?>" />
                                    付款单位：<input type="input" name="returner4" value="<?php echo $vo['returner4']; ?>" /></p>
                                <div class="label"><label> </label></div>
                                <p><label>时间: </label><input type="date" name="rollindate4" value="<?php echo $vo['rollindate4']; ?>" />转入金额: </label><input type="input" name="rollin4" value="<?php echo $vo['rollin4']; ?>" />
                                    转入类型： <select style="width: 135px;" name="totype4">
                                        <option>投标保证金</option>
                                        <option>合同履约金</option>
                                        <option>质量保证金</option>
                                        <option>中标服务费</option>
                                        <option value="" selected="selected">
                                            <?php echo $vo['totype4']; ?>
                                        </option>
                                    </select></p>
                            </div>
                        </div>
                        <!--endprint1-->
                        <input type="hidden" name="id" value="<?php echo $vo['id']; ?>">
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="field">
                            <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认修改" name=" ">
                            <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
                            <input type=button class="btn btn-info" name='button_export' title='打印' onclick=preview(1) value=打印>
                        </div>
                    </form>
                    <script language="javascript">
                    function preview(oper) {
                        if (oper < 10) {
                            bdhtml = window.document.body.innerHTML; //获取当前页的html代码
                            sprnstr = "<!--startprint" + oper + "-->"; //设置打印开始区域
                            eprnstr = "<!--endprint" + oper + "-->"; //设置打印结束区域
                            prnhtml = bdhtml.substring(bdhtml.indexOf(sprnstr) + 18); //从开始代码向后取html
                            prnhtml = prnhtml.substring(0, prnhtml.indexOf(eprnstr)); //从结束代码向前取html
                            window.document.body.innerHTML = prnhtml;
                            window.print();
                            window.document.body.innerHTML = bdhtml;
                        } else {
                            window.print();
                        }
                    }
                    </script>
</body>

</html>