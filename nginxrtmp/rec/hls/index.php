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
  background: #FF70A1;
			  background: -webkit-linear-gradient(-135deg, #FF4081, #FFE4E1);
			  background: -o-linear-gradient(-135deg, #FF4081, #FFE4E1);
			  background: -moz-linear-gradient(-135deg, #FF4081, #FFE4E1);
			  background: linear-gradient(-135deg, #FF4081, #FFE4E1);
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
  width: 50%;
  display: inline-block;
  text-align: left;
  vertical-align: top;
  background: rgba(0,0,0, 0.35);
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

button {
    background-color: #FF4081;
	color: white;
}
button:hover {
    background-color: #FFBAC1;
}
body{


height:100%;

width:100%;

//overflow: hidden;

background-size:cover;
//background-size:100%;
background-attachment: fixed
}
</style>
<title>基于HLS的网络直播系统-14班网课直播系统-视频云回看</title>
<H1>基于HLS的网络直播系统-14班网课直播系统-视频云回看</H1>
<?php
require_once __DIR__ . '/ossreadfix.php';
print("<ol class=\"live\">");
$files = glob('*.mp4'); // 其他文来件做类似修改，比如源 *.png, *.txt等。。有百目录请添加绝对目度录。比如：知c:/album/*.jpg
echo 'Class 14 Live Stream Playback System have ' , count($files) , ' mp4(s).'; // $files是一个文道件数组。
for($i=0;$i<count($files);$i++){
	echo '<li><a href=video.php?url=';
	echo $files[$i] . '>'.$files[$i].'</a></li>';
}
print("</ol>");
print("<ol class=\"live\">");
$files = glob('*.flv'); // 其他文来件做类似修改，比如源 *.png, *.txt等。。有百目录请添加绝对目度录。比如：知c:/album/*.jpg
echo 'Class 14 Live Stream Playback System have ' , count($files) , ' flv(s).'; // $files是一个文道件数组。
for($i=0;$i<count($files);$i++){
	echo '<li><a href=video.php?url=';
	echo $files[$i] . '>'.$files[$i].'</a></li>';
}
print("</ol>");
print("<ol class=\"live\">");
print("<li>oss直播录屏存储系统</li>");
		echo readOSS("https://14livevideo.oss-cn-beijing.aliyuncs.com/","14livevideo");
		print("</ol>");
?>