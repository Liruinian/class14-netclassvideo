<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<html lang='zh-CN' xml:lang='zh-CN' xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="zh-CN"/>
	<title>内容检索</title>
	<style type="text/css">
    body,table,input,textarea,select {font-family:微软雅黑,Verdana,sans-serif,宋体;}  
  </style>
</head>
<body>
<h2>OSS 文件分布式存储技术运用-高速高可靠性网课视频点播系统(基于AliyunOSS):</h2>

<form method="post" action="">
	输入要检索的内容 ：<input type="text" name="str" />
	<select name="select">
  <option value ="4月录屏">4月录屏</option>
  <option value="5月录屏">5月录屏</option>
  <option value="6月录屏">6月录屏</option>
  <option value="其他录屏">其他录屏</option>
  <option value="">全盘搜索</option>
</select>
	<input type="submit" value="检索" />
</form>
<?php

	IF(@$_GET['str']){
		$str = $_GET['str'];
	}
	IF(@$_GET['select']){
		$select = $_GET['select'];
	}
	IF(@$_POST['str']){
		$str = $_POST['str'];
	}
	IF(@$_POST['select']){
		$select = $_POST['select'];
	}
	
	// echo $select;
	if ($select == "4月录屏"){
		Search("14classvideo04.txt","4月录屏");
	}
	if($select ==  "5月录屏"){
		Search("14classvideo05.txt","5月录屏");
	}
	if ($select == "其他录屏"){
		Search("14classothervideo.txt","其他录屏");
	}
	if ($select == "6月录屏"){
		Search("14classvideo06.txt","6月录屏");
	}
	if ($select == ""){
		Search("14classvideo06.txt","6月录屏");
		
		Search("14classvideo05.txt","5月录屏");
		
		Search("14classvideo04.txt","4月录屏");
		
		Search("14classothervideo.txt","其他录屏");
		
	}
		function clearBlank($arr)   
	{   
		return (array_filter($arr, "odd"));   
	} 
	
	function odd($var)   
		{   
		   return($var<>'');//return true or false   
		}   
		
	function Search($file,$sel){
	IF(@$_GET['str']){
		$str = $_GET['str'];
	}
	IF(@$_POST['str']){
		$str = $_POST['str'];
	}
	$content = file_get_contents($file);  
	//echo $content;
	echo '<br />' . $sel . '中共检索到 <b>'.substr_count($content, $str).' </b>处"' . $str . "\"<br />";
	$arr = clearBlank(explode("\r\n",$content));
	$result = array();
	foreach($arr as $row){
		if(strstr($row,$str)){
			$result[] = $row;
		}
	}
	$all = count($result);
	echo '<ul class="live type2">';
	for($i=0;$i<$all;$i++){
		$exped=explode("/",$result[$i]);
		
		echo '<li><a href=';
		
		echo $result[$i] . '>'.str_replace($str, '<b style="color:red;">'.$str.'</b>',$exped[count($exped)-1]).'</a></li>';
	}
	echo '</ul>';
	}
?>
</body>
<p style="font-size:15px">
<br />此网站录屏除特殊说明外 禁止外传 仅限14班同学使用
<br />版权所有：哈尔滨市第三中学校 高一十四班 李睿年
<br />Copyright © 2020 Tim_LRN2016 all right reserved
</p>
</html>