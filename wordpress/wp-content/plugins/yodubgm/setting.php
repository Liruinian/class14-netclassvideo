<?php

//添加设置页面
add_action('admin_menu', 'yodu_bgm_options');
function yodu_bgm_options() {
    add_menu_page('yodubgm', 'yodubgm', 'manage_options', __FILE__, 'yodu_bgm_options_code');
}
//注册设置
add_action('admin_init','yob_setting');
function yob_setting(){
  register_setting('yob_setting_group','yob_options');
}

function yodu_bgm_options_code(){ ?>
<div style="
    margin: 20px 10px 5px 0;
">
         <form method="post" action="options.php">
      	<?php 
        settings_fields('yob_setting_group');
        $yob = get_option('yob_options');
        $input = isset($_POST['mid'])?$_POST['mid']:''; 
        $type = isset($_POST['select'])?$_POST['select']:''; 
      	?>
	   	  <textarea class="music-json" rows="8" cols="100" name="yob_options[yobmusic]"><?php
	      $json = empty($_POST['getjson_to']) ? $yob['yobmusic'] : get_jsons($input,$type);
	      echo $json;
	      ?></textarea>  <div class="yob-other">
	        <input type="checkbox" name="yob_options[autoplay]" class="autoplay" value="1" <?php checked('1',$yob['autoplay']); ?> /><span>自动播放</span><?php echo $yob['autoplay']; ?>
          </div>  <div class="yob-tip">
           格式: {title:"xxx", artist:"xxx", mp3:"http:xxxx"} ，每个歌曲之间用英文,隔开。请保证歌曲列表里至少有一首歌！<br><br><div style="background-color:#56A5CE;padding:5px 8px;max-width:250px;border-radius: 2px;"><a href="<?php echo YOB_URL; ?>/IDExplain.php" target="_blank" style="font-size:14px;color:#fff;outline:none;text-decoration:none;">网易云音乐id解析(主机需支持curl扩展)</a>
        	</div>请自行去网易云音乐网页版获取音乐id(具体在每个音乐项目的网址最后会有个id)。<b>将解析出的音乐链接复制到上面歌曲列表里(注意检查与现有歌曲是否用英文,隔开)</b>
	    
          </div>
        <input type="submit" name="save" class="button" value="保存设置" />
      </form>
</div>
      <?php if ( isset($_REQUEST['settings-updated']) ){
        echo '<div id="message" class="updated"><p>保存成功了Poi~</p></div>';
      }?>
     
<?php
}