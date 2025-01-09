<?php
global $post;
$hide_checkbox = get_field('hide_checkbox', $post->ID);
if($hide_checkbox==false){
?>
<div class="sec__reservation">
    <div id="roi-engine-container" class="roi-engine-container">
        <div id="roi-engine-loading" style="text-align: center; width: 100%; height: 113px; padding-top: 25px;">
            <img src="https://stayphuket.smartbooking-pro.com/roi-widgets/static/img/loading_widget.gif">
        </div>
    </div>
    <script>
        (function(r,o,i){
            var h=r.getElementsByTagName(o)[0],e=r.createElement(o);
            e.src='https://stayphuket.smartbooking-pro.com/en/roi-widgets/engine.js?lang=en';
            h.parentNode.insertBefore(e,h);
        })(document,'script','');
    </script>
</div>
<?php } ?>