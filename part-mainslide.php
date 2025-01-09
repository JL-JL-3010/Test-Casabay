<section class="sec__mainslide sub">
    <div class="slidetext">
			<span><a href="<?=$banner_link?>" class="text-title" <?=$target?> ><?=$banner_text?></a></span>
			<a href="<?=$banner_link?>" <?=$target?>><?=$banner_subtext?></a>

		</div>
        <?php
		    $video = get_field("video");
        if($video){ ?>

        <div class="wrap__video" id="video_playandpause">
				<div id="video-container">
					<video autoplay muted playsinline id="video" width="100%" poster="data:image/gif,AAAA" class="fullscreen-bg__video">
					<source src="<?=$video['url']?>" type="video/mp4">
					</video>
				</div>
  			</div>
  			<div id="video-controls">
  				<button type="button" id="mute" class="sound-on sound-off"></button>
  			</div>
        <script type='text/javascript' src='<?=WCL_TEMPLATE?>/js/script-video.js?ver=010219a'></script>

        <?php
        } else{
        ?>

        <div class="sd__mainbanner">

            <?php
            $images = get_field('images');
            if($images) {
            foreach ($images as $key => $image_array) {

                $offset = explode("x", "50x50");
                $sizes  = explode("x", "1440x660");
                $image_url = 'https://dummyimage.com/'.$sizes[0].'x'.$sizes[1].'/000/fff.jpg';
                if($image_array){
                    $attach_image = wp_get_attachment_image_src($image_array['id'],'full');
                    if ($attach_image[1] > ($sizes[0]+$offset[0]) || $attach_image[2] > ($sizes[1]+$offset[1])) {
                        $image_url = aq_resize($attach_image[0], $sizes[0], $sizes[1], true, true, true);
                    }
                    else $image_url = $attach_image[0];
                }
                $alt_text = get_alt_text($image_array['id']); ?>

            <div class="box">
                <div class="_bg-full" style="background-image: url(<?=$image_url?>);"><img src="<?=$image_url?>" alt="<?=$alt_text?>"></div>
            </div>

            <?php }} else {  ?>

            <div class="box">
                <div class="_bg-full" style="background-image: url(https://www.stayphuketresort.com/wp-content/uploads/2019/08/AP-2-1440x660.jpg);"><img src="https://www.stayphuketresort.com/wp-content/uploads/2019/08/AP-2-1440x660.jpg" alt=""></div>
            </div>

            <?php } ?>

        </div>

        <?php  } ?>

        <div class="scrolldown">
            <a href="#scrollTo"><img src="<?=WCL_TEMPLATE?>/images/icon--scrolldown.png" alt="Scrolldown"><span>scroll down</span></a>
        </div>
    </div>
</section>
