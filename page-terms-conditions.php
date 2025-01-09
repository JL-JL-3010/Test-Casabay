<?php get_header(); ?>
<?php get_template_part("template-parts/part", "mainmenu"); ?>
<?php get_template_part("template-parts/part", "mobilemenu"); ?>
<?php get_template_part("template-parts/part", "mainslide"); ?>
<?php get_template_part("template-parts/part", "reservation"); ?>

<?php 
$main_title = get_field('title');
if(empty($main_title)) $main_title =  get_the_title();   ?>

<section class=" sec__terms-and-conditions-list pd_mainsection" id="scrollTo">
    <div class="container">
        <h2 class="subtitle  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0s" ><?=$main_title?></h2>
    </div>
    <div class="container  aniset" animate-style="fadeInUpSm" animate-time="1s" animate-delay="0.2s" >
        <div class="wrap__listbox">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<div class="popup__form" id="clainform" style="display:none; ">

    <div class="sec__claimform">
        <div class="wrap">
            <form method="post" action="" name="request" id="request">
                <h2>Quick Claim Form</h2>
                <div class="row title">
                    <h4>Your details</h4>
                </div>
                <div class="row -title">
                    <div class="subject"><label for="title">Title</label> <span class="_red">*</span></div>
                    <div class="inputfield">
                        <select name="title" id="title" required="">
                            <option selected="selected" value=""> Please Select </option>
                            <option value="Ms.">Ms.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Dr.">Dr.</option>
                        </select>
                    </div>
                </div>
                <div class="row -name">
                    <div class="subject"><label for="firstname">First Name</label> <span class="_red">*</span></div>
                    <div class="inputfield"><input id="firstname" name="firstname" type="text" required=""></div>
                </div>
                <div class="row -name">
                    <div class="subject"><label for="lastname">Last Name</label> <span class="_red">*</span></div>
                    <div class="inputfield"><input id="lastname" name="lastname" type="text" required=""></div>
                </div>
                <div class="row -email">
                    <div class="subject"><label for="email">Email Address</label> <span class="_red">*</span></div>
                    <div class="inputfield"><input id="email" name="email" type="email" required=""></div>
                </div>
                <div class="row title">
                    <h4>Your reservation</h4>
                </div>
                <div class="row -resernumber">
                    <div class="subject"><label for="resernumber">Reservation Number</label> <span class="_red">*</span></div>
                    <div class="inputfield"><input id="resernumber" name="resernumber" type="text" required=""></div>
                </div>
                <div class="row -bookdetail">
                    <div class="subject"><label for="bookdetail">Booking Details</label></div>
                    <div class="inputfield"><textarea id="bookdetail" name="bookdetail" rows="5"></textarea></div>
                </div>
                <div class="row -date">
                    <input type="hidden" readonly="" id="check_in_date" value="2019-07-15" name="check_in_date">
                    <div class="subject"><label for="checkin">Arrival Date</label></div>
                    <div class="inputfield"><input type="text" readonly="" id="checkin" placeholder="check in" value="" name="checkin" class=""></div>
                </div>
                <div class="row -date">
                    <input type="hidden" readonly="" id="check_out_date" value="2019-07-16" name="check_out_date">
                    <div class="subject"><label for="checkout">Departure Date</label></div>
                    <div class="inputfield"><input type="text" readonly="" id="checkout" placeholder="check out" value="" name="checkout" class=""></div>
                </div>
                <div class="row -remark">
                    <div class="subject"><label for="bookdetail">Remarks</label></div>
                    <div class="inputfield"><textarea id="remark" name="remark" rows="5"></textarea></div>
                </div>
                <div class="row -pass">
                    <div class="subject"><label for="password">Please verify code</label> <span class="_red">*</span></div>
                    <div class="inputfield">
                        <div class="wrap_verify"><img src="<?=WCL_TEMPLATE?>/inc/formmail/verificationimage.php?29313" alt="verification image, type it in the box" class="img_verify" width="70" height="24"></div>
                        <div class="wrap_pass">
                            <input id="password" name="password" type="text" placeholder="" required="">
                        </div>
                    </div>
                </div>
                <div class="alert--clainform"></div>
                <div class="wrap--loading" style="display:none;">
                    <span class="">loading</span>
                    <svg class="lds-typing" width="100%" height="100%" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 0 100 100">
                        <circle cx="27.5" cy="41.197" r="5" fill="#000">
                            <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.5s"></animate>
                        </circle>
                        <circle cx="42.5" cy="57.791" r="5" fill="#333">
                            <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.375s"></animate>
                        </circle>
                        <circle cx="57.5" cy="62.5" r="5" fill="#666">
                            <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.25s"></animate>
                        </circle>
                        <circle cx="72.5" cy="62.5" r="5" fill="#999">
                            <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="62.5;37.5;62.5;62.5" keyTimes="0;0.25;0.5;1" dur="1s" begin="-0.125s"></animate>
                        </circle>
                    </svg>
                </div>
                <div class="row -btn">
                    <div class="inputfield">
                        <button name="btnSubmit" type="submit" class="btn-submit" id="btnSubmit" value="Submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php get_footer(); ?>