<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>

<section class=" sec__contactus pd_mainsection" id="scrollTo">
    <div class="container">
        <?php
        $main_title = get_field('title');
        if(empty($main_title)) $main_title =  get_the_title();   ?>
        <h2 class="subtitle aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s"><?=$main_title?></h2>
        <div class="wrap__container">
            <div class="content__map">
                <div class="aniset" animate-style="fadeInLeftSm" animate-time="1s" animate-delay="0s">
                    <?php
                    $location = get_field('location');
                    echo $location; ?>
                    <br />
                    <?php
                    $get_direction = get_field('get_direction');
                    $get_direction_link = get_field('get_direction_link'); ?>
                    <div class="getlink">
                        <p><a href="<?=$get_direction_link?>" target="_blank"><?=$get_direction?></a></p>
                    </div>
                    <br />
                    <div class="sec__contactform">
                        <form method="post" action="" name="request" id="request">
                            <div class="row -subject">
                                <div class="subject"><label for="subject"><?=__('Subject','wcl')?></label> <span class="_red">*</span></div>
                                <div class="inputfield">
                                    <select id="subject" name="subject" required>
                                        <option value="" selected="selected"><?=__('Please select a subject','wcl')?></option>
                                        <option value="Feedback"><?=__('Feedback','wcl')?></option>
                                        <option value="General Inquiries"><?=__('General Inquiries','wcl')?></option>
                                        <option value="Inquiries About Bookings (Amendment, Cancellation, etc.)"><?=__('Inquiries About Bookings (Amendment, Cancellation, etc.)','wcl')?></option>
                                        <option value="Make A Booking"><?=__('Make A Booking','wcl')?></option>
                                        <option value="All-Inclusive Fitness Retreat"><?=__('All-Inclusive Fitness Retreat','wcl')?></option>
                                        <option value="All-Inclusive Weightloss Retreat"><?=__('All-Inclusive Weightloss Retreat','wcl')?></option>
                                        <option value="All-Inclusive Detox Retreat"><?=__('All-Inclusive Detox Retreat','wcl')?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row -name">
                                <div class="subject"><label for="firstname"><?=__('First Name','wcl')?></label> <span class="_red">*</span></div>
                                <div class="inputfield"><input id="firstname" name="firstname" type="text" required></div>
                            </div>
                            <div class="row -name">
                                <div class="subject"><label for="lastname"><?=__('Last Name','wcl')?></label> <span class="_red">*</span></div>
                                <div class="inputfield"><input id="lastname" name="lastname" type="text" required></div>
                            </div>
                            <div class="row -email">
                                <div class="subject"><label for="email"><?=__('Email','wcl')?></label> <span class="_red">*</span></div>
                                <div class="inputfield"><input id="email" name="email" type="email" required></div>
                            </div>
                            <div class="row -phone">
                                <div class="subject"><label for="phone"><?=__('Phone','wcl')?></label> <span class="_red">*</span></div>
                                <div class="inputfield"><input id="phone" name="phone" type="text" required></div>
                            </div>
                            <div class="row -subject">
                                <div class="subject"><label for="message"><?=__('Message','wcl')?></label> <span class="_red">*</span></div>
                                <div class="inputfield"><textarea id="message" name="message" rows="8" required></textarea></div>
                            </div>
                            <div class="row -remark">
                                <div class="subject">&nbsp;</div>
                                <div class="inputfield"><?=__('Please note that fields marked with an asterisk (*) are required','wcl')?></div>
                            </div>
                            <div class="row -btn">
                                <div class="subject">&nbsp;</div>
                                <div class="inputfield">
                                    <button name="btnSubmit" type="submit" class="btn-submit" id="btnSubmit" value="Submit"><?=__('Submit','wcl')?></button>
                                    <button name="btnReset" type="reset" class="btn-submit" id="btnSubmit" value="Reset"><?=__('Reset','wcl')?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="api__map aniset" animate-style="fadeInRightSm" animate-time="1s" animate-delay="0s">
                <?php echo $post->post_content; ?>
            </div>
        </div>
        <div class="wrap__contactform">
        </div>
    </div>
</section>

<?php get_footer(); ?>
