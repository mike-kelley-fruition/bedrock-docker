<?php
$primary_logo = get_field('primary_logo', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$address = get_field('address', 'option');
$city = get_field('city', 'option');
$state = get_field('state', 'option');
$zip = get_field('zip', 'option');
$copyright = get_field('copyright', 'option');
$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$instagram = get_field('instagram', 'option');
$linkedin = get_field('linkedin', 'option');
$youtube = get_field('youtube', 'option');
$content = get_field('content', 'option');
$menu_title_1 = get_field('menu_title_1', 'option');
$menu_title_2 = get_field('menu_title_2', 'option');
$menu_title_3 = get_field('menu_title_3', 'option');
?>


<div class="newsLetterBanner">
    <div class="container">
        <div class="grid">
            <div class="col-sm-6">
                <h2>Sign up for the DEN Newsletter</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Mollis cras et eleifend ac quisque ultrices ante. Netus venenatis euismod pellentesque elit quam vulputate nulla.</p>
                <div class="newsLetterForm">
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footerFluid">
    <div class="container">
        <div class="grid">
            <div class="col-sm-6 col-md-4 left">
                <p class="footerTitleLeft">Directions</p>
                <p class="footerAddress"><?php echo $address; ?></p>
                <p class="footerAddress"><?php echo $city.', '.$state.' '.$zip; ?></p>
                <a href="#" class="mainCTA cta2">Customer Service</a>
                <p class="footerTitleLeft">About Den</p>
                <p><?php echo $content; ?></p>
                <div class="socialFooter">
                    <?php if ($facebook) { ?>
                        <a title="facebook link" target="_blank" href="<?php echo $facebook; ?>"><span class="fa-brands fa-facebook-f"></span></a>
                    <?php } ?>
                    <?php if ($twitter) { ?>
                        <a title="twitter link" target="_blank" href="<?php echo $twitter; ?>"><span class="fab fa-twitter"></span></a>
                    <?php } ?>
                    <?php if ($linkedin) { ?>
                        <a title="linkedin link" target="_blank" href="<?php echo $linkedin; ?>"><span class="fab fa-linkedin-in"></span></a>
                    <?php } ?>
                    <?php if ($instagram) { ?>
                        <a title="instagram link" target="_blank" href="<?php echo $instagram; ?>"><span class="fab fa-instagram"></span></a>
                    <?php } ?>
                    <?php if ($youtube) { ?>
                        <a title="youtube link" target="_blank" href="<?php echo $youtube; ?>"><span class="fab fa-youtube"></span></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-8">
                <div class="grid">
                    <div class="col-6 col-sm-6 col-md-4">
                        <p class="menuTitle"><?php echo $menu_title_1; ?></p>
                        <?php
                        $args = array('menu'=>'Footer1','menu_class'=>'FooterMenu');
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <p class="menuTitle"><?php echo $menu_title_2; ?></p>
                        <?php
                        $args = array('menu'=>'Footer2','menu_class'=>'FooterMenu');
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4">
                        <p class="menuTitle"><?php echo $menu_title_3; ?></p>
                        <?php
                        $args = array('menu'=>'Footer3','menu_class'=>'FooterMenu');
                        wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footerCopyFluid">
    <div class="container">
        <div class="grid">
            <div class="col-sm-8">
                <?php
                $args = array('menu'=>'Copyright','menu_class'=>'copyrightmenu');
                wp_nav_menu($args);
                ?>
            </div>
            <div class="col-sm-4">
                <p class="copyRightText">&copy;
                    <?php echo date('Y'); ?>
                    <?php echo $copyright; ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer();