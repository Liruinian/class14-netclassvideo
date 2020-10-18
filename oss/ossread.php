<?php
    require_once __DIR__ . '/autoload.php';
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

use OSS\OssClient;
use OSS\Core\OssException;
    function readOSS($url,$bucket)
    {
// 阿里云主账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM账号进行API访问或日常运维，请登录 https://ram.console.aliyun.com 创建RAM账号。
$accessKeyId = "LTAI4FiPTWLJEGBF17YrdaAu";
$accessKeySecret = "gYFIeOXW0tV1JIWTH8gIu78BWBbHG0";
$endpoint = "http://oss-cn-beijing.aliyuncs.com";


$ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);

$nextMarker = '';

while (true) {
    try {
        $options = array(
            'delimiter' => '',
            'marker' => $nextMarker,
        );
		$listObjectInfo = $ossClient->listObjects($bucket, $options);
    } catch (OssException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    // 得到nextMarker，从上一次listObjects读到的最后一个文件的下一个文件开始继续获取文件列表。
    // $nextMarker = $listObjectInfo->getNextMarker();
    $listObject = $listObjectInfo->getObjectList();
	$myfile = fopen("$bucket.txt", "w") or die("Unable to open file!");
	    if (!empty($listObject)) {
			foreach ($listObject as $objectInfo) {
				$filename = $objectInfo->getKey() . "";
				print("<li><a href=\"$url$filename\">");
				echo $filename;
				$txt = $txt . " \r\n" . $url . $objectInfo->getKey();
				print("</a> </li>");
        }
    }
	break;
	// if ($listObjectInfo->getIsTruncated() !== "true") {
       // break;
    // }
	fwrite($myfile, $txt);
	fclose($myfile);
    }
	
	

}?>