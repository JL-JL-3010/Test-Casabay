<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>
        
<section class="sec__mainpagehome pd_mainsection" id="scrollTo">
    <div class="container">

        <?php 
        $main_title = get_field('title');
        if(empty($main_title)) $main_title =  get_the_title();   ?>
        <h4 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=$main_title?></h4>
        <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s">
            <?php the_content(); ?>          
        </div>

        <div class="wrap__allamenities">
            <h4 class="aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?php echo get_field('amenities_title'); ?></h4>
            <?php echo get_field('amenities_icon'); ?>
        </div>

    </div>
</section>
<section class="sec__roomtype">
    <div class="container full">
        <div class="wrap__boxroom">
            <div class="wrap__listitem">

                <?php
                $args = array(
                    'post_type'     => 'room',
                    'post_per_page' => -1
                );
                $query = new WP_Query($args);
                while($query->have_posts()) { $query->the_post();
                    $image_array = get_field('image_2');
                    $offset = explode("x", "0x0");
                    $sizes  = explode("x", "960x600");
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
                    $content = get_field('content_2');
                    $book_label = get_field('book_label');
                    $book_link = get_field('book_link');
                    $link = get_permalink(); ?>

                <div class="box__item aniset" animate-style="fadeInRightSm" animate-time="1s" animate-delay="0.2s">
                    <div class="photo">
                        <div class="sd__photolist">
                            <div class="box">
                                <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$title?> : <?=$alt_text?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="">
                            <h5><?=$title?></h5>
                            <div class="decoration">
                                <?=$content?>                              
                            </div>
                            <div class="link"><a href="<?=$link?>" class="_btn-explore"><?=__('Explore','wcl')?></a><a href="<?=$book_link?>" class="_btn-booknow" target="_blank"><?=$book_label?></a></div>
                        </div>
                    </div>
                </div>

                <?php } wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>