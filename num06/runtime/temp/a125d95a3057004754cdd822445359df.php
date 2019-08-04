<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project\sel.html";i:1564882151;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>项目情况一览</title>
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
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvo): $mod = ($i % 2 );++$i;?>
    <!--startprint1-->
    <div class="layui-form">
        <div class="layui-row layui-form-item">
            <div class="  layui-col-md6">
                <label class="layui-form-label">合同编号：</label>
                <div class="layui-form-mid layui-word-aux"><?php echo $vvo['order']; ?></div>
            </div>
            <div class=" layui-col-md6">
                <label class="layui-form-label">项目名称：</label>
                <div class="layui-form-mid layui-word-aux"><?php echo $vvo['project_name']; ?></div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md6">
                <label class="layui-form-label">来源：</label>
                <div class="layui-form-mid layui-word-aux">
                    <?php if($vvo['source'] == 1): ?>合同
                    <?php elseif($vvo['source'] == 2): ?>备案
                    <?php elseif($vvo['source'] == 3): ?>上级下达
                    <?php else: ?>其他<?php endif; ?>
                </div>
            </div>
            <div class=" layui-col-md6">
                <label class="layui-form-label">性质：</label>
                <div class="layui-form-mid layui-word-aux"><?php if($vvo['nature'] == 1): ?>市场招标
                    <?php elseif($vvo['nature'] == 2): ?>财政招标
                    <?php elseif($vvo['nature'] == 3): ?>合作挂靠
                    <?php else: ?>其他<?php endif; ?></div>
            </div>
        </div>
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md6">
                <label class="layui-form-label">类型：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['type_title']; ?></div>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md6">
                <label class="layui-form-label">委托单位：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['unit_name']; ?></div>
                </div>
            </div>
        </div>
        <div class="layui-row layui-form-item">
            <label class="layui-form-label">委托单位行业：</label>
            <div class="layui-input-block">
                <div class="layui-form-mid layui-word-aux"><?php echo $vvo['unit_title']; ?></div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md6">
                <label class="layui-form-label">工期：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['construction_period']; ?></div>
                </div>
            </div>
            <div class="  layui-col-md6">
                <label class="layui-form-label">签订时间：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo date('Y-m-d',$vvo['sign_time']); ?></div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md6">
                <label class="layui-form-label">签订部门：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['sign_title']; ?></div>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md6">
                <label class="layui-form-label">签订人：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['sign_agent']; ?></div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="layui-row layui-form-item ">
            <div class=" layui-col-md6">
                <label class="layui-form-label">合同额：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['contract_amount']; ?></div>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md6">
                <label class="layui-form-label">决算时间：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo date('Y-m-d',$vvo['final_time']); ?></div>
                </div>
            </div>
            <!--  -->
            <div class=" layui-col-md6">
                <label class="layui-form-label">决算额：</label>
                <div class="layui-input-block">
                    <div class="layui-form-mid layui-word-aux"><?php echo $vvo['final_amount']; ?></div>
                </div>
            </div>
        </div>
        <!--  -->
        <input type="hidden" name="id" value="<?php echo $vvo['id']; ?>">
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--endprint1-->
        <div class="layui-form-item">
            <div class="layui-input-block">
                <a type="reset" href="javascript:history.go(-1);" class="layui-btn layui-btn-danger">返回</a>
                <input type=button class="btn btn-info" name='button_export' title='打印' onclick=preview(1) value=打印>
            </div>
        </div>
    </div>
</body>
<script src="/num06/public/layui/layui.js"></script>
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


    // lay('#final_time').each(function() {
    //     laydate.render({
    //         elem: this,
    //         format: 'yyyy-MM-dd',
    //         type: 'date',
    //         trigger: 'click'
    //     });
    // });

    laydate.render({
        elem: '#sign_time',
        done: function(value) {
            var newtime1 = new Date(value).getTime() / 1000;
            $('input[ name=sign_time ]').val(newtime1);
        }
    })
    laydate.render({
        elem: '#final_time',
        done: function(value) {
            var newtime2 = new Date(value).getTime() / 1000;
            $('input[name="final_time"]').val(newtime2);
        }
    })
    laydate.render({
        elem: "#construction_period",
        range: "/",
        done: function(value) {
            var time_arr = value.split("/");

            var start_time = new Date(time_arr[0]).getTime() / 1000;
            var end_time = new Date(time_arr[1]).getTime() / 1000;
            $("input[name=start_time]").val(start_time);
            $("input[name=end_time]").val(end_time);
            console.log(start_time);
        }
    })


});
</script>

</html>