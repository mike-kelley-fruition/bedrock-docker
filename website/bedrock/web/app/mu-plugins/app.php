<?php
/**
 * Load modules
 */


/**
 * Require all of our CPTs
 */
foreach (glob(dirname(__FILE__) ."/app/post-types/*.php") as $filename) {
    require_once $filename;
}

/**
 * Require all of our options files
 */
require_once dirname(__FILE__) . '/app/options/theme.php';
require_once dirname(__FILE__) . '/app/options/header.php';
require_once dirname(__FILE__) . '/app/options/footer.php';
require_once dirname(__FILE__) . '/app/options/contact.php';
require_once dirname(__FILE__) . '/app/options/social.php';
require_once dirname(__FILE__) . '/app/options/404.php';
require_once dirname(__FILE__) . '/app/options/alerts.php';
require_once dirname(__FILE__) . '/app/options/blocks.php';
require_once dirname(__FILE__) . '/app/options/coreblocks.php';


/**
 * Place ACF JSON in field-groups directory
 */
add_filter(
    'acf/settings/save_json',
    function ($path) {
        return dirname(__FILE__) . '/app/field-groups';
    }
);

add_filter(
    'acf/settings/load_json',
    function ($paths) {
        unset($paths[0]);
        $paths[] = dirname(__FILE__) . '/app/field-groups';
        return $paths;
    }
);