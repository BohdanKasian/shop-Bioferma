<?php
if( ! defined('ABSPATH')){
    exit;
}
/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_all_filters('woocommerce_before_single_product_summary');
remove_all_filters('woocommerce_single_product_summary');
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
//remove_action ('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories');

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
//    unset( $tabs['description'] ); // Отключить вкладку "Описание"
//    unset( $tabs['reviews'] ); // Отключить вкладку "Отзывы"
    unset( $tabs['additional_information'] ); // Отключить вкладку "Свойства"
    return $tabs;
}
