
<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>

<?php 
$main_title = get_field('title');
if(empty($main_title)) $main_title =  get_the_title();   ?>



<div id="content" class="wrap-content gallery-page">
  <article class="intro-home">
  <div class="wow fadeInUp intro-title" data-wow-delay="0.6s">
    <h1><?= $main_title ?></h1>
    <h2 class="title-sub"><?= $title['subtitle'] ?></h2>
    <div class="title"></div>
      <?= the_content();?>
  </div>
  </article>

  <div class="wrap gallery" id="grid">
	  <?php $args = array('post_type' => 'gallery_sub', 'post_status' => 'publish', 'posts_per_page' => -1,'orderby' => 'menu_order','order' => 'DESC' );
		$myposts = get_posts( $args ); ?>
		<?php
		//echo '<!--' . print_r($myposts) . '-->';
		?>
	  <?php foreach ( $myposts as $post ) : setup_postdata( $post );
	  $image_gallery = get_field('image_gallery', $post->ID); ?>
	  <div class="wrap">
		  <h3 class="title-gallery"><?= get_the_title(); ?></h3>
		  <?php foreach ($image_gallery as $key => $value) { ?>
		  <?php $img_gallery 	= 	$value['url'];
			$_img 			= 	get_image_detail($img_gallery,250,167);
       		$_img_url 		= 	$_img[0];
       		$_thumb			=   $value['sizes']['medium'];
		  	$_img_big 		= 	get_image_detail($img_gallery,1200,800);
       		$_img_url_big 	= 	$_img_big[0];
       		
       		$_thumb			=   $value['sizes']['medium'];
       		$_img_large     =   $value['sizes']['large']; //large
       		?>
		  <div class="ga-box">
			  <a href='<?= $_img_large ?>' data-fancybox-group="<?= get_the_title(); ?>" data-fancybox="<?= get_the_title(); ?>" title="<?= $caption ?>">
				  <img src="<?= $_thumb ?>"/>
				  <div class="thumb-caption">
					  <h3><?= $caption ?></h3>
				  </div>
			  </a>
		  </div>
		  <?php } ?>
		  <!---->
	  </div>
	  <?php endforeach;
	  wp_reset_postdata(); ?>
	</div>
	<div class="clearfix"></div>

</div>


<?php get_footer(); ?>
<script type='text/javascript' src='https://www.edenbeachkhaolak.com/wp-content/themes/edenbeachkhaolak/js/jquery.parallax.js'></script>