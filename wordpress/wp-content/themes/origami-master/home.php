<?php
$link_to = [[4, 2], [1, 3], [2, 4], [3, 1]];
$carousels = [];
$layout = get_option('origami_layout_style', 'layout1');
if ($layout == 'layout1' || $layout == 'layout3') {
  for ($i = 1; $i < 5; $i++) {
    $url = get_option("origami_carousel_" . $i, "");
    if ($url != "") {
      $carousels[] = $url;
    }
  }
}
$len = count($carousels);
$GLOBALS['not_carousel'] = $layout != "layout1";
$GLOBALS['layout'] = $layout;

$title = get_option("origami_carousel_title", "Origami");
$subtitle = get_option("origami_carousel_subtitle", "by Otstar Lin");
$btn_content = get_option("origami_carousel_btn_content", "Author");
$btn_url = get_option("origami_carousel_btn_url", "https://ixk.me");
?>
<style>
video  {
right:0; bottom:0;
min-width:100%; min-height:100%; width: auto;height:
auto;z-index:-100; background-size: cover;
}
</style>
<?php get_header(); ?>
<div id="main-content">
  <?php if ($len > 0) : ?>
    <?php if ($layout == "layout1") : ?>
      <!-- Layout1 -->
      <section class="carousel layout1-container">
        <?php for ($i = 1; $i <= $len; $i++) : ?>
          <input class="carousel-locator" id="slide-<?php echo $i; ?>" type="radio" name="carousel-radio" hidden="" <?php echo $i == 1 ? 'checked' : ''; ?>>
        <?php endfor; ?>
        <div class="carousel-container">
            <figure class="carousel-item">
			  <div class="img-responsive rounded" style="">
			  <?php if(!wp_is_mobile() ) {?>
			  <video preload id="bgvideo" src="bg.mp4" muted autoplay>您的浏览器不支持 video 标签。</video>
			  <?php }else{?>
              <div class="img-responsive rounded" style="background-image:url(bg.png)"></div>
			  <?php }?>
			  <div class="carousel-mask"></div>
			  </div>
            </figure>
        </div>
		
        
		<?php if(!wp_is_mobile() ) {?>
		
        <div id="img" class="carousel-content">
		<?php }else{?>
		<div>
		<div class="carousel-content">
		<?php }?>
          <h1><?php echo $title; ?></h1>
          <h2><?php echo $subtitle; ?></h2>
		  <?php
		  $res = file_get_contents("./ossname.txt");
		  ?>
          <a href="<?php echo $res;?>"  target="_blank"><?php echo $btn_content; ?></a>
		  <a href="/live" target="_blank">网课直播系统入口</a>
        </div>
		</div>
      </section>
    <?php else : ?>
      <!-- Layout3 -->
      <section class="layout3-container ori-container">
        <div class="layout3-images">
          <?php for ($i = 1; $i <= $len; $i++) : ?>
            <div data-index="<?php echo $i; ?>" style="background-image:url(<?php echo $carousels[$i - 1]; ?>)"></div>
          <?php endfor; ?>
        </div>
        <div class="layout3-title">
          <h1><?php echo $title; ?></h1>
          <h2><?php echo $subtitle; ?></h2>
          <a href="<?php echo $btn_url; ?>">
            <?php echo $btn_content; ?>
          </a>
			<a href="/live">网课直播系统入口</a>
        </div>
      </section>
    <?php endif; ?>
  <?php else : ?>
    <!-- Layout2 -->
    <section class="layout2-container">
      <h1><?php echo $title; ?></h1>
      <h2><?php echo $subtitle; ?></h2>
      <a href="<?php echo $btn_url; ?>">
        <?php echo $btn_content; ?>
      </a>
    </section>
  <?php endif; ?>
  <?php get_template_part('template-part/post-list'); ?>
</div>
<?php get_footer(); ?>
<script>
bgvideo.onended = function(){
this.src= "bgconstant.mp4";
this.loop="loop";
}
</script>