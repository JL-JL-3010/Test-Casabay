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
        <h2 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" >Promotions</h2>

        <?php //if(!empty(the_content())) {?>
        <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
            <?php //the_content(); ?>
        </div>
        <?php //} ?>
    
    </div>
</section>


<section class="sec__offerlist">
    <div class="container">
        <div class="wrap__listitem">

        <?php 
        if(have_posts()):
            while(have_posts()):the_post(); 

                $listing = get_field('listing');

                $group = $listing['group2'];
        
                $image_array = $listing['image2'];
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
                    <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$group['title']?>"></div>
                </div>
                <div class="content">
                    <div class="">
                        <h5><?=$group['title']?></h5>                     
                        <div class="description">
                            <?=$group['short_content']; ?>
                        </div>
                        <div class="link">

                            <?php
                            $default	= get_permalink();
                            $target 	= 'target="_blank"';
                            $new_tab	= $listing['open_new_tab'];
                            $btn_link	= $listing['button_link'];
                            $btn_label	= $listing['button_label'];
                            if(!empty($default) && empty($btn_link)) $btn_link = $default;
                            if(!empty($btn_label) && !empty($btn_link)) {
                                if(!$new_tab) $target = ''; ?>
                                <a href="<?=$btn_link?>" class="_btn-explore" <?=$target?>><?=$btn_label?></a>
                                
                            <?php } ?>

                            
                        </div>
                    </div>
                </div>
            </div>

                
        <?php endwhile; 
        endif; ?>


        
               
        </div>
    </div>
</section>

<?php get_footer(); ?>