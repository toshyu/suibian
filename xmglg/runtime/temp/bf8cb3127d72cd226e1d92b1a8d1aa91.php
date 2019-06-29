<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin\view\beij\index2.html";i:1462621268;}*/ ?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="google" value="notranslate">
<title>7款HTML5 Canvas全屏背景动画特效02</title>
<style>
HTML, BODY { height: 100%; overflow: hidden; }
BODY { background: #0a0a0a; background-image: -webkit-linear-gradient(#0f0f0f 1px, transparent 1px), -webkit-linear-gradient(left, #0f0f0f 1px, transparent 1px); background-image: linear-gradient(#0f0f0f 1px, transparent 1px), linear-gradient(to right, #0f0f0f 1px, transparent 1px); background-size: 3.33333vmin 3.33333vmin; }
.range { /* display: none; */
position: absolute; zind: 2px; }
.wrapper { position: absolute; top: 0; right: 0; bottom: 0; left: 0; margin: auto; width: 10vmin; height: 10vmin; font-size: 10vmin; -webkit-transform: rotateX(-45deg); transform: rotateX(-45deg); -webkit-transform-style: preserve-3d; transform-style: preserve-3d; }
.flower { width: 10vmin; height: 10vmin; -webkit-animation: rotate-flower 10s linear infinite; animation: rotate-flower 10s linear infinite; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; }
.flower:before { content: ''; display: block; position: absolute; width: 95%; height: 95%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; background: #226600; border-radius: 50%; -webkit-transform: rotateX(90deg); transform: rotateX(90deg); -webkit-animation: rotate-hue 5s infinite; animation: rotate-hue 5s infinite; }
.petal { position: absolute; z-index: 20; bottom: 80%; left: -10vmin; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-transform-origin: bottom; transform-origin: bottom; }
.box { width: 30vmin; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-transform-origin: bottom; transform-origin: bottom; -webkit-animation: rotate-box 12s infinite; animation: rotate-box 12s infinite; }
.shape { width: 0.5em; height: 0.5em; margin: auto; background: currentColor; box-shadow: 0.5em 0 0 0, 1em 0 0 0, -1em 0 0 0, -0.5em 0 0 0; border-radius: 50%; -webkit-animation: rotate-hue 5s infinite; animation: rotate-hue 5s infinite; }
 @-webkit-keyframes rotate-box {
 0% {
 -webkit-transform: rotateX(3.5deg);
 transform: rotateX(3.5deg);
}
 15% {
 -webkit-transform: rotateX(3.5deg);
 transform: rotateX(3.5deg);
}
 50% {
 -webkit-transform: rotateX(-7deg);
 transform: rotateX(-7deg);
}
 80% {
 -webkit-transform: rotateX(-7deg);
 transform: rotateX(-7deg);
}
 100% {
 -webkit-transform: rotateX(3.5deg);
 transform: rotateX(3.5deg);
}
}
 @keyframes rotate-box {
 0% {
 -webkit-transform: rotateX(3.5deg);
 transform: rotateX(3.5deg);
}
 15% {
 -webkit-transform: rotateX(3.5deg);
 transform: rotateX(3.5deg);
}
 50% {
 -webkit-transform: rotateX(-7deg);
 transform: rotateX(-7deg);
}
 80% {
 -webkit-transform: rotateX(-7deg);
 transform: rotateX(-7deg);
}
 100% {
 -webkit-transform: rotateX(3.5deg);
 transform: rotateX(3.5deg);
}
}
@-webkit-keyframes rotate-flower {
 100% {
 -webkit-transform: rotateY(360deg);
 transform: rotateY(360deg);
}
}
@keyframes rotate-flower {
 100% {
 -webkit-transform: rotateY(360deg);
 transform: rotateY(360deg);
}
}
@-webkit-keyframes rotate-hue {
 100% {
 -webkit-filter: hue-rotate(360deg);
 filter: hue-rotate(360deg);
}
}
@keyframes rotate-hue {
 100% {
 -webkit-filter: hue-rotate(360deg);
 filter: hue-rotate(360deg);
}
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
	<a class="current-demo" href="index2.html">Demo 2</a>
	<a href="index3.html">Demo 3</a>
	<a href="index4.html">Demo 4</a>
	<a href="index5.html">Demo 5</a>
	<a href="index6.html">Demo 6</a>
	<a href="index7.html">Demo 7</a>
</nav>

<div class="wrapper">
  <div class="flower"></div>
</div>
<script>
 console.clear();

var doc = document;
var flower = doc.querySelector('.flower');
var range = doc.querySelector('.range');

var petalPartMarkup = '<div class="box"> \
                    <div class="shape"></div> \
                </div>';

var maxParts = 20;
var maxPetalsDef = 6;
var maxPetals = maxPetalsDef;

var partsFontStepDef = 25 / maxParts;
var partsFontStep = partsFontStepDef;
var huetStep = 150 / maxParts;

createFlower();

function createFlower() {

	var angle = 360 / maxPetals;

	for (var i = 0; i < maxPetals; i++) {
		var petal = createPetal();
		var currAngle = angle * i + 'deg';
		var transform = 'transform: rotateY(' + currAngle + ') rotateX(-30deg) translateZ(9vmin)';

		petal.setAttribute('style', transform);

		flower.appendChild(petal);
	}
}

function createPetal() {

	var box = createBox(null, 0);

	var petal = doc.createElement('div');
	petal.classList.add('petal');

	for (var i = 1; i <= maxParts; i++) {
		newBox = createBox(box, i);
		box = newBox;
	}

	petal.appendChild(box);

	return petal;
}

function createBox(box, pos) {

	var fontSize = partsFontStep * (maxParts - pos) + 'vmin';
	var half = maxParts / 2;

	var bright = '50';

	if (pos < half + 1) {
		fontSize = partsFontStep * pos + 'vmin';
	} else {
		bright = 10 + 40 / half * (maxParts - pos);
	}

	var color = 'hsl(' + huetStep * pos + ', 100%, ' + bright + '%)';

	// 1. Add shape
	var newShape = doc.createElement('div');
	newShape.classList.add('shape');

	// 2. Create wrapper .box
	var newBox = doc.createElement('div');
	newBox.classList.add('box');

	var boxStyle = ['color: ' + color, 'font-size: ' + fontSize].join(';');
	newBox.setAttribute('style', boxStyle);

	// 3. Add old box to new box
	if (box) {
		newBox.appendChild(box);
	}

	// 4. Add shape to new box
	newBox.appendChild(newShape);

	return newBox;
}

function out(content) {
	console.log(content);
}
</script>
</body>
</html>
