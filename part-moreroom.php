
<?php   
    $rows = get_field('rows');
    if( $rows ) { ?>

<section class="sec__roomtype">
    <div class="container full">
        <div class="wrap__boxroom">
            <div class="wrap__listitem">

                <?php
                    foreach( $rows as $key => $row ) {
                        
                        $image_array = $row['image'];
                        $sizes  = explode("x", "960x600");
                        $w = trim($sizes[0]); $h = trim($sizes[1]);
                        $image_url = 'https://dummyimage.com/'.$w.'x'.$h.'/000/fff.jpg';
                        if($image_array){
                            $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                            if ($attach_image[1] > $w || $attach_image[2] > $h) {
                                $image_url = aq_resize($attach_image[0], $w, $h, true, true, true);
                            }
                            else $image_url = $attach_image[0];
                        }
                        $alt_text = get_alt_text($image_array['id']);
               
                        $title = $row['title'];
                        $content = $row['content']; ?>

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

                            <?php
                            $default	= '';
                            $target 	= 'target="_blank"';
                            $new_tab	= $row['open_new_tab'];
                            $btn_link	= $row['button_link'];
                            $btn_label	= $row['button_label'];
                            if(!empty($default) && empty($btn_link)) $btn_link = $default;
                            if(!empty($btn_label) && !empty($btn_link)) {
                                if(!$new_tab) $target = ''; ?>
                                <div class="link"><a href="<?=$btn_link?>" class="_btn-booknow" target="_blank"><?=$btn_label?></a></div>
                            <?php } ?>

                           
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>

<?php } ?>