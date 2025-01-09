<section class="sec__facilities-home">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('room_title')?></h4>
        <div class="wrap__box sd__facilities aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

        <?php
            $args = array(
                'post_type'     => 'room',
                'post_per_page' => -1
            );
            $query = new WP_Query($args);
            while($query->have_posts()) { $query->the_post();
                $image_array = get_field('image_1');
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "960x790");
                $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                if($image_array){
                    $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                    if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                        $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                    }
                    else $image_url = $attach_image[0];
                }
                $alt_text = get_alt_text($image_array['id']); ?>


            <div class="box" style='margin-bottom: 20px;'>
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
                    </div>
                    <div class="detail">
                        <h4><?=get_the_title();?></h4>
                        <div class="textdetail">
                            <p><?php //the_field('content_1'); ?></p>
                        </div>
                        <div class="link">
                            <a href="<?=get_permalink();?>" class="_btn-readmore">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } wp_reset_postdata(); ?>

        </div>
    </div>
</section>

<section class="sec__facilities-home">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('facilities_services_title')?></h4>
        <div class="wrap__box sd__facilities<?=isset($_GET['test'])?'- facilities':''?>  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

            <?php
            $facilities = get_field('facilities_services_group');
            foreach ($facilities as $key => $value) {
                $image_array = $value['image'];
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "380x500");
                $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                if($image_array){
                    $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                    if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                        $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                    }
                    else $image_url = $attach_image[0];
                }
                $alt_text = get_alt_text($image_array['id']); ?>

            <div class="box" style='margin-bottom: 20px;'>
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
                    </div>
                    <div class="detail">
                        <h4><?=$value['title']?></h4>
                        <div class="textdetail">
                            <p><?=$value['content']?></p>
                        </div>
                        <div class="link">
                            <a href="<?=$value['button_link']?>" class="_btn-readmore"><?=$value['button_label']?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    </div>
</section>



<?php
$page_id = get_page_by_path('special-offers');
//$boxes = get_field('boxes',$page_id);
$boxes = get_field('offers');
if(count($boxes) < 3) {
    $box_class = 'sd__offer_'.count($boxes).'box';
}
else $box_class = 'sd__offer';
?>
<section class="sec__offer-home ">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('special_offers_title')?></h4>
        <div class="wrap__box <?=$box_class?>  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

        <?php

        foreach ($boxes as $key => $box) {



            //$link = get_permalink($page_id);
            $link = $box['button_link'];

            $image_array = $box['image'];
            $offset = explode("x", "0x0");
            $sizes  = explode("x", "460x500");
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
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="SPECIAL OFFERS : <?=$box['title']?>"></div>
                    </div>
                    <div class="detail">
                        <h6><?=$box['title']?></h6>
                        <div class="textdetail">
                            <p><?=$box['short_description']?></p>
                        </div>
                        <div class="link">
                            <a href="<?=$link?>" class="_btn-readmore"><?=__('Explore','wcl')?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    </div>
</section>