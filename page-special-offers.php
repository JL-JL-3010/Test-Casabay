<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>


<?php 
$main_title = get_field('title');
if(empty($main_title)) $main_title =  get_the_title();   ?>
<section class="sec__mainpagehome pd_mainsection" id="scrollTo">
    <div class="container">
        <h2 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" ><?=$main_title?></h2>

        <?php if(!empty(get_the_content())) {?>
        <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
            <?php the_content(); ?>
        </div>
        <?php } ?>
    
    </div>
</section>


<section class="sec__offerlist">
    <div class="container">
        <div class="wrap__listitem">


        <?php 
        $boxes = get_field('offer_content_box');
        if($boxes){
            foreach ($boxes as $key => $box) {
                $image_array = $box['image_main'];
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
                $alt_text = get_alt_text($image_array['id']);
                ?>
            

            <div class="box__item  aniset" animate-style="fadeInRightSm" animate-time="1s" animate-delay="0s"  id="offer-<?=$key?>">
                <div class="photo">
                    <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$box['title_2']?>"></div>
                </div>
                <div class="content">
                    <div class="">
                        <h5><?=$box['title_2']?></h5>                     
                        <div class="description">
                            <?=$box['content_offer']; ?>
                        </div>
						
						<?php if(!empty($box['button_link'])) { ?>
                        <div class="link">
                            <a href="<?=$box['button_link']?>" class="_btn-explore" target="_blank"><?=$box['button_label']?></a>							
                        </div>
						<?php } ?>
						
                    </div>
                </div>
            </div>

            <?php }} ?>
               
        </div>
    </div>
</section>

<?php get_footer(); ?>