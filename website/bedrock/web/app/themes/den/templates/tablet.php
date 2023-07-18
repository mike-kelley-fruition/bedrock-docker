<!--Mobile & Tablet Hamburger-->
<div id="navTablet">
    <div class="container">
        <div class="grid align-center grid-bleed">
            <div class="col-3">
                <a title="mobile menu" class="mburger mburger--collapse" href="#menu">
                    <strong></strong>
                    <strong></strong>
                    <strong></strong>
                </a>
            </div>
            <div class="col-6">
                <a title="home page link" href="/">
                    <img class="flex-img mainLogo" src="<?php echo get_template_directory_uri(); ?>/images/svg/logo.svg" alt="Denver Airport Logo">
                </a>
            </div>
            <div class="col-3">
                <!--open mobile-->
            </div>
        </div>
    </div>
</div>

<!-- The Mobile Menu -->
<div class="mobilemenuwrapper">
    <nav id="menu">
        <?php
        $args = array('menu'=>'Desktop');
        wp_nav_menu($args);
        ?>
    </nav>
</div>