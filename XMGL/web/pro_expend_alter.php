<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>项目费用支出</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<?php
include_once '../sql.php';
$id = $_GET['id'];
$sql = "select * from reimburse where reid=$id";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result))
{
?>
<body>
<form method="post" class="form-x" id="submit" action="../admin/reimbursealter.php" enctype="multipart/form-data"
      accept-charset="utf-8" onsubmit="document.charset='utf-8';">
    <div class="panel admin-panel" style="border: 1px solid #000000;">
        <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目费用录入</strong></div>
        <div class="body-content">
            <div class="form-group">
                <div class="label">
                    <label>报销合同编号：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 300px;" name="repronumber"
                           value="<?php echo $row['repronumber'];?>"/>

                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>报销项目名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 300px;" name="reproname"
                           value="<?php echo $row['reproname'];?>"/>

                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所属部门：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 300px;" name="redepart"
                           value="<?php echo $row['redepart'];?>"/>

                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>报账人：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="reusername"
                           value="<?php echo $row['reusername'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>报账时间：</label>
                </div>
                <div class="field">
                    <input type="date" class="input" name="retime" value="<?php echo $row['retime'];?>"
                           style="width: 300px;"/>

                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>报销分类：</label>
                </div>
                <div class="field">
                    <select class="input" name="respecies"
                            style="width: 500px;height: 45px;font-size: 15px;border: 1px solid #D0D0D0;">
                        <option value="">部门经营</option>
                        <option value="">部门生产</option>
                        <option value="">部门管理</option>
                        <option value="">公共经费</option>
                        <option value="">中心管理费</option>
                        <option value="" selected="selected"><?php echo $row['respecies'];?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>上交院有关费用：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="upper"
                           value="<?php echo $row['upper'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>管理费：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="management"
                           value="<?php echo $row['management'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>房屋使用、水电、空调：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="life"
                           value="<?php echo $row['life'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>设备占用费：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="occu"
                           value="<?php echo $row['occu'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>设备折旧费：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="deprec"
                           value="<?php echo $row['deprec'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>其它：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="upother"
                           value="<?php echo $row['upother'];?>"/>
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
                    <input type="text" class="input" style="width: 500px;" name="outfee"
                           value="<?php echo $row['outfee'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>办公费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="office"
                           value="<?php echo $row['office'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>邮电费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="post"
                           value="<?php echo $row['post'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>差旅费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="costs"
                           value="<?php echo $row['costs'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>交通费:</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="traffic"
                           value="<?php echo $row['traffic'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>住宿费:</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="house"
                           value="<?php echo $row['house'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>培训费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="train"
                           value="<?php echo $row['train'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>会议费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="meeting"
                           value="<?php echo $row['meeting'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>会议场地租赁费：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="meetsite"
                           value="<?php echo $row['meetsite'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>住宿费：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="meethouse"
                           value="<?php echo $row['meethouse'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>印刷打印费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="meetprint"
                           value="<?php echo $row['meetprint'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>车辆维护费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="vehide"
                           value="<?php echo $row['vehide'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>专能通讯网费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="called"
                           value="<?php echo $row['called'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>专用燃料费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="fuel"
                           value="<?php echo $row['fuel'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>专用材料费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="meterial"
                           value="<?php echo $row['material'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>出差布置费用：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="subsidy"
                           value="<?php echo $row['subsidy'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>租赁费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="lease"
                           value="<?php echo $row['lease'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>中标服务费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="rebid"
                           value="<?php echo $row['rebid'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>税费：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 500px;" name="tax"
                           value="<?php echo $row['tax'];?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label><strong>其它：</strong></label>
                </div>
                <div class="field">
                    <input type="text" class="input" style="width: 100px;float:right;
                        " name="othername" value="<?php echo $row['othername'];?>"/>
                </div>
            </div>
           <input type="hidden" name="id" value="<?php echo $row['reid']; ?>">
</form>
<?php } ?>
<div class="field">
    <input class="button bg-main icon-check-square-o" type="submit" value="确认修改" name="add">
    <a class="button bg-main icon-check-square-o" href="#" onclick="javascript:history.back(-1);">返回</a>
</div>
</body>

</html>