<?php
/**
 * The template for displaying the page
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Wordpress
 * @subpackage WCL Page
 * @since 1.0.0
 */

?>



<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>

<?php 
$main_title = get_field('title');
if(empty($main_title)) $main_title = get_the_title(); ?>

<section class="sec__mainpagehome pd_mainsection" id="scrollTo"style="padding-top: 50px; padding-bottom: 30px;">
    <div class="container">
        <h4 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" ><?=$main_title?></h4>
        <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
            <?php the_content(); ?>
        </div>

        <?php 
        $button_label = get_field('button_label');
        $button_link = get_field('button_link');

        if(!empty($button_link)){ ?>

        <br />
		<div class="link aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.4s" >
			<a href="<?=$button_link?>" class="_btn-booknow" target="_blank"><?=$button_label?></a>
		</div>

        <?php } ?>

    </div>
</section>

<section class="sec__fitnesslist">
    <div class="container">
        <div class="wrap__listitem">

        <?php 
        $boxes = get_field('boxes');
        if($boxes){
            foreach ($boxes as $key => $box) { ?>

            <div class="box__item  aniset" animate-style="fadeInRightSm" animate-time="1s" animate-delay="0s"  id="<?=sanitize_title($box['title'])?>">
                <div class="photo">
                    <div class="sd__photolist">

                        <?php 
                        foreach ($box['images'] as $key => $image) {
                            
                            $image_array = $image;
                            $offset = explode("x", "0x0");
                            $sizes  = explode("x", "720x600");
                            $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                            if($image_array){
                                $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                                if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                                    $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                                }
                                else $image_url = $attach_image[0];
                            }
                            $alt_text = get_alt_text($image_array['id']); ?>
										
						
                        <div class="box">
                            <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$main_title?> : <?=$alt_text?>"></div>
                        </div>

                    <?php } ?>


                    </div>
                </div>
                <div class="content">
                    <div class="">
                        <h5><?=$box['title']?></h5>
                        <div class="decoration">                       
                            <?=$box['content']; ?>                     
                            <br />
                            <?php if(!empty($box['button_link'])) {?>
                            <p><a href="<?=$box['button_link']?>" class="_btn-explore" target="_blank"><?=$box['button_label']?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php }} ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>
     