<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>

<?php 
$main_title = get_the_title();

// $image_array = get_field('image_3');
// $offset = explode("x", "0x0");
// $sizes  = explode("x", "720x716");
// $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
// if($image_array){
//     $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
//     if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
//         $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
//     }
//     else $image_url = $attach_image[0];
// }
// $alt_text = get_alt_text($image_array['id']);

$file_url = get_field('download');
$floor_plan_image = get_field('floor_plan_image');

?>
<section class="sec__mainpagehome pd_mainsection roomtype__maincontent" id="scrollTo">
    <div class="container">
        <h2 class="subtitle aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=$main_title?></h2>
        <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
            <?php the_field('content_3'); ?>
        </div>
        <div class="link aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.4s">
            <a href="<?=get_field('book_link');?>" class="_btn-booknow" target="_blank"><?=__('Book Now','wcl')?></a>
        </div>
    </div>
</section>
<section class="sec__roomdetail">
    <div class="container">
    <div class="wrap__listitem">
        <div class="box__item">
            <div class="photo  aniset" animate-style="fadeInLeftSm" animate-time="1s" animate-delay="0s" >
                <div class="sd__photolist">
                    <?php
                        $image_room_slide = get_field('image_room_slide');
                        if( $image_room_slide ) {
                            foreach( $image_room_slide as $key => $image_array ) {

                                $sizes  = explode("x", "720x716");
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

                        <div class="box">
                            <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$main_title?> | <?=$alt_text?>"></div>
                        </div>

                    <?php            
                            }
                        }
                    ?>

                    
                </div>
            </div>
            <div class="content  aniset" animate-style="fadeInRightSm" animate-time="1s" animate-delay="0s" >
                <div class="wrap">
                    <div class="wrap__floorplan">
                        <h4 class="hline"><?=__('Floorplan','wcl')?></h4>
                        <div class="link-loadplan"><a href="<?=$file_url['url']?>" target="_blank"><?=__('Download','wcl')?></a></div>
                        <div class="link-loadplanphoto"><a href="<?=$file_url['url']?>" target="_blank"><img src="<?=$floor_plan_image['url']?>" alt="Floorplan : <?=$main_title?>"></a></div>
                    </div>
                    <div class="wrap__facilities">
                        <div class="wrap">
                            <h4 class="hline"><?=__('Amenities','wcl')?></h4>
                            <?php the_field('amenities'); ?>
                            <?php the_field('amenities_right'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec__moreroom ">
    <div class="container">
        <h4 class="hline  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" ><?=__('Alternative Rooms & Villas','wcl')?></h4>
        <div class="wrap__box sd__offer  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >


            <?php
            $curent_post = $post->ID;
            $args = array(
                'post_type'     => 'room',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            while($query->have_posts()) { $query->the_post();

                if($curent_post != get_the_ID()) {
                    $image_array = get_field('image_1');
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

            <?php }} wp_reset_postdata(); ?>
         
        </div>
    </div>
</section>

<?php get_footer(); ?>