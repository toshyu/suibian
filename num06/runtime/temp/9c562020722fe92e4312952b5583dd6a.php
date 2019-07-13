<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"E:\LL\wamp\www\num06/application/index\view\index\index.html";i:1561195180;s:62:"E:\LL\wamp\www\num06\application\index\view\public\header.html";i:1552645767;s:60:"E:\LL\wamp\www\num06\application\index\view\public\left.html";i:1561195187;s:62:"E:\LL\wamp\www\num06\application\index\view\public\footer.html";i:1552616313;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>服务平台</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/public/layui/css/layui.css" media="all">
	<link rel="stylesheet" href="/public/layui/src/style/admin.css" media="all">
	<link rel="stylesheet" href="/public/layui/src/style/template.css" media="all">
</head>

<body class="layui-layout-body">
	<div id="LAY_app">
		<div class="layui-layout layui-layout-admin">
			<div class="layui-header">
				<!-- 头部区域 -->
				<ul class="layui-nav layui-layout-left">
					<li class="layui-nav-item layadmin-flexible" lay-unselect="">
						<a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
							<i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
						</a>
					</li>
					<li class="layui-nav-item" lay-unselect="">
						<a href="javascript:;" layadmin-event="refresh" title="刷新">
							<i class="layui-icon layui-icon-refresh-3"></i>
						</a>
					</li>
				</ul>

				<ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">
					<!-- <li class="layui-nav-item" lay-unselect="">
						<a lay-href="javascript:;" layadmin-event="message" lay-text="消息中心">
							<i class="layui-icon layui-icon-notice"></i> -->
							<!-- 如果有新消息，则显示小圆点 -->
							<!-- <span class="layui-badge-dot"></span>
						</a>
					</li> -->
					<li class="layui-nav-item layui-hide-xs" lay-unselect="">
						<a href="javascript:;" layadmin-event="theme">
							<i class="layui-icon layui-icon-theme"></i>
						</a>
					</li>
					<li class="layui-nav-item layui-hide-xs" lay-unselect="">
						<a href="javascript:;" layadmin-event="fullscreen">
							<i class="layui-icon layui-icon-screen-full"></i>
						</a>
					</li>
					<li class="layui-nav-item" lay-unselect="">
						<a href="javascript:;">
							<cite><?php echo $_SESSION['admin']['username']; ?></cite>
							<span class="layui-nav-more"></span>
						</a>
						<dl class="layui-nav-child">
							<!-- <dd>
								<a lay-href="javascript:;">消息中心</a>
							</dd>
							<dd>
								<a lay-href="javascript:;">修改密码</a>
							</dd>
							<hr> -->
							<dd style="text-align: center;">
								<a href="javascript:logout()">退出</a>
								<script src="/public/static/js/jquery.min.js"></script>
								<script>
									// 退出登录
									function logout() {
										$.ajax({
											type: 'post',
											url: '<?php echo url("login/logout"); ?>',
											beforeSend: function () {
												index1 = layer.load(1, {
													shade: [0.1, 'DimGray'] //0.1透明度的白色背景
												});
											},
											error: function () {
												layer.close(index1);
											},
											complete: function () {
												layer.close(index1);
											},
											success: function () {
												layer.msg('已退出');
												setTimeout(function () {
													window.location.href = '/index/login/';
												}, 1000);
											}
										})
									}
								</script>
							</dd>
						</dl>
					</li>

					<li class="layui-nav-item layui-hide-xs" lay-unselect="">
						<i class="layui-icon layui-icon-more-vertical"></i>
					</li>
					<!-- <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-unselect="">
							<a href="javascript:;" layadmin-event="more"><i class="layui-icon layui-icon-more-vertical"></i></a>
						</li> -->
				</ul>
			</div>

			<!--侧边菜单-->
<div class="layui-side layui-side-menu">
    <div class="layui-side-scroll">
        <div class="layui-logo">
            <span>畅想谷</span>
        </div>
        <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu"
            lay-filter="layadmin-system-side-menu">

            <li class="layui-nav-item">
                <a href="javascript:;" lay-href="home" lay-tips="主页" lay-direction="2" class="layui-this">
                    <i class="layui-icon layui-icon-auz"></i>
                    <cite>主页</cite>
                </a>
            </li>

            <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="layui-nav-item">
                <a href="javascript:;" lay-tips="title" lay-direction="2">
                    <i class="layui-icon layui-icon-component"></i>
                    <cite><?php echo $vo['title']; ?></cite>
                    <span class="layui-nav-more"></span>
                </a>
                <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>
                <dl class="layui-nav-child">
                    <dd>
                        <a lay-href="/index/<?php echo $vi['name']; ?>"><?php echo $vi['title']; ?></a>
                    </dd>
                </dl>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

			<!-- 页面标签 -->
			<div class="layadmin-pagetabs" id="LAY_app_tabs">
				<div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
				<div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
				<div class="layui-icon layadmin-tabs-control layui-icon-down">
					<ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
						<li class="layui-nav-item" lay-unselect="">
							<a href="javascript:;"><span class="layui-nav-more"></span></a>
							<dl class="layui-nav-child layui-anim-fadein">
								<dd layadmin-event="closeThisTabs">
									<a href="javascript:;">关闭当前标签页</a>
								</dd>
								<dd layadmin-event="closeOtherTabs">
									<a href="javascript:;">关闭其它标签页</a>
								</dd>
								<dd layadmin-event="closeAllTabs">
									<a href="javascript:;">关闭全部标签页</a>
								</dd>
							</dl>
						</li>
					</ul>
				</div>
				<div class="layui-tab" lay-unauto="" lay-allowclose="true" lay-filter="layadmin-layout-tabs">
					<ul class="layui-tab-title" id="LAY_app_tabsheader">
						<li lay-id="home" lay-attr="home" class="layui-this"><i class="layui-icon layui-icon-home"></i><i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
						</li>
					</ul>
				</div>
			</div>

			<!-- 主体内容 -->
			<div class="layui-body" id="LAY_app_body">
				<div class="layadmin-tabsbody-item layui-show">
    <iframe src="<?php echo url('index/home'); ?>" frameborder="0" class="layadmin-iframe"></iframe>
</div>
</div>
<!-- 辅助元素，一般用于移动设备下遮罩 -->
<div class="layadmin-body-shade" layadmin-event="shade"></div>
</div>
</div>
<script src="/public/layui/layui.js"></script>
<script>
    layui.config({
        base: '/public/layui/src/' //静态资源所在路径
    }).extend({
        index: 'index' //主入口模块
    }).use('index');
</script>
</body>

</html>