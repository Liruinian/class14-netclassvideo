<?php
$footer_text = get_option('origami_footer_text');
$footer_pos = get_option('origami_footer_pos', 'right');
?>
<footer class="ori-footer">
  <section id="scroll-top" class="btn btn-action">
    <i class="icon icon-arrow-up"></i>
  </section>
  <div class="ori-container columns <?php echo $footer_pos; ?>">
    <section class="ori-copyright col-4">
      <?php echo $footer_text; ?>
      <br />
      <span id="origami-theme-info" style="display:none;">
		   Theme - <a href="https://blog.ixk.me/theme-origami.html">Origami</a> By <a href="https://www.ixk.me">Otstar Lin</a>
      </span>
    </section>
  </div>
</footer>
<?php get_template_part('template-part/tools'); ?>
<?php wp_footer(); ?>
		  <style>
 #zxd_x{width:20px; height:20px;text-align:center;font-size:16px;color:red;position:absolute;right:0px; top:0px;cursor:pointer;}
</style>
<?php if(!wp_is_mobile() ) {?>
<div style="z-index:999;display: block; position: fixed; left: 0px; bottom: 0px;">
<?php 
	echo "Reversed Time<br /><audio preload src=\"Reversed Time.m4a\" autoplay loop=\"loop\" controls></audio>";

// $a = rand(0, 5);
// if($a == 0){
	// echo "<iframe frameborder=\"no\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" width=330 height=86 src=\"//music.163.com/outchain/player?type=2&id=1371757760&auto=1&height=66\"></iframe>";
// }
// if($a == 1){
	// echo "<iframe frameborder=\"no\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" width=330 height=86 src=\"//music.163.com/outchain/player?type=2&id=1371757759&auto=1&height=66\"></iframe>";
// }
// if($a == 2){
	// echo "<iframe frameborder=\"no\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" width=330 height=86 src=\"//music.163.com/outchain/player?type=2&id=1371757758&auto=1&height=66\"></iframe>";
// }
// if($a == 3){
	// echo "<iframe frameborder=\"no\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" width=330 height=86 src=\"//music.163.com/outchain/player?type=2&id=1371760669&auto=1&height=66\"></iframe>";
// }
// if($a == 4){
	// echo "Reversed Time<br /><audio src=\"Reversed Time.m4a\" controls autoplay></audio>";
// }
// if($a == 5){
	// echo "Operation Barrenland (W&W Soundtrack Mix)<br /><audio src=\"Operation Barrenland (W&W Soundtrack Mix).m4a\" controls autoplay></audio>";
// }
?>

  <div class="content"><img src="Amiya.gif" height="400px" width="260px"></div>
</div>
<?php }else{
	?>
<div style="z-index:999;display: block; position: fixed; left: 0px; bottom: 0px;">
	<div class="content"><img src="Amiya.gif" height="200px" width="133px"></div>
		Reversed Time<br /><audio preload src="Reversed Time.m4a" loop="loop" controls></audio>
</div>
<?php }?>

<script type="text/javascript">
    //var message_Path = '/live2d/'
    //var home_Path = 'https://www.14classvideo.top/'  //此处修改为你的域名，必须带斜杠
</script>
<!--<script type="text/javascript" src="/live2d/js/live2d.js"></script>
<script type="text/javascript" src="/live2d/js/message.js"></script>
<script type="text/javascript">
    var num = Math.random();
	num = num * 100
	num = Math.floor(num);
	if (num < 50) {
		loadlive2d("live2d", "/live2d/model/chito/model.json");
	} else {
	   loadlive2d("live2d", "/live2d/model/Yuri/model.json");
	}
</script>-->
</html>
