
<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>

<div style="text-align:center;padding:250px 0 200px">
    <h1 >ERROR 404</h1>
    <p>Sorry, the page you're looking for can't be found.</p>
    <p>Continue browsing by clicking on the links below.</p>
    <a href="<?=get_home_url(); ?>"><?=get_home_url();?></a>
</div>

<?php get_footer(); ?>
