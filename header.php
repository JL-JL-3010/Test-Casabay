<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Wordpress
 * @subpackage WCL Header
 * @since 1.0.0
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head> 
	
	<!-- Event snippet for sign up conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-709491724/6vpdCN2N7sAZEIz4p9IC'});
</script>

	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XF1FPVL42J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XF1FPVL42J');
</script>
	
	
<script type="application/ld+json" class="schemantra">{
  "@context": "https://schema.org",
  "@type": "Local Business",
  "@id": "Local Business",
  "address": "56/80 Moo 4, Soi Suksan 2, Wiset Rd., Rawai, Mueang, Phuket 83130",
  "Name": "STAY Wellbeing & Lifestyle Resort",
  "description": "Phuket’s premier all-in-one wellness resort with onsite 1,000sqm gym, Spa with Onsen, Anti-aging & Physio Clinic, Healthy restaurant, 3 pools. Book now!",
  "hasMap": "https://maps.app.goo.gl/2xrG54nwbYh55SsM8",
  "image": "https://www.stayphuketresort.com/wp-content/themes/stay-phuket/images/logo--stay-wellbeing.svg",
  "logo": "https://www.stayphuketresort.com/wp-content/themes/stay-phuket/images/logo--stay-wellbeing.svg",
  "mainEntityOfPage": "https://www.stayphuketresort.com/",
  "map": "https://maps.app.goo.gl/2xrG54nwbYh55SsM8",
  "telephone": "+ 66 (0) 7636 3250"
}</script>
	

	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF59VMDJ');</script>
<!-- End Google Tag Manager -->
	
	<meta name="google-site-verification" content="5AUzxOGuOLmfJ6k2EaRhb1ur773_ZeNdKdE2b7Gg9B0" />
	<meta name="google-site-verification" content="K7Bx7wPkiv5BrCbhohkDjOutbSs4BGH19DnbmDBtWTo" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="NO-CACHE">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="publisher" content="Web Connection - Hotel Digital Marketing Agency" />
    <meta name="author" content="Web Connection – Hotel Digital Marketing Agency" />
    <meta name="robots" content="all" />
    <meta name="revisit-after" content="7 days" />
    <meta name="classification" content="Hotels &amp; Resorts, Travel &amp; Tourism" />
    <meta name="google-site-verification" content="wGrrxQcdWKPV7GyX_ojUb3QughCSwXaFEhYhnYlcw_A" />
	<meta name="google-site-verification" content="9lIl0zhh3tuknU2-ZLeRyosGS4trHVd8yBPIZpGtu8M" />


    <link rel="apple-touch-icon" sizes="180x180" href="<?=WCL_TEMPLATE?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=WCL_TEMPLATE?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=WCL_TEMPLATE?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=WCL_TEMPLATE?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=WCL_TEMPLATE?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
	<meta name="facebook-domain-verification" content="510y2798x3iapuf3tw73tl8iynmxbf" />


    <?php wp_head(); ?>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF59VMDJ');</script>
<!-- End Google Tag Manager -->
	
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XF1FPVL42J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XF1FPVL42J');
</script>

	
</head>

<?php
$classArgs = array(
    'home'              => 'home__page',
    'rooms'             => 'home__page',
    'cuisine'           => 'fitness__page',
    'wellness'          => 'fitness__page',
    'stay-on-board'     => 'fitness__page',
    'attractions'       => 'spa__page',
    'gallery'           => 'spa__page',
    'gallery'           => 'staygreeninitiative',
    'offer'             => 'offer__page',
    'terms-and-conditions'  => 'spa__page',
    'contact-us'        => 'spa__page',
);
$bodyclass = '';

$post_type = get_post_type();
if($post_type  == 'page') {
    $key = $post->post_name;
    if(isset($classArgs[$key])) $bodyclass = $classArgs[$key];
}
else if($post_type == 'room') {
    $bodyclass= 'roomtype__page';
}
?>

<body <?php body_class($bodyclass); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF59VMDJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->