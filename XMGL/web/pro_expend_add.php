<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目费用支出</title>
     <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>

<body>
    <div class="super-content RightMain" id="RightMain">
        <!--header-->
        <div class="superCtab">
            <div class="ctab-title clearfix">
                <h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
       
                <div class="ctab-Main-title">
                    <ul class="clearfix">
                          <li><a href="pro_expend_list.php">报销合同列表</a></li>
                        <li class="cur"><a href="pro_expend_add.php">报销合同添加</a></li>
                        <li><a href="">xxxx</a></li>
                        <li> <a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                    </ul>
                </div>
    <form method="post" class="form-x" id="submit" action="../admin/reimburseadd.php" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
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
                        <select  style="width: 135px;"     name="redepart" class="">
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
                        <input type="text" class="input" style="width: 500px;" name="meterial" value="" />
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
    </form>
    <div class="field">
        <input class="button bg-main icon-check-square-o" type="submit" id="submit1" value="确认添加" name="add"></input>
        <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
    </div>
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