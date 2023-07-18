<?php
$alerts = get_field('alerts', 'options');
$active = get_field('active', 'options');
$icon = get_field('icon', 'options');
if($active){  ?>
    <div class="alertBanner">
        <div class="container">
            <div class="grid">
                <div class="col-sm-12">
                    <?php if($icon){ ?><span class="icon <?php echo $icon; ?>"></span><?php } ?>
                    <p><?php echo $alerts; ?></p>
                    <span id="closeBanner" class="fa-regular fa-chevron-down"></span>
                </div>
            </div>
        </div>
    </div>
    <script>
		var cookieValue = $.cookie("CloseBannerCookie");
		if (cookieValue == null) {
			jQuery(document).ready(function ($) {
				$(".alertBanner").show();
			});
		}
    </script>
<?php } ?>