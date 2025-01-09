<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Wordpress
 * @subpackage WCL Footer
 * @since 1.0.0
 */
?>


        <footer>
            <div class="wrap__infofooter">
                <div class="container wrap__footermenu">

                <?php
                wp_nav_menu(
                    array('theme_location'  => 'footer',
                        'container' 	    => 'ul',
                        'container_id'      => '',
                        'container_class'   => '',
                        'menu_id'           => '',
                        'menu_class'        => '',
                        'fallback_cb'       => '__return_false')
                    ); ?>

                </div>
                <div class="container">
                    <div class="col1">

                        <?php $footer_text = get_field('footer_text','option'); ?>
                        <?php echo $footer_text; ?>
                    </div>
                    <div class="col2">

						<!-- Begin Mailchimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; width:300px }
							#mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error { background-color: rgba(255,255,255,0);}
							#mc_embed_signup form { padding: 0;font-family:"Montserrat", sans-serif}
							.clear-mc{ clear: both;}
							/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
							   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
						<div id="mc_embed_signup">
						<form action="https://stay-phuket.us5.list-manage.com/subscribe/post?u=9bfa8deeabd625960b6c3f98a&amp;id=079bbc1935" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
					       <h2 style="float:left;">Subscribe</h2>
				        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
    						<div class="mc-field-group">
    							<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
    						</label>
    							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    						</div>
    						<div class="mc-field-group">
    							<label for="mce-FNAME">First Name </label>
    							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
    						</div>
    						<div id="mce-responses" class="clear-mc">
    							<div class="response" id="mce-error-response" style="display:none"></div>
    							<div class="response" id="mce-success-response" style="display:none"></div>
    						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9bfa8deeabd625960b6c3f98a_079bbc1935" tabindex="-1" value=""></div>
    						<div><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    				</div>
						</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						<!--End mc_embed_signup-->




                        <div class="wrap" style="display:none">
                            <strong><?=__('Get the latest news','wcl')?></strong>

                            <div class="wrap__newsletter">
                                <div class="wrap" >
                                    <form method="post" action="" name="newsletter_form" id="newsletter_form">
                                        <input type="hidden" name="action" value="newsletter_form" />
                                        <div class="errorTxt"></div>
                                        <input class="input_newsletter" id="emailnewletter" name="emailnewletter" placeholder="Your email" value="" type="email" required >
                                        <button  type="button" name="btnSubmit" class="_btn-submit" id="btnSubmitnewsletter" value="Submit"><?=__('Sign Up','wcl')?></button>
                                        <div class="alert--newsletter"></div>
                                        <div class="wrap--loading" style="display:none;">
                                            <span class="">loading</span>
                                            <svg class="lds-typing" width="100%" height="100%" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 0 100 100"  >
                                                <circle cx="27.5" cy="62.5" r="5" fill="#000">
                                                    <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.5s"></animate>
                                                </circle>
                                                <circle cx="42.5" cy="62.5" r="5" fill="#333">
                                                    <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.375s"></animate>
                                                </circle>
                                                <circle cx="57.5" cy="48.4263" r="5" fill="#666">
                                                    <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.25s"></animate>
                                                </circle>
                                                <circle cx="72.5" cy="38.9" r="5" fill="#999">
                                                    <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.125s"></animate>
                                                </circle>
                                            </svg>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v18.0" nonce="ldDgrIDH"></script>

                        <div class="wrap_social">
                            <div class="social">
                                <strong><?=__('Stay Close','wcl')?></strong>
                                <ul>
                                    <li><a href="<?php echo get_field('facebook','option'); ?>" target="_blank"><img src="<?=WCL_TEMPLATE?>/images/icon--facebookb.svg" alt="facebook"></a></li>
                                    <li><a href="<?php echo get_field('instagram','option');?>" target="_blank"><img src="<?=WCL_TEMPLATE?>/images/icon--instagramb.svg" alt="instagram"></a></li>
									<li><a href="<?php echo get_field('tripadvisor','option');?>" target="_blank"><img src="https://www.stayphuketresort.com/wp-content/uploads/2021/01/tripadvisor-logotype-1.svg"  alt="tripadvisor"></a></li>


                                    <!-- <li><a href="#" target="_blank"><img src="images/icon--twitter.svg" alt="twitter"></a></li>
                                        <li><a href="#" target="_blank"><img src="images/icon--youtube.svg" alt="youtube"></a></li> -->
                                    <!-- <li>
                                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap__copyright">
                <div class="container">
                    <div class="col1">
                        <?php echo get_field('copyright','option'); ?>
                    </div>
                    <div class="col2">
                    <?php echo get_field('design_by','option'); ?>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" id="back-to-top" class="backtotop_color" title="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>




    <?php wp_footer(); ?>

    <!--<div id="maquee_popup">
      <div id="maquee_close"><img src="<?=WCL_TEMPLATE;?>/images/bt-close.png"></div>
      <a target="_blank" href="https://www.stayphuketresort.com/th/ttogether/">
          <img class="bookdirect" src="<?=WCL_TEMPLATE;?>/images/stay-ttogether.jpg">
      </a>
    </div>-->

    </body>
</html>
