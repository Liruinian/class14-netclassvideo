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
  width: 680;
  display: inline-block;
  text-align: left;
  vertical-align: top;
  background: rgba(0,0,0, 0.05);
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
body{

background: #FF70A1;
			  background: -webkit-linear-gradient(-135deg, #FF4081, #FFE4E1);
			  background: -o-linear-gradient(-135deg, #FF4081, #FFE4E1);
			  background: -moz-linear-gradient(-135deg, #FF4081, #FFE4E1);
			  background: linear-gradient(-135deg, #FF4081, #FFE4E1);

height:97%;

width:97%;

//overflow: hidden;

background-size:cover;
//background-size:100%;
background-attachment: fixed
}
</style>
<head>
<script type="text/javascript" src="./js/cyberplayer.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<H1>基于HLS的网络直播系统-14班网课直播云</H1>
<ol class="live type2">
<div id="playercontainer"></div>
<li><p style="font-size:10px;color:red">直播会延时0.5-2分钟！请注意时间<br />
HLS协议的延迟比较大，在需要进行连麦互动的场景下，不应该使用HLS协议。<br />
而超低延迟（500ms以内）的直播技术都是大公司闭源（人家核心技术..）<br />
技术实现十分困难（WebRTC看不懂啊啊啊</p></li>
<li><a href="/nginxrtmp/rec/hls/">历史直播回看-直播视频云回看系统</a></li>
<li>播放器技术支持：百度云BDC_Cyberplayer</li>
<li>直播系统技术支持：HLS_Service Apple的动态码率自适应技术。</li>
</ol>
<p>Copyright 2020 Tim_LRN2016</p>
<script type="text/javascript">
    var player = cyberplayer("playercontainer").setup({
	        <!-- controlbar: { -->
            <!-- barLogo: true, // 进度条上的logo显示与否,默认true -->
            <!-- barLogoUrl: "https://www.baidu.com/", // 进度条上的logo的跳转地址可配置 -->
        <!-- }, -->
        width: 680,
        height: 448,
        title: "flv点播",
        file: "/nginxrtmp/temp/hls/<?php print($_GET['room'] ); ?>.m3u8", // hls播放地址（×一定要支持跨域访问，否则要设置primary参数）
        image: "./nolive.png", // 视频截图
        autostart: true,
        stretching: "uniform",
        repeat: true,
        volume: 100,
        controls: true,
        starttime: 0, 
        ak: "xxxxxxxxxxxxxxxx"
    });
	
</script>