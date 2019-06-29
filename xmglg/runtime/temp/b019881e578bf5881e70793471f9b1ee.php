<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\beij\index.html";i:1561619538;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="google" value="notranslate">
    <meta name="robots" content="noindex">
    <title>7款HTML5 Canvas全屏背景动画特效01</title>
    <style>
        canvas { position: absolute; top: 0; left: 0; }

/* Demo Buttons Style */
.codrops-demos {
	font-size: 0.8em;
	text-align:center;
	position:absolute;
	z-index:99;
	width:96%;
}

.codrops-demos a {
	display: inline-block;
	margin: 0.35em 0.1em;
	padding: 0.5em 1.2em;
	outline: none;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 700;
	border-radius: 2px;
	font-size: 110%;
	border: 2px solid transparent;
	color:#fff;
}

.codrops-demos a:hover,
.codrops-demos a.current-demo {
	border-color: #383a3c;
}
</style>
</head>

<body>
    <nav class="codrops-demos">
        <a class="current-demo" href="index.html">Demo 1</a>
        <a href="<?php echo url('index2'); ?>">Demo 2</a>
        <a href="<?php echo url('index3'); ?>">Demo 3</a>
        <a href="<?php echo url('index4'); ?>">Demo 4</a>
        <a href="<?php echo url('index5'); ?>">Demo 5</a>
        <a href="<?php echo url('index6'); ?>">Demo 6</a>
        <a href="<?php echo url('index7'); ?>">Demo 7</a>
    </nav>
    <canvas id="c"></canvas>
    <script type="text/javascript">
    var w = c.width = window.innerWidth,
        h = c.height = window.innerHeight,
        ctx = c.getContext('2d'),
        opts = {
            len: 20,
            count: 50,
            baseTime: 10,
            addedTime: 10,
            dieChance: .05,
            spawnChance: 1,
            sparkChance: .1,
            sparkDist: 10,
            sparkSize: 2,
            color: 'hsl(hue,100%,light%)',
            baseLight: 50,
            addedLight: 10,
            shadowToTimePropMult: 6,
            baseLightInputMultiplier: .01,
            addedLightInputMultiplier: .02,
            cx: w / 2,
            cy: h / 2,
            repaintAlpha: .04,
            hueChange: .1
        },
        tick = 0,
        lines = [],
        dieX = w / 2 / opts.len,
        dieY = h / 2 / opts.len,
        baseRad = Math.PI * 2 / 6;
    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, w, h);

    function loop() {
        window.requestAnimationFrame(loop);
        ++tick;
        ctx.globalCompositeOperation = 'source-over';
        ctx.shadowBlur = 0;
        ctx.fillStyle = 'rgba(0,0,0,alp)'.replace('alp', opts.repaintAlpha);
        ctx.fillRect(0, 0, w, h);
        ctx.globalCompositeOperation = 'lighter';
        if (lines.length < opts.count && Math.random() < opts.spawnChance) lines.push(new Line);
        lines.map(function(line) {
            line.step()
        })
    }

    function Line() {
        this.reset()
    }
    Line.prototype.reset = function() {
        this.x = 0;
        this.y = 0;
        this.addedX = 0;
        this.addedY = 0;
        this.rad = 0;
        this.lightInputMultiplier = opts.baseLightInputMultiplier + opts.addedLightInputMultiplier * Math.random();
        this.color = opts.color.replace('hue', tick * opts.hueChange);
        this.cumulativeTime = 0;
        this.beginPhase()
    }
    Line.prototype.beginPhase = function() {
        this.x += this.addedX;
        this.y += this.addedY;
        this.time = 0;
        this.targetTime = (opts.baseTime + opts.addedTime * Math.random()) | 0;
        this.rad += baseRad * (Math.random() < .5 ? 1 : -1);
        this.addedX = Math.cos(this.rad);
        this.addedY = Math.sin(this.rad);
        if (Math.random() < opts.dieChance || this.x > dieX || this.x < -dieX || this.y > dieY || this.y < -dieY) this.reset()
    }
    Line.prototype.step = function() {
        ++this.time;
        ++this.cumulativeTime;
        if (this.time >= this.targetTime) this.beginPhase();
        var prop = this.time / this.targetTime,
            wave = Math.sin(prop * Math.PI / 2),
            x = this.addedX * wave,
            y = this.addedY * wave;
        ctx.shadowBlur = prop * opts.shadowToTimePropMult;
        ctx.fillStyle = ctx.shadowColor = this.color.replace('light', opts.baseLight + opts.addedLight * Math.sin(this.cumulativeTime * this.lightInputMultiplier));
        ctx.fillRect(opts.cx + (this.x + x) * opts.len, opts.cy + (this.y + y) * opts.len, 2, 2);
        if (Math.random() < opts.sparkChance) ctx.fillRect(opts.cx + (this.x + x) * opts.len + Math.random() * opts.sparkDist * (Math.random() < .5 ? 1 : -1) - opts.sparkSize / 2, opts.cy + (this.y + y) * opts.len + Math.random() * opts.sparkDist * (Math.random() < .5 ? 1 : -1) - opts.sparkSize / 2, opts.sparkSize, opts.sparkSize)
    }
    loop();
    window.addEventListener('resize',
        function() {
            w = c.width = window.innerWidth;
            h = c.height = window.innerHeight;
            ctx.fillStyle = 'black';
            ctx.fillRect(0, 0, w, h);
            opts.cx = w / 2;
            opts.cy = h / 2;
            dieX = w / 2 / opts.len;
            dieY = h / 2 / opts.len
        });
    </script>
    <style type="text/css">
    .footContent {
        line-height: 20px;
        font-size: 12px;
    }

    .footContent,
    .copyright {
        width: 100%
    }

    .footContent p,
    .copyright p {
        margin: 5px auto;
        text-align: center
    }

    .footContent a {
        text-decoration: none;
        color: #444333;
    }
    </style>
    <div style="text-align:center;clear:both;margin-top:20px;font-size: 14px;font-family: 微软雅黑;">
        <p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. </p>
    </div>
    <div class="footContent">
        <p><a rel="nofollow" href="http://www.sucaijiayuan.com/aboutus/about.html?down_demo" target="_blank">关于素材家园</a> - <a rel="nofollow" href="http://www.sucaijiayuan.com/aboutus/contact.html?down_demo" target="_blank">联系我们</a> - <a rel="nofollow" href="http://www.sucaijiayuan.com/aboutus/copyright.html?down_demo" target="_blank">版权声明</a> - <a rel="nofollow" href="http://www.sucaijiayuan.com/aboutus/help.html?down_demo" target="_blank">帮助说明</a> - <a rel="nofollow" href="http://www.sucaijiayuan.com/aboutus/tougao.html?down_demo" target="_blank">在线投稿</a> - <a href="http://wpa.qq.com/msgrd?v=3&uin=97576600&site=qq&menu=yes">意见反馈</a></p>
        <p>声明：本站所有素材/文章除标明原创外，均来自网络转载，版权归原作者所有，如果有侵犯到您的权益，请联系本站删除，谢谢合作！</p>
        <div class="copyright">
            <p>Copyright © 2016 Www.SuCaiJiaYuan.Com 鄂ICP备13014750号 <a href="http://www.sucaijiayuan.com/?down_demo">素材家园</a> 版权所有</p>
        </div>
    </div>
    <div style="display:none">
        <script src="http://s4.cnzz.com/stat.php?id=1259350246&web_id=1259350246" language="JavaScript"></script>
    </div>
    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?cc58f09bfb6ccacac51c4e5d7787d7d0";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>

</html>