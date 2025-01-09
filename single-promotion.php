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

<section class="sec__mainpagehome pd_mainsection pd_promotion" id="scrollTo">
    <div class="container">
        <h2 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" ><?=$main_title?></h2>

        <?php 
        $listing = get_field('listing');
        $image_array = $listing['image'];
        $sizes  = explode("x", "720x600");
        $w = trim($sizes[0]); $h = trim($sizes[1]);
        $image_url = 'https://dummyimage.com/'.$w.'x'.$h.'/000/fff.jpg';
        if($image_array){
            $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
            if ($attach_image[1] > $w || $attach_image[2] > $h) {
                $image_url = aq_resize($attach_image[0], $w, $h, true, true, true);
            }
            else $image_url = $attach_image[0];
        }
        $alt_text = get_alt_text($image_array['id']); ?>
        
        <a href='<?=$image_array['url']?>' data-fancybox-group="promotions" data-fancybox="promotions" title="">
            <img class="main-image" src="<?=$image_url?>" alt="<?=$alt_text?>">
        </a>

        <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
            <?php the_content(); ?>
        </div>

        <?php
        $default	= '';
        $target 	= 'target="_blank"';
        $new_tab	= get_field('open_new_tab');
        $btn_link	= get_field('button_link');
        $btn_label	= get_field('button_label');
        if(!empty($default) && empty($btn_link)) $btn_link = $default;
        if(!empty($btn_label) && !empty($btn_link)) {
            if(!$new_tab) $target = ''; ?>

        <br />
		<div class="link aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.4s" >
			<a href="<?=$btn_link?>" class="_btn-booknow" <?=$target?>><?=$btn_label?></a>
		</div>
            
        <?php } ?>

    </div>


    <div class="wrap-room-gallery">
        <?php
            $image_gallery = get_field('image_gallery');
            if( $image_gallery ) {
                foreach( $image_gallery as $key => $image_array ) {

                    $sizes  = explode("x", "300x300");
                    $w = trim($sizes[0]); $h = trim($sizes[1]);
                    $image_url = 'https://dummyimage.com/'.$w.'x'.$h.'/000/fff.jpg';
                    if($image_array){
                        $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                        if ($attach_image[1] > $w || $attach_image[2] > $h) {
                            $image_url = aq_resize($attach_image[0], $w, $h, true, true, true);
                        }
                        else $image_url = $attach_image[0];
                    }
                    $alt_text = get_alt_text($image_array['id']);
                    
                    ?>

                    <div class="image-box">
                        <a href='<?=$image_array['url']?>' data-fancybox-group="promotions" data-fancybox="promotions" title="">
                            <img src="<?=$image_url?>" alt="<?=$alt_text?>">
                        </a>
                    </div>

        <?php
                }
            }
        ?>

    </div>

</section>



<section class="sec__moreroom " style="display:none">
    <div class="container">
        <h4 class="hline  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" ><?=__('Alternative Promotion','wcl')?></h4>
        <div class="wrap__box sd__offer  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >


            <?php
            $curent_post = $post->ID;
            $args = array(
                'post_type'     => 'promotion',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            while($query->have_posts()) { $query->the_post();

                //if($curent_post != get_the_ID()) {
                    $listing = get_field('listing');

                    $image_array = $listing['image'];
                    $offset = explode("x", "0x0");
                    $sizes  = explode("x", "440x500");
                    $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                    if($image_array){
                        $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                        if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                            $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                        }
                        else $image_url = $attach_image[0];
                    }
                    $alt_text = get_alt_text($image_array['id']);

                    $title = get_the_title();
                    $link = get_permalink(); ?>
            
        
            <div class="box">
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="Rooms & Villas : <?=$title?>"></div>
                    </div>
                    <div class="detail">
                        <h6><?=$title?></h6>                      
                        <div class="link">
                            <a href="<?=$link?>" class="_btn-readmore"><?=__('Explore','wcl')?></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata(); ?>
         
        </div>
    </div>
</section>

<?php get_footer(); ?>
     