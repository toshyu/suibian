<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpstudy\PHPTutorial\WWW\num06/application/index\view\project_cut\projectadd.html";i:1563673364;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>项目切块</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/num06/public/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/admin.css" media="all">
    <link rel="stylesheet" href="/num06/public/layui/css/template.css" media="all">
</head>

<body>
    <div class="layui-fluid">
        <div class="layui-card">
            <div class="layui-card-header">切块添加</div>
            <div class="layui-card-body">
                <div class="layui-form" lay-filter="project_form">
                    <div class="layui-form-item">
                        <div class="layui-form-label">请选择项目</div>
                        <div class="layui-input-inline">
                            <select name="project" lay-filter="project" lay-search>
                                <option value="">请选择</option>
                                <?php if(is_array($project_list) || $project_list instanceof \think\Collection || $project_list instanceof \think\Paginator): $i = 0; $__LIST__ = $project_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>" <?php if($cut_info['project_id'] == $vo['id']): ?> selected <?php endif; ?>><?php echo $vo['project_name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <input type="hidden" name="project_id" value="<?php echo !empty($cut_info['project_id'])?$cut_info['project_id'] : ''; ?>">
                        <div class="layui-inline">
                            <div class="layui-form-label">合同金额</div>
                            <div class="layui-input-inline">
                                <input type="text" class="layui-input" name="contract_amount" placeholder="合同金额" disabled value="<?php echo !empty($cut_info)?$cut_info['contract_amount'] : ''; ?>">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <div class="layui-form-label">决算额</div>
                            <div class="layui-input-inline">
                                <input type="text" class="layui-input" name="final_amount" placeholder="决算额" disabled value="<?php echo !empty($cut_info)?$cut_info['final_amount'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="production" id="production_cost">
                        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                            <legend>生产费用</legend>
                        </fieldset>
                        <a href="javascript:;" class="layui-btn layui-btn-xs" lay-submit lay-filter="add_department">添加部门</a>
                        <?php if($cut_info): if(is_array($cut_info['production_str']) || $cut_info['production_str'] instanceof \think\Collection || $cut_info['production_str'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cut_info['production_str'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vx): $mod = ($i % 2 );++$i;?>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <div class="layui-form-label">部门</div>
                                    <div class="layui-input-inline">
                                        <select name="department" id="">
                                            <option value="">请选择</option>
                                            <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>" <?php if($vx['department'] == $vo['id']): ?> selected <?php endif; ?>><?php echo $vo['title']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-label">金额</div>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input amount" name="amount" placeholder="金额" value="<?php echo !empty($vx['amount'])?$vx['amount']:''; ?>">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-label">占比</div>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input proportion" name="proportion" placeholder="占比" value="<?php echo !empty($vx['proportion'])?$vx['proportion']:''; ?>">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger" lay-submit lay-filter="del_department">删除</a>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-label">部门</div>
                                <div class="layui-input-inline">
                                    <select name="department" id="">
                                        <option value="">请选择</option>
                                        <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"}><?php echo $vo['title']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-label">金额</div>
                                <div class="layui-input-inline">
                                    <input type="text" class="layui-input amount" name="amount" placeholder="金额" value="">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-label">占比</div>
                                <div class="layui-input-inline">
                                    <input type="text" class="layui-input proportion" name="proportion" placeholder="占比" value="">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger" lay-submit lay-filter="del_department">删除</a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="production" id="management_cost">
                        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                            <legend>经营费用</legend>
                        </fieldset>
                        <a href="javascript:;" class="layui-btn layui-btn-xs" lay-submit lay-filter="add_department">添加部门</a>
                        <?php if($cut_info): if(is_array($cut_info['management_str']) || $cut_info['management_str'] instanceof \think\Collection || $cut_info['management_str'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cut_info['management_str'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vx): $mod = ($i % 2 );++$i;?>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <div class="layui-form-label">部门</div>
                                    <div class="layui-input-inline">
                                        <select name="department" id="">
                                            <option value="">请选择</option>
                                            <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"<?php if($vx['department'] == $vo['id']): ?> selected <?php endif; ?>><?php echo $vo['title']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-label">金额</div>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input amount" name="amount" placeholder="金额" value="<?php echo !empty($vx['amount'])?$vx['amount']:''; ?>">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-label">占比</div>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input proportion" name="proportion" placeholder="占比" value="<?php echo !empty($vx['proportion'])?$vx['proportion']:''; ?>">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger" lay-submit lay-filter="del_department">删除</a>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-label">部门</div>
                                <div class="layui-input-inline">
                                    <select name="department" id="">
                                        <option value="">请选择</option>
                                        <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-label">金额</div>
                                <div class="layui-input-inline">
                                    <input type="text" class="layui-input amount" name="amount" placeholder="金额" value="">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-label">占比</div>
                                <div class="layui-input-inline">
                                    <input type="text" class="layui-input proportion" name="proportion" placeholder="占比" value="">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger" lay-submit lay-filter="del_department">删除</a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="production" id="administration_cost">
                        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                            <legend>管理费用</legend>
                        </fieldset>
                        <?php if($cut_info): if(is_array($cut_info['administration_str']) || $cut_info['administration_str'] instanceof \think\Collection || $cut_info['administration_str'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cut_info['administration_str'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vx): $mod = ($i % 2 );++$i;?>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <div class="layui-form-label">部门</div>
                                    <div class="layui-input-inline">
                                        <select name="department" id="">
                                            <option value="">请选择</option>
                                            <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>" <?php if($vx['department'] == $vo['id']): ?> selected <?php endif; ?>><?php echo $vo['title']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-label">金额</div>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input amount" name="amount" placeholder="金额" value="<?php echo !empty($vx['amount'])?$vx['amount']:''; ?>">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-label">占比</div>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input proportion" name="proportion" placeholder="占比" value="<?php echo !empty($vx['proportion'])?$vx['proportion']:''; ?>">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-label">部门</div>
                                <div class="layui-input-inline">
                                    <select name="department" id="">
                                        <option value="">请选择</option>
                                        <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-label">金额</div>
                                <div class="layui-input-inline">
                                    <input type="text" class="layui-input amount" name="amount" placeholder="金额" value="">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-form-label">占比</div>
                                <div class="layui-input-inline">
                                    <input type="text" class="layui-input proportion" name="proportion" placeholder="占比" value="">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <a href="javascript:;" class="layui-btn" lay-submit lay-filter="submit">提交</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="productionTpl" class="layui-hide">
        <div class="layui-form-item">
            <div class="layui-inline">
                <div class="layui-form-label">部门</div>
                <div class="layui-input-inline">
                    <select name="department" id="">
                        <option value="">请选择</option>
                        <?php if(is_array($sign_list) || $sign_list instanceof \think\Collection || $sign_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sign_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-inline">
                <div class="layui-form-label">金额</div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input amount" name="amount" placeholder="金额">
                </div>
            </div>
            <div class="layui-inline">
                <div class="layui-form-label">占比</div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input proportion" name="proportion" placeholder="占比">
                </div>
            </div>
            <div class="layui-inline">
                <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger" lay-submit lay-filter="del_department">删除</a>
            </div>
        </div>
    </div>
    <script src="/num06/public/layui/layui.js"></script>
    <script>
    layui.config({
        base: '/num06/public/layui/src/' //静态资源所在路径
    }).extend({
        index: 'index' //主入口模块
    }).use(['index', 'element', 'table', 'form', 'util', 'laydate'], function() {
        var $ = layui.$,
            table = layui.table,
            element = layui.element,
            form = layui.form;


        form.on("submit(add_department)", function(obj) {
            var html = $("#productionTpl").html();
            $(this).parents(".production").append(html);
            form.render();
        });

        form.on("submit(del_department)", function(obj) {
            var num = $(this).parents(".production").find(".layui-form-item").length;
            if(num >= 1){
                layer.msg("部门最少保留一项");
                return false;
            }
            $(this).parents(".layui-form-item").remove();
        });


        form.on("select(project)", function(obj) {
            var load = layer.load(1, { shade: [0.1, "#fff"] });
            $.get("<?php echo url('getProjectdetail'); ?>", { project_id: obj.value }, function(res) {
                layer.close(load);
                form.val("project_form", {
                    final_amount: res.final_amount,
                    contract_amount: res.contract_amount,
                    project_id: res.id
                })
            })
        })

        $("body").on("keyup", ".amount", function() {
            var contract_amount = $("input[name=contract_amount]").val();
            if (!contract_amount) {
                layer.msg("请先选择项目");
                $(this).val("")
                return false;
            }
            var amount = $(this).val();
            var proportion = (amount / contract_amount * 100).toFixed(2);
            $(this).parents(".layui-form-item").find(".proportion").val(proportion + '%');
        })


        form.on("submit(submit)", function(obj) {
            // 生产费用
            var production_arr = [];
            $("#production_cost").find(".layui-form-item").each(function(val, item) {
                production_arr.push({
                    department: $(item).find("select").val(),
                    amount: $(item).find("input[name='amount']").val(),
                    proportion: $(item).find("input[name='proportion']").val()
                })
            })
            // 经营费用
            var management_arr = []
            $("#management_cost").find(".layui-form-item").each(function(val, item) {
                management_arr.push({
                    department: $(item).find("select").val(),
                    amount: $(item).find("input[name='amount']").val(),
                    proportion: $(item).find("input[name='proportion']").val()
                })
            })
            // 管理费用
            var administration_arr = [];
            $("#administration_cost").find(".layui-form-item").each(function(val, item) {
                administration_arr.push({
                    department: $(item).find("select").val(),
                    amount: $(item).find("input[name='amount']").val(),
                    proportion: $(item).find("input[name='proportion']").val()
                })
            })
            production_str = JSON.stringify(production_arr);
            management_str = JSON.stringify(management_arr);
            administration_str = JSON.stringify(administration_arr);
            var project_id = $("input[name=project_id]").val();

            var data = {
                production_str: production_str,
                management_str: management_str,
                administration_str: administration_str,
                project_id: project_id
            }
            var load = layer.load(1, { shade: [0.1, "#fff"] });

            $.post("<?php echo url('edit'); ?>", data, function(res) {
                layer.close(load);
                console.log(res);
                layer.msg(res.msg);

            })

        })

    });
    </script>
</body>

</html>