<?php
/*
Plugin Name: yodubgm
Plugin URI: http://qqdie.com
Description: 一款简洁BGM播放器,需要您的主题支持pjax或者instantclick才能保证页面切换依旧播放
Author: jrotty
Version: 1.1
Author URI: https://qqdie.com
*/

define('YOB_VERSION', '1.1');
define('YOB_URL', plugins_url('', __FILE__));
define('YOB_PATH', dirname(__FILE__));

require YOB_PATH . '/music.php';
require YOB_PATH . '/setting.php';

?>