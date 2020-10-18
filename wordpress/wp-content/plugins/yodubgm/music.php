<?php

add_action('wp_enqueue_scripts', 'YOB_scripts');
function YOB_scripts() {
    wp_enqueue_style('yodu-bgm', YOB_URL . '/css/player.css', array(), YOB_VERSION, 'all');
    wp_enqueue_script('yodu-player', YOB_URL . '/js/player.js',  array('jquery') , YOB_VERSION ,true);
    wp_enqueue_script('yodu-prbug', YOB_URL . '/js/prbug.js', array('jquery') , YOB_VERSION ,true);
}

add_action('wp_footer', 'yob_bar');
function yob_bar(){ 
$yob = get_option('yob_options');
$autoplay = $yob['autoplay'];
  if($autoplay==1){
$autoplay='yaudio.play();';  
  }

  ?>
<bgm>			
<a class="ymusic" onclick="playbtu();" target="_blank"><i id="ydmc"></i></a><a class="ymusic" onclick="next();" id="ydnext" target="_blank"><i class="icon-you"></i></a>
</bgm>
<script data-no-instant>
var yaudio = new Audio();
yaudio.controls = true;
var musicArr=[
<?php
	      $json = empty($_POST['getjson_to']) ? $yob['yobmusic'] : get_jsons($input,$type);
	      echo $json;
	      ?>
              ];
/*首次随机播放*/
var a=parseInt(Math.random()*musicArr.length);
var sj=musicArr[a];
yaudio.src=sj.mp3;
yaudio.ti=sj.title;
yaudio.art=sj.artist;
<?php echo $autoplay; ?>
</script>
<?php 

}

