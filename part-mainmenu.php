<?php if( current_user_can( 'administrator' ) ){ ?>
<div class="box__adminedit"><a href="<?=get_edit_post_link( $post_register->ID ); ?>" target="_blank"><img src="https://www.stayphuketresort.com/wp-content/uploads/2020/08/icon-edit.svg" /> Edit</a></div>
<?php } ?>
<header>
    <div class="container  newv">


        <?php //if( current_user_can( 'administrator' ) ){ ?>

        <div class="logo">
            <a href="<?=get_home_url()?>"><img src="<?=WCL_TEMPLATE?>/images/logo--stay-wellbeing.svg" alt="STAY Wellbeing & Lifestyle Resort home"></a>
        </div>
        <div class="sha-logo">
        </div>

        <div class="w__headermenu">
            <div class="wrap__topbar">
                <div class="social">
                  <ul>
                      <li><a href="https://stayphuket.smartbooking-pro.com/en" target="_blank" class="btn-booking">Book Room Now</a></li>
                      <li><a href="<?php echo get_field('facebook','option');?>" target="_blank"><img src="<?=WCL_TEMPLATE?>/images/icon--facebook.svg" alt="facebook"></a></li>
                      <li><a href="<?php echo get_field('instagram','option');?>" target="_blank"><img src="<?=WCL_TEMPLATE?>/images/icon--instagram.svg" alt="instagram"></a></li>
                      <li><a href="<?php echo get_field('tripadvisor','option');?>" target="_blank"><img src="https://www.stayphuketresort.com/wp-content/uploads/2021/01/tripadvisor-logotypew.svg" alt="Tripadvisor"></a></li>
                      <!-- <li><a href="#" target="_blank"><img src="images/icon--twitter.svg" alt="twitter"></a></li>
                      <li><a href="#" target="_blank"><img src="images/icon--youtube.svg" alt="youtube"></a></li> -->
                  </ul>
                  <div class="menu-language-switcher">
                  <?php do_action('wpml_add_language_selector'); ?>
                  </div>
                </div>
            </div>
            <div class="wrap__nav">
                <div class="mainmenu">

                <?php
                wp_nav_menu(
                    array('theme_location'  => 'primary',
                        'container' 	    => 'ul',
                        'container_id'      => '',
                        'container_class'   => '',
                        'menu_id'           => 'list__mainmenu',
                        'menu_class'        => '',
                        'fallback_cb'       => '__return_false')
                    ); ?>

                </div>
                <div class="_btn-mobilemenu">
                <div class="wrap__btn-booking">
                  <a href="https://stayphuket.smartbooking-pro.com/en/" target="_blank" class="btn-booking">Book Room Now</a>
                </div>
                <div class="menu-language-switcher-mobile">
                <?php do_action('wpml_add_language_selector'); ?>
                </div>

                    <div class="text"><?=__('MENU','wcl')?></div>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>





        <?php //}else{ ?>

        <!-- <div class="logo">
            <a href="<?=get_home_url()?>"><img src="<?=WCL_TEMPLATE?>/images/logo--stay-wellbeing.svg" alt="STAY Wellbeing & Lifestyle Resort home"></a>
        </div>

        <div class="wrap__topbar">
            <div class="social">
              <ul>
                  <li><a href="https://stayphuket.smartbooking-pro.com/en/" target="_blank" class="btn-booking">Book Now</a></li>
                  
                  <li><a href="#" target="_blank"><img src="images/icon--twitter.svg" alt="twitter"></a></li>
                  <li><a href="#" target="_blank"><img src="images/icon--youtube.svg" alt="youtube"></a></li>
              </ul>
              <div class="menu-language-switcher">
              <?php //do_action('wpml_add_language_selector'); ?>
              </div>
            </div>
        </div>

        <div class="wrap__nav">
            <div class="mainmenu">

            <?php
            wp_nav_menu(
                array('theme_location'  => 'primary',
                    'container' 	    => 'ul',
                    'container_id'      => '',
                    'container_class'   => '',
                    'menu_id'           => 'list__mainmenu',
                    'menu_class'        => '',
                    'fallback_cb'       => '__return_false')
                ); ?>

            </div>
            <div class="_btn-mobilemenu">
            <div class="wrap__btn-booking">
              <a href="https://stayphuket.smartbooking-pro.com/en/" target="_blank" class="btn-booking">Book Now</a>
            </div>
            <div class="menu-language-switcher-mobile">
            <?php //do_action('wpml_add_language_selector'); ?>
            </div>

                <div class="text"><?=__('menu','wcl')?></div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> -->


      <?php // } ?>


    </div>
</header>
