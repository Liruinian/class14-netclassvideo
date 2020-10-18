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
  color: #000;
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
  width: 15%;
  display: inline-block;
  text-align: left;
  vertical-align: top;
  background: rgba(0,0,0, 0.35);
  color: rgba(255, 255, 255, 0.5);
  border-radius: 3px;
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

background: url("/bg.jpg") no-repeat;

height:100%;

width:100%;

//overflow: hidden;

background-size:cover;
//background-size:100%;
background-attachment: fixed
}

p {
	color:white;
}
</style>
<link href="css/style.css" rel="stylesheet" />
		<style>
			.alert {
				width: 30%;
				text-align: center;
				color: #fff;
				margin: 10px auto;
				border-radius: 5px;
				line-height: 30px;
				cursor: pointer;
				background: #4ab819;
			}
			
			.confirm {
				background: #196fb8;
			}
			
			.open {
				background: #f88408;
			}
			
			.toast {
				background: #f80851;
			}
			
			.later {
				background: #a9a9a9;
			}
		</style>
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/ui.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<H2>OSS 文件分布式存储技术运用-高速高可靠性网课视频点播云平台(基于AliyunOSS):</H2>
<ul class="live" style="width: 90%;text-align: center;">
<li style="font-size:30px">请    选    择    您    的    英    雄    ：<br /></li>
<a href="./search.php?str=数学">
<button><img src="/ossjpg/sx.jpg" height=180 width=100><h1>数学</h1></button>
</a>
<a href="./search.php?str=语文">
<button><img src="/ossjpg/yw.jpg" height=180 width=100><h1>语文</h1></button>
</a>
<a href="./search.php?str=英语">
<button><img src="/ossjpg/yy.jpg" height=180 width=100><h1>英语</h1></button>
</a>
<a href="#all">
<button onclick=fn()><img src="/ossjpg/all.jpg" height=180 width=100><h1>我全都要</h1></button>
</a>
<a href="./search.php?str=物理">
<button><img src="/ossjpg/wl.jpg" height=180 width=100><h1>物理</h1></button>
</a>
<a href="./search.php?str=化学">
<button><img src="/ossjpg/hx.jpg" height=180 width=100><h1>化学</h1></button>
</a>
<a href="./search.php?str=生物">
<button><img src="/ossjpg/sw.jpg" height=180 width=100><h1>生物</h1></button>
</a>
</p>
<li style="font-size:15px">推荐配乐：</li>
<audio controls>
<source src="/Operation Barrenland (W&W Soundtrack Mix).m4a" autoplay>
</audio><br />
<form action="search.php">
	输入要检索的内容 ：<input type="text" name="str" />
	<select name="select">
  <option value ="4月录屏">4月录屏</option>
  <option value="5月录屏">5月录屏</option>
  <option value ="6月录屏">6月录屏</option>
  <option value="其他录屏">其他录屏</option>
  <option value="">全盘搜索</option>
</select>
	<input type="submit" value="检索" />
</form>
</ul>
<div id="all" style="display: none;">
<script type="text/javascript">
function fn(){
	document.getElementById("all").style.display="";
}
</script>
<?php 
function wp_is_mobile() {
    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
            $is_mobile = true;
    } else {
        $is_mobile = false;
    }
 
    /**
     * Filters whether the request should be treated as coming from a mobile device or not.
     *
     * @since 4.9.0
     *
     * @param bool $is_mobile Whether the request is from a mobile device or not.
     */
    return $is_mobile;
}
    require_once __DIR__ . '/ossreadfix.php';
	
if(wp_is_mobile()){
		print("<ol class=\"live\" style=\"width: 90%;\">");
		print("<li>三月份录屏</li>");
		echo "三月份录屏转移到百度云 oss停止服务 \n <a href=\"https://pan.baidu.com/s/1012CfPUAAdA4zj7XcGW1TQ\">https://pan.baidu.com/s/1012CfPUAAdA4zj7XcGW1TQ</a> \n 提取码:jsed";
		print("</ol>");
		print("<ol class=\"live\" style=\"width: 90%;\">");
		print("<li>四月份录屏</li>");
		echo readOSS("https://14classvideo04.oss-cn-beijing.aliyuncs.com/","14classvideo04");
		print("</ol>");
		print("<ol class=\"live\" style=\"width: 90%;\">");
		print("<li>五月份录屏</li>");
		echo readOSS("https://14classvideo05.oss-cn-beijing.aliyuncs.com/","14classvideo05");
		print("</ol>");
		print("<ol class=\"live\" style=\"width: 90%;\">");
		print("<li>六月份录屏</li>");
		echo readOSS("https://14classvideo06.oss-cn-beijing.aliyuncs.com/","14classvideo06");
		print("</ol></div>");
		print("<ol class=\"live\" style=\"width: 90%;\">");
		print("<li>其他录屏</li>");
		echo readOSS("https://14classothervideo.oss-cn-beijing.aliyuncs.com/","14classothervideo");
		print("</ol>");
	} else {
		
	print("<ol class=\"live\" style=\"font-size:15px\">");
	print("<li>三月份录屏</li>");
		echo "三月份录屏转移到百度云 oss停止服务 \n <a href=\"https://pan.baidu.com/s/1012CfPUAAdA4zj7XcGW1TQ\">https://pan.baidu.com/s/1012CfPUAAdA4zj7XcGW1TQ</a> \n 提取码:jsed";
	print("</a></ol>");
	print("<ol class=\"live\" style=\"font-size:15px\">");
	print("<li>四月份录屏</li>");
	echo readOSS("https://14classvideo04.oss-cn-beijing.aliyuncs.com/","14classvideo04");
	print("</a></ol>");
	print("<ol class=\"live\" style=\"font-size:15px\">");
	print("<li>五月份录屏</li>");
	echo readOSS("https://14classvideo05.oss-cn-beijing.aliyuncs.com/","14classvideo05");
	print("</a></ol>");
	print("<ol class=\"live\" style=\"font-size:15px\">");
	print("<li>六月份录屏</li>");
	echo readOSS("https://14classvideo06.oss-cn-beijing.aliyuncs.com/","14classvideo06");
	print("</a></ol></div>");
	print("<ol class=\"live\" style=\"width: 90%;\">");
	print("<li>其他录屏</li>");
	echo readOSS("https://14classothervideo.oss-cn-beijing.aliyuncs.com/","14classothervideo");
	print("</a></ol>");
	}
?>
<script type="text/javascript">
//mizhu.alert('网站需要你的赞助！', '<img src="/ossjpg/Wechat.jpg" height=295 width=200></img> <br />捐款请不要超过10块钱 不接受大于10元的捐款<br />技术所限 没法记录弹出次数emmmm');
</script>
<p style="font-size:20px">
<br />此网站运行代码由本人编写 共耗时6h 挂载阿里oss系统 海量、安全、低成本、高可靠的云存储服务，
<br />提供99.9999999999%的数据可靠性。使用RESTful API 可以在互联网任何位置存储和访问，
</p>
<p style="font-size:15px">
<br />此网站录屏除特殊说明外 禁止外传 仅限14班同学使用
<br />版权所有：哈尔滨市第三中学校 高二十四班 李睿年
<br />Copyright © 2020 Tim_LRN2016 all right reserved
</p>