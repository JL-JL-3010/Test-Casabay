<section class="sec__facilities-home new fix_size homesec1" id="scrollTo">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('facilities_services_title')?></h4>
        <?php

        $facilities = get_field('facilities_services_group');
        ?>
        <div class="wrap__box sd__facilities- facilities-home-desktop aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

            <?php
			$i = 0;

            foreach ($facilities as $key => $value) {
                $image_array = $value['image'];
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "600x480");
                $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                if($image_array){
                    $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                    if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                        $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                    }
                    else $image_url = $attach_image[0];
                }
                $alt_text = get_alt_text($image_array['id']);


				$title = $value['title'];
				$content = $value['content'];
				$link = $value['button_link'];

				$i++;

			?>

            <div class="box" style='margin-bottom: 20px;'>
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
                    </div>
                    <div class="detail">
                        <h4><?=$title?></h4>
                        <div class="textdetail">
                            <p><?=$content?></p>
                        </div>
                        <div class="link">
                            <a href="<?=$link?>" class="_btn-readmore"><?=$value['button_label']?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>

        <?php if(isset($_GET['newlayout'])) { ?>

        <div class="wrap__box sd__facilities- facilities-home-mobile aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">
            <?php
            $i = 0;
            foreach ($facilities as $key => $value) {
                $image_array = $value['image'];
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "600x480");
                $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                if($image_array){
                    $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                    if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                        $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                    }
                    else $image_url = $attach_image[0];
                }
                $alt_text = get_alt_text($image_array['id']);


                $title = $value['title'];
                $content_m = $value['content_mobile'];
                $link = $value['button_link'];

                $i++;

            ?>
            <div class="box-item" style='margin-bottom: 20px;'>
                <div class="wrap">
                    <div class="photo-item">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
                    </div>
                    <div class="detail">
                        <h4><?=$title?></h4>
                        <div class="textdetail">
                            <?=$content_m;?>
                        </div>
                        <div class="link">
                            <a href="<?=$link?>" class="_btn-readmore"><?=$value['button_label']?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

        <?php } //isset ?>

    </div>
	
	<section class="sec__facilities-home rooms-home">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('room_title')?></h4>
        <div class="wrap__box sd__facilities-  aniset room-slide-home" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

        <?php
            $args = array(
                'post_type'     => 'room',
                'post_per_page' => -1,
                'post_status'   => 'publish'
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
                $alt_text = get_alt_text($image_array['id']);

            $room_intro = get_field('room_intro');

            $roomtitle = (!empty($room_intro['title'])?$room_intro['title']:get_the_title());
            $roomsubtitle = (!empty($room_intro['sub_title'])?'<h5 class="room_subtitle_home">' . $room_intro['sub_title'] . '</h5>':'');
            ?>
            <div class="box">
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
                    </div>
                    <div class="detail">
                        <h4><?=$roomtitle;?></h4>
                        <?=$roomsubtitle;?>
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
	
</section>
<?php } ?>

<?php
$restaurants = get_field('restaurants');
if($restaurants) {  ?>

<section class="sec__facilities-home box-4 fix_size">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=__('Restaurants','wcl');?></h4>
        <div class="wrap__box restaurants aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

            <?php
            foreach ($restaurants as $key => $value) {
                $image_array = $value['image'];
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "600x480");
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
$lespa_title = get_field('lespa_title');
$lespa_content = get_field('lespa_content');
if( !empty($lespa_title) && !empty($lespa_content) ) {
?>
<section class="sec__facilities-home new fix_size">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=$lespa_title;?></h4>
        <div class="wrap__box sd__facilities- aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

            <?php
            $i = 0;
            foreach ($lespa_content as $key => $value) {
                $image_array = $value['image'];
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "600x480");
                $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                if($image_array){
                    //$attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                    if ($image_array['width'] > ($sizes[0]+$offset[0]) || $image_array['height'] > ($sizes[1]+$offset[1])) {
                        $image_url = aq_resize($image_array['url'], $sizes[0], $sizes[1], true, true, true);
                    } else {
                        $image_url = $image_array['url'];
                    }
                }

                $alt_text = get_alt_text($image_array['id']);


                $title = $value['title'];
                $link = $value['link'];

                $i++;

            ?>

            <div class="box" style='margin-bottom: 20px;'>
                <div class="wrap">
                    <div class="photo">
                        <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
                    </div>
                    <div class="detail">
                        <h4><?=$title?></h4>
                        <div class="link">
                            <a href="<?=$link?>" class="_btn-readmore"><?=(!empty($value['button_label'])?$value['button_label']:_e('Explore','wcl'));?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    </div>

</section>

<?php } ?>


<?php
$staywell_title = get_field('stay_well_title');
$staywell_content = get_field('stay_well_content');
if($staywell_content) {  ?>

<section class="sec__facilities-home box-5 fix_size">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=$staywell_title?></h4>
        <div class="wrap__box restaurants aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

            <?php
            foreach ($staywell_content as $key => $value) {
                $image_array = $value['image'];
                $offset = explode("x", "0x0");
                $sizes  = explode("x", "600x480");
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
                            <a href="<?=$value['link']?>" class="_btn-readmore"><?=$value['button_label']?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    </div>
</section>

<?php } ?>





<?php
//$page_id = get_page_by_path('special-offers');
//$boxes = get_field('boxes',$page_id);
$boxes = get_field('offers');
if(count($boxes) < 3) {
	$box_class = 'wrap__box sd__offer_'.count($boxes).'box';
}
else $box_class = 'sd__offer';

?>
<section class="sec__offer-home fix_size">
    <div class="container">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('special_offers_title')?></h4>
        <div class="<?=$box_class?>  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">

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
