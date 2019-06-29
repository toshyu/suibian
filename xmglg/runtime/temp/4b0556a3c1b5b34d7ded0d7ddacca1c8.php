<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\beij\index3.html";i:1462621272;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>7款HTML5 Canvas全屏背景动画特效03</title>
<style>
body {
	background: #000;
	overflow: hidden;
}

canvas {
	display: block;
}

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
	<a href="index.html">Demo 1</a>
	<a href="index2.html">Demo 2</a>
	<a class="current-demo" href="index3.html">Demo 3</a>
	<a href="index4.html">Demo 4</a>
	<a href="index5.html">Demo 5</a>
	<a href="index6.html">Demo 6</a>
	<a href="index7.html">Demo 7</a>
</nav>

<canvas id="canvas"></canvas>
<script>
var canvas,
	ctx,
	width,
	height,
	size,
	lines,
	tick;

function line() {
	this.path = [];
	this.speed = rand(10, 20);
	this.count = randInt(10, 30);
	this.x = width / 2, +1;
	this.y = height / 2 + 1;
	this.target = {
		x: width / 2,
		y: height / 2
	};
	this.dist = 0;
	this.angle = 0;
	this.hue = tick / 5;
	this.life = 1;
	this.updateAngle();
	this.updateDist();
}

line.prototype.step = function(i) {
	this.x += Math.cos(this.angle) * this.speed;
	this.y += Math.sin(this.angle) * this.speed;

	this.updateDist();

	if (this.dist < this.speed) {
		this.x = this.target.x;
		this.y = this.target.y;
		this.changeTarget();
	}

	this.path.push({
		x: this.x,
		y: this.y
	});
	if (this.path.length > this.count) {
		this.path.shift();
	}

	this.life -= 0.001;

	if (this.life <= 0) {
		this.path = null;
		lines.splice(i, 1);
	}
};

line.prototype.updateDist = function() {
	var dx = this.target.x - this.x,
		dy = this.target.y - this.y;
	this.dist = Math.sqrt(dx * dx + dy * dy);
}

line.prototype.updateAngle = function() {
	var dx = this.target.x - this.x,
		dy = this.target.y - this.y;
	this.angle = Math.atan2(dy, dx);
}

line.prototype.changeTarget = function() {
	var randStart = randInt(0, 3);
	switch (randStart) {
		case 0: // up
			this.target.y = this.y - size;
			break;
		case 1: // right
			this.target.x = this.x + size;
			break;
		case 2: // down
			this.target.y = this.y + size;
			break;
		case 3: // left
			this.target.x = this.x - size;
	}
	this.updateAngle();
};

line.prototype.draw = function(i) {
	ctx.beginPath();
	var rando = rand(0, 10);
	for (var j = 0, length = this.path.length; j < length; j++) {
		ctx[(j === 0) ? 'moveTo' : 'lineTo'](this.path[j].x + rand(-rando, rando), this.path[j].y + rand(-rando, rando));
	}
	ctx.strokeStyle = 'hsla(' + rand(this.hue, this.hue + 30) + ', 80%, 55%, ' + (this.life / 3) + ')';
	ctx.lineWidth = rand(0.1, 2);
	ctx.stroke();
};

function rand(min, max) {
	return Math.random() * (max - min) + min;
}

function randInt(min, max) {
	return Math.floor(min + Math.random() * (max - min + 1));
};

function init() {
	canvas = document.getElementById('canvas');
	ctx = canvas.getContext('2d');
	size = 30;
	lines = [];
	reset();
	loop();
}

function reset() {
	width = Math.ceil(window.innerWidth / 2) * 2;
	height = Math.ceil(window.innerHeight / 2) * 2;
	tick = 0;

	lines.length = 0;
	canvas.width = width;
	canvas.height = height;
}

function create() {
	if (tick % 10 === 0) {
		lines.push(new line());
	}
}

function step() {
	var i = lines.length;
	while (i--) {
		lines[i].step(i);
	}
}

function clear() {
	ctx.globalCompositeOperation = 'destination-out';
	ctx.fillStyle = 'hsla(0, 0%, 0%, 0.1';
	ctx.fillRect(0, 0, width, height);
	ctx.globalCompositeOperation = 'lighter';
}

function draw() {
	ctx.save();
	ctx.translate(width / 2, height / 2);
	ctx.rotate(tick * 0.001);
	var scale = 0.8 + Math.cos(tick * 0.02) * 0.2;
	ctx.scale(scale, scale);
	ctx.translate(-width / 2, -height / 2);
	var i = lines.length;
	while (i--) {
		lines[i].draw(i);
	}
	ctx.restore();
}

function loop() {
	requestAnimationFrame(loop);
	create();
	step();
	clear();
	draw();
	tick++;
}

function onresize() {
	reset();
}

window.addEventListener('resize', onresize);

init();
</script>
</body>
</html>
