<div id="navDesktop">
    <div class="container">
        <div class="grid align-center grid-bleed">
            <div class="col-sm-3">
                <a title="primary logo" href="/">
                    <img class="flex-img mainLogo " src="<?php echo get_template_directory_uri(); ?>/images/svg/logo.svg" alt="Denver Airport Logo">
                </a>
            </div>
            <div class="col-sm-9 headerRight">
                <form role="search" method="get" class="searchForm" action="/">
                    <label for="s" class="screen-reader-text">Search</label>
                    <input type="search" name="s" id="s" class="search-field" placeholder="Search">
                    <button title="site search button" type="search"><span class="fa-regular fa-magnifying-glass"></span></button>
                </form>
                <a class="careersLink" href="#">Careers</a>
                <a class="mainCTA cta1" href="#">Contact</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-bleed">
            <div class="col-sm-12">
                <?php
                $args = array(
                    'menu'=>'Desktop',
                    'theme_location'   => "primary",
                    'menu_class'=>'main-navigation',
                    'walker' => new fluent_themes_custom_walker_nav_menu
                );
                wp_nav_menu($args); ?>
            </div>
        </div>
    </div>
</div>