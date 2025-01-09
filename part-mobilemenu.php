<div class="wrap__mobilemenu">
    <div class="bg_blur"></div>
    <div class="_btn-close"></div>
    <div class="wrap__menu">
        <div class="wrap__inslidemenu">
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
    </div>
    <div class="social">
        <ul>
            <li><a href="https://www.facebook.com/stayphuket/" target="_blank"><img src="<?=WCL_TEMPLATE?>/images/icon--facebook.svg" alt="facebook"></a></li>
            <li><a href="https://www.instagram.com/staywellbeingresort/" target="_blank"><img src="<?=WCL_TEMPLATE?>/images/icon--instagram.svg" alt="instagram"></a></li>
        </ul>
    </div>
</div>
