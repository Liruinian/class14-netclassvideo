<?php
if (is_file(__DIR__ . './autoload.php')) {
    require_once __DIR__ . './autoload.php';
}
if (is_file(__DIR__ . './vendor/autoload.php')) {
    require_once __DIR__ . './vendor/autoload.php';
}

use OSS\OssClient;
use OSS\Core\OssException;
function readOSS($url,$bucket){
	
// 阿里云主账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM账号进行API访问或日常运维，请登录 https://ram.console.aliyun.com 创建RAM账号。
$accessKeyId = "$accessKeyId";
$accessKeySecret = "$accessKeyId";
// Endpoint以杭州为例，其它Region请按实际情况填写。
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
    $nextMarker = $listObjectInfo->getNextMarker();
    $listObject = $listObjectInfo->getObjectList();
    $listPrefix = $listObjectInfo->getPrefixList();
	
    if (!empty($listObject)) {
        foreach ($listObject as $objectInfo) {
			$name = $objectInfo->getKey();
            $text = $text ."<li><a href=\"video.php?url=$url$name\" target=\"_blank\" >". $objectInfo->getKey() . "</li>";
			$txt = $txt ."./video.php?url=".$url. $objectInfo->getKey() . "\r\n";
        }
    }

    if ($listObjectInfo->getIsTruncated() !== "true") {
		$myfile = fopen("$bucket.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $txt);
		fclose($myfile);
		return $text;
        break;
    }
}
}
