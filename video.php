<!DOCTYPE html>
<style>
	.live {
  overflow: hidden;
}
.live > li {
  list-style: none;
  position: relative;
  padding: 0 0 0 1em;
  margin: 0 0 .25em 5px;
  -webkit-transition: .12s;
          transition: .12s;
}
.live > li::before {
  position: absolute;
  content: '\2022';
  font-family: Arial;
  color: #FFF;
  top: 0;
  left: 0;
  text-align: center;
  font-size: 0.5em;
  opacity: .5;
  line-height: .75;
  -webkit-transition: .5s;
          transition: .5s;
}
.live > li:hover {
  color: #FFF;
}
.live > li:hover::before {
  -webkit-transform: scale(2);
      -ms-transform: scale(2);
          transform: scale(2);
  opacity: 1;
  text-shadow: 0 0 4px;
  -webkit-transition: .1s;
          transition: .1s;
}
.live.type2 > li::before {
  content: '';
  width: 10px;
  height: 10px;
  background: #FFF;
  border-radius: 1px;
  line-height: 0;
  top: .27em;
  left: 5px;
}
.live.type2 > li:hover::before {
  -webkit-transform: none;
      -ms-transform: none;
          transform: none;
  border-radius: 5px;
  width: 25px;
  left: -10px;
  background: #ff4081;
}

.live.numbers {
  counter-reset: xxx 0;
}
.live.numbers > li::before {
  content: counter(xxx,decimal) ".";
  counter-increment: xxx 1;
  font-family: 'Roboto Condensed';
  font-size: 0.5em;
  opacity: .5;
  line-height: 1.4;
  -webkit-transition: .5s;
          transition: .5s;
}
.live.numbers > li:hover:before {
  opacity: 1;
  left: -10px;
  -webkit-transform: none;
      -ms-transform: none;
          transform: none;
  text-shadow: none;
  -webkit-transition: .12s;
          transition: .12s;
}

@font-face {
  //font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 400;
  src: url(./fonts/fontawesome-webfont.woff) format("woff");
}
html {
  height: 100%;
}

body {
  height: 100%;
  font: 1.33em 'Roboto Condensed', arial;
  color: #FFF;
  text-align: center;
  background-image: -webkit-radial-gradient(circle, #ff70a1 0%, #ff70a1 80%);
  background-image: radial-gradient(circle, #ff70a1 0%, #ff70a1 80%);
}

h1 {
  margin: .5em 0 0;
  padding: 0;
  text-shadow: 0 4px rgba(255,255,255, 0.05)
}

* {
  -moz-box-sizing: padding-box;
       box-sizing: padding-box;
}

ol, ul {
  display: inline-block;
  text-align: left;
  vertical-align: top;
  background: rgba(255,255,255, 0.05);
  color: rgba(255, 255, 255, 0.5);
  border-radius: 5px;
  padding: 1.5em;
  margin: 2%;
  box-shadow: 0 0 8px rgba(0,0,0, 0.3)

}
a {
	TEXT-DECORATION:none;
	color:white;
}

a::before {
	TEXT-DECORATION:underline
}

.button {
	background: rgb(247,249,250);
	background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	/* filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 ); */
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	-o-border-radius: 0 0 5px 5px;
	-ms-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;
	border-top: 1px solid #CFD5D9;
	padding: 15px 0;
}

body{

background: url("/bg.jpg") no-repeat;

height:100%;

width:100%;

//overflow: hidden;

background-size:cover;
//background-size:100%;
background-attachment: fixed
}
</style>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
<title>OSS 文件分布式存储技术运用-高速高可靠性网课视频点播系统(基于AliyunOSS):</title>
<script type="text/javascript" src="./cyberplayer/cyberplayer.js"></script>
</head>
<h2>OSS 文件分布式存储技术运用-高速高可靠性网课视频点播系统(基于AliyunOSS):</h2>
<body>
<ul id="container">
<div id="playercontainer"></div>
<p><a href="<?php print( $_GET['url'] ); ?>">下载此视频(如果点击后是在线播放可以试下右键另存为)</a></p>
</ul>
<script type="text/javascript">
    var player = cyberplayer("playercontainer").setup({
        width: 960,
        height: 540,
        title: <?php print("\"" . $_GET['url'] . "\""); ?>,
        file:  <?php print("\"" . $_GET['url'] . "\""); ?>,
        autostart: true,
        stretching: "uniform",
        repeat: false,
        volume: 100,
        controls: true,
        starttime: 0, 
		// imageAdvs : {
    // pause : {
        // image : "./ad1.png",
        // url : "https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&ch=&tn=baidu&bar=&wd=%E7%A7%83%E5%A4%B4%E6%80%8E%E4%B9%88%E6%B2%BB",
    // }
// },
        ak: "xxxxxxxxxxxxxxxx"
    });
	
	player.resize(document.body.clientWidth*0.6, document.body.clientHeigh*0.6);
	document.getElementById("container").style.width=document.body.clientWidth*0.6 ;
</script>
</script>
<p style="font-size:15px">
<br />此网站录屏除特殊说明外 禁止外传 仅限14班同学使用
<br />版权所有：哈尔滨市第三中学校 高一十四班 李睿年
<br />Copyright © 2020 Tim_LRN2016 all right reserved
</p>
</body>
