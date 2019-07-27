<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_outsce\add.html";i:1564216896;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>外协添加</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/num06/public/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/template.css" media="all">
    <style>
        .layui-form-label {
            width: 160px;
        }
    </style>
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>项目报销内容添加</legend>
    </fieldset>
    <div class="layui-form">
        <div class="layui-row">
            <div class="layui-col-md5">
                <div class="layui-form-item">
                    <div class="layui-form-label">请选择项目</div>
                    <div class="layui-input-inline">
                        <select name="pro_id" lay-filter="project" lay-search>
                            <option value="">请选择</option>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['project_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-col-md5">
                <div class="layui-form-item">
                    <label class="layui-form-label">外协单位名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="outpro_unit" style="width:200px;" lay-verify="number"
                            autocomplete="off" placeholder="请输入" class="layui-input" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">外协项目联系人</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_contracts" style="width:200px;" lay-verify="number"
                        autocomplete="off" placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">联系人电话</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_phone" style="width:200px;" lay-verify="number" autocomplete="off"
                        placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">外协项目合同编号</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_number" style="width:200px;" lay-verify="number" autocomplete="off"
                        placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">外协项目合同名称</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_name" style="width:200px;" lay-verify="number" autocomplete="off"
                        placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">签订时间</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="sign_time" name="outpro_time" placeholder="yyyy-MM-dd"
                        required lay-verify="required">
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">工期：</label>
                <div class="layui-inline">
                    <input type="text" class="layui-input" placeholder="工期" name="construction_period"
                        id="construction_period" required lay-verify="required">
                    <input name="outpro_start_time" type="hidden">
                    <input name="outpro_end_time" type="hidden">
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">合同额</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_amount" style="width:200px;" lay-verify="number" autocomplete="off"
                        placeholder="请输入 " class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">决算额</label>
                <div class="layui-input-block">
                    <input type="text" name="outpro_account" style="width:200px;" lay-verify="number" autocomplete="off"
                        placeholder="请输入" class="layui-input" required>
                </div>
            </div>
        </div>
        <div class="layui-col-md5">
            <div class="layui-form-item">
                <label class="layui-form-label">决算时间</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="outpro_acc_time" name="outpro_acc_time"
                        placeholder="yyyy-MM-dd" required lay-verify="required">
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-form-item">
                <div class="layui-form-label">付款方式</div>
                <div class="layui-input-block">
                    <a href="javascript:;" class="layui-btn" id="addPayment">添加</a>
                </div>
            </div>
            <div id="payment">
                <div class="layui-form-item">
                    <div class="layui-form-label">&nbsp;</div>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input start_time" placeholder="开始日期">
                    </div>
                    <div class="layui-form-mid">-</div>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input end_time" placeholder="结束日期">
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" placeholder="金额">
                    </div>
                    <div class="layui-input-inline">
                        <a href="javascript:;" class="layui-btn layui-btn-danger delPayment">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-form-item">
                <div class="layui-form-label">预留质量保证金</div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input start_time" placeholder="开始日期">
                </div>
                <div class="layui-form-mid">-</div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input end_time" placeholder="结束日期">
                </div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" placeholder="金额">
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-form-item">
                <div class="layui-form-label">退保证金</div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input return_time" placeholder="日期">
                </div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" placeholder="金额">
                </div>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </div>
</body>

<script type="text/html" id="paymentTpl">
    <div class="layui-form-item">
        <div class="layui-form-label">&nbsp;</div>
        <div class="layui-input-inline">
            <input type="text" class="layui-input start_time" placeholder="开始日期">
        </div>
        <div class="layui-form-mid">-</div>
        <div class="layui-input-inline">
            <input type="text" class="layui-input end_time" placeholder="结束日期">
        </div>
        <div class="layui-input-inline">
            <input type="text" class="layui-input" placeholder="金额">
        </div>
        <div class="layui-input-inline">
            <a href="javascript:;" class="layui-btn layui-btn-danger delPayment">删除</a>
        </div>
    </div>
</script>
<script src="/num06/public/layui/layui.js"></script>
<script>
    layui.config({
        base: '/num06/public/layui/src/' //静态资源所在路径
    }).extend({
        index: 'index' //主入口模块
    }).use(['index', 'element', 'table', 'form', 'util', 'laydate'], function () {
        var $ = layui.$,
            table = layui.table,
            element = layui.element,
            form = layui.form,
            laydate = layui.laydate;
        laydate.render({
            elem: "#sign_time"
        })
        laydate.render({
            elem: "#outpro_acc_time"
        })
        laydate.render({
            elem: ".return_time"
        })
        laydate.render({
            elem: ".start_time"
        })
        laydate.render({
            elem: ".end_time"
        })
        laydate.render({
            elem: "#construction_period",
            range: "/",
            done: function (value) {
                var time_arr = value.split("/");
                var start_time = new Date(time_arr[0]).getTime() / 1000;
                var end_time = new Date(time_arr[1]).getTime() / 1000;
                $("input[name=start_time]").val(start_time);
                $("input[name=end_time]").val(end_time);
                // console.log(start_time);
            }
        })

        $("#addPayment").on('click', function () {
            var html = $("#paymentTpl").html();
            $("#payment").append(html)
            $("#payment").find(".start_time").each(function (index, item) {
                laydate.render({
                    elem: this
                })
            })
            $("#payment").find(".end_time").each(function (index, item) {
                laydate.render({
                    elem: this
                })
            })
        })

        $("body").on("click", ".delPayment", function () {
            var _this = $(this);
            if (_this.parents("#payment").find(".layui-form-item").length <= 1) {
                layer.msg("最少保留一条付款方式")
            } else {
                _this.parents(".layui-form-item").remove();
            }
        })



    });
</script>

</html>