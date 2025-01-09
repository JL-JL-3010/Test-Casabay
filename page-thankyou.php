<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>


    <section class="sec__mainpagehome sec__thank pd_mainsection" id="scrollTo">
        <div class="container">
            <!-- <h1>Wellbeing & Lifestyle Resort</h1> -->
            <h2 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" >THANK YOU</h2>
            <div class="detail  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
                <p>Thanks, we have received your inquiry and will get back to you as soon as possible. Use your browser's back button or <a href="<?=get_home_url()?>">Click here</a> to redirect homepage.</p>
            </div>
            <div class="wrap__contactform">
            </div>
        </div>
    </section>

 <?php get_footer(); ?>

