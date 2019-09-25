<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
add_action( 'woocommerce_before_main_content', 'bioferm_add_sidebar_only_archive', 50 );
function bioferm_add_sidebar_only_archive() {
    if ( ! is_product() ) {
        woocommerce_get_sidebar();
    }
}
