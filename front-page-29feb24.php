<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide-home"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>

<?php
$display = 'style="display:none"';
if(isset($_GET['test'])) $display = '';
?>

<?php get_template_part("template-parts/part", "new-home"); ?>

<?php //get_template_part("template-parts/part", "home-section-backup");  old ?>

<section class="sec__mainpagehome pd_mainsection" >
    <div class="container">
        <span class="subtitle aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('title')?></span>
        <div class="detail aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.4s">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section class="sec__location-home pd_mainsection">
    <div class="container full">
        <h4 class="hline aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=get_field('location_title')?></h4>
        <div class="wrap__container">
            <div class="content__map">
                <div class=" aniset" animate-style="fadeInLeftSm" animate-time="1s" animate-delay="0s" >
                  <?php the_field('location_description'); ?>
                    <br />
					          <div class="getlink">
                        <p><a href="<?=get_field('get_direction_link')?>" target="_blank"><?=get_field('get_direction_title')?></a></p>
                    </div>
                </div>
            </div>
            <div class="api__map  aniset" animate-style="fadeInRightSm" animate-time="1s" animate-delay="0.2s">
                <?php the_field('google_map'); ?>
            </div>
        </div>
    </div>
</section>

<?php
//if( current_user_can( 'administrator' ) ){
    //echo "xxx".get_field('open_minipopup');
    if ( get_field('open_minipopup')  ) {
        $minip_photo  = get_field('photo_popup');
        $minip_button = get_field('button_popup');
    ?>
<div class="minipopup">
    <div class="btn__close"></div>
    <div class="photo">
        <a href="<?=$minip_button['link']?>" <? if($minip_button['open_new_tab']){ echo " target='_blank' "; } ?> ><img src="<?=$minip_photo?>" alt="<?=$data_alt?>"></a>
    </div>
</div>
<?php }
//} ?>

<?php get_footer(); ?>
