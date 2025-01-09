
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
        <h2 class="subtitle  aniset animated fadeInUpSm" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" style="animation-delay: 0s; animation-duration: 1s;"><?=$main_title?></h2>
        <div class="detail  aniset animated fadeInUpSm" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" style="animation-delay: 0.2s; animation-duration: 1s;">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>