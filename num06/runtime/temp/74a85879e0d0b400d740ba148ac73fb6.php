<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project\add.html";i:1563073272;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>消息中心首页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/num06/public/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/template.css" media="all">
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>项目内容添加</legend>
    </fieldset>
    <form class="layui-form" action="<?php echo url('index/project/AddDo'); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="document.charset='utf-8';">
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">合同编号</label>
            <div class="layui-input-block">
                <input type="text" name="order" lay-verify="title" autocomplete="off" placeholder="请输入合同编号" class="layui-input">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">项目名称</label>
            <div class="layui-input-block">
                <input type="text" name="project_name" lay-verify="title" autocomplete="off" placeholder="请输入项目名称" class="layui-input">
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md2">
                <label class="layui-form-label">来源</label>
                <div class="layui-input-block">
                    <select name="source" lay-filter="aihao">
                        <option value="">请选择</option>
                        <option value="1">合同</option>
                        <option value="2">备案</option>
                        <option value="3">上级下达</option>
                        <option value="4">其他</option>
                    </select>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md2">
                <label class="layui-form-label">性质</label>
                <div class="layui-input-block">
                    <select name="nature" lay-filter="aihao">
                        <option value="">请选择</option>
                        <option value="1">市场招标</option>
                        <option value="2">财政招标</option>
                        <option value="3">合作挂靠</option>
                        <option value="4">其他</option>
                    </select>
                </div>
            </div>
            <div class=" layui-col-md2">
                <label class="layui-form-label">类型</label>
                <div class="layui-input-block">
                    <select name="type_id" lay-filter="aihao">
                        <option value=" ">请选择</option>
                        <option value="1">地质灾害评估</option>
                        <option value="2">地质灾害勘察</option>
                        <option value="3">地质灾害设计</option>
                        <option value="4">地质勘察（地质找矿）</option>
                        <option value="5">压覆矿产资源调查</option>
                        <option value="6">地下水评价</option>
                        <option value="7">济南泉水环境评价</option>
                        <option value="8">水文地质勘察</option>
                        <option value="9">环境地质调查</option>
                        <option value="9">土地开发利用和矿山恢复治理方案编制（两案编制）</option>
                        <option value="10">遥感地质</option>
                        <option value="11">测量</option>
                        <option value="12">储量核实</option>
                        <option value="13">其他</option>
                    </select>
                </div>
            </div>
        </div>
        <p></p>
        <!--  -->
        <div class="layui-row">
            <div class="layui-form-item layui-col-md3">
                <label class="layui-form-label">委托单位：</label>
                <div class="layui-input-block">
                    <input type="text" name="unit_name" lay-verify="title" autocomplete="off" placeholder="请输入委托单位名称" class="layui-input">
                </div>
            </div>
            <div class=" layui-col-md3">
                <label class="layui-form-label">委托单位类型</label>
                <div class="layui-input-block">
                    <select name="unit_id" lay-filter="aihao">
                        <option value=" ">请选择</option>
                        <option value="1">{政府部门}</option>
                        <option value="2">国土</option>
                        <option value="3">规划</option>
                        <option value="4">水利</option>
                        <option value="5">建筑</option>
                        <option value="6">交通</option>
                        <option value="7">环保</option>
                        <option value="8">电力</option>
                        <option value="9">能源</option>
                        <option value="10">控股投资</option>
                        <option value="11">其他</option>
                    </select>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">签订时间：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" id="test1" name="sign_time" placeholder="yyyy-MM-dd">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">工期：</label>
            <div class="layui-inline">
                <!--                 <div class="layui-input-inline" style="width: 100px;">
                    <input type="date" name="start_time" placeholder="请输入开始时间" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">-</div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="date" name="end_time" placeholder="请输入结束时间" autocomplete="off" class="layui-input">
                </div>
 -->
                <input type="text" class="layui-input" placeholder="工期" name="construction_period" id="construction_period">
                <input type="hidden" name="start_time">
                <input type="hidden" name="end_time">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">签订部门</label>
            <div class="layui-input-block">
                <select name="sign_id" lay-filter="aihao">
                    <option value=" ">请选择</option>
                    <option value="1">中心办公室</option>
                    <option value="2">地质环境所</option>
                    <option value="3">地质遥感所</option>
                    <option value="4">水文地质所</option>
                    <option value="5">胶东事业部</option>
                </select>
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md3">
            <label class="layui-form-label">签订人：</label>
            <div class="layui-input-block">
                <input type="text" name="sign_agent" lay-verify="title" autocomplete="off" placeholder="请输入签订人" class="layui-input">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">合同额：</label>
            <div class="layui-input-block">
                <input type="text" name="contract_amount" lay-verify="title" autocomplete="off" placeholder="请输入合同额" class="layui-input">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">决算时间：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" id="test1" name="final_time" placeholder="yyyy-MM-dd">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item layui-col-md6">
            <label class="layui-form-label">决算额：</label>
            <div class="layui-input-block">
                <input type="text" name="final_amount" lay-verify="title" autocomplete="off" placeholder="请输入决算额" class="layui-input">
            </div>
        </div>
        <!--  -->
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
    <script src="/num06/public/layui/layui.js"></script>
    <script>
    layui.config({
        base: '/num06/public/layui/src/' //静态资源所在路径
    }).extend({
        index: 'index' //主入口模块
    }).use(['index', 'form', 'element', 'laydate'], function() {
        var form = layui.form;
        var element = layui.element;
        var laydate = layui.laydate;
        var $ = layui.jquery;
        laydate.render({
            elem: '#test1'
        });
        laydate.render({
            elem: "#construction_period",
            range: "/",
            done: function(value) {
                var time_array = value.split('/');
                // console.log(time_array);
                // console.log(value);
                // console.log(new Date(time_array[0]));

                var start_time = new Date(time_array[0]).getTime() / 1000;
                var end_time = new Date(time_array[1]).getTime() / 1000;
                $("input[name=start_time]").val(start_time);
                $("input[name=end_time ]").val(end_time);
            },
        });
    });
    </script>
</body>

</html>