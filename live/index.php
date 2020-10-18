<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>网课直播系统多房间号分流界面</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<div class="dowebok">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="login100-form validate-form" action="live.php">
				<span class="login100-form-title">
					请输入房间密钥
				</span>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="room" placeholder="请输入正确的直播密钥">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-key" aria-hidden="true"></i>
					</span>
				</div>
				<?php 
listdir("C:/inetpub/wwwroot/nginxrtmp/temp/hls");
function getSubDirs($dir) 
{
	$subdirs = array();
	if(!$dh = opendir($dir)) 
		return $subdirs;
	$i = 0;
	while ($f = readdir($dh)) 
	{
     	if($f =='.' || $f =='..') 
			continue;
		//如果只要子目录名, path = $f;
 		//$path = $dir.'/'.$f;  
		$path = $f;
		$subdirs[$i] = $path;
		$i++;
	}
	return $subdirs;
}

function listdir($dirn){
$arr = getSubDirs($dirn);
$num = count($arr);
for($i=0;$i<$num;$i++){
	   $exped=explode(".",$arr[$i]);
	   if($exped[1] == "m3u8"){
		  $numm3u8++;	
	   }
 }
echo "检测到".$numm3u8."个直播流<br />";
   for($i=0;$i<$num;$i++){
	   $exped=explode(".",$arr[$i]);
	   if($exped[1] == "m3u8"){
		   	echo "<a href=\"live.php?room=" . $exped[0] . "\">". $exped[0] ."</a></br />";
	   }
 }
 echo "输入以上直播流房间密钥进入直播间哦~</ul><br />";
}?>
				<!-- <div class="wrap-input100 validate-input"> -->
					<!-- <input class="input100" type="password" name="pass" placeholder="密码"> -->
					<!-- <span class="focus-input100"></span> -->
					<!-- <span class="symbol-input100"> -->
						<!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
					<!-- </span> -->
				<!-- </div> -->
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						登录
					</button>
				</div>

				<div class="text-center p-t-12">
					<a class="txt2" href="javascript:">
						<!-- 忘记密码？ -->
					</a>
				</div>
				<div class="text-center p-t-136">
					<a class="txt2" href="/nginxrtmp/rec/hls/" target="_blank">
							 基于HLS的网络直播系统-14班网课直播系统-视频云回看
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>