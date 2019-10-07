<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;
add_action('woocommerce_before_single_product','bioferm_wrapper_product_start', 5);
function bioferm_wrapper_product_start(){
    ?>
    <div class="startshop-item">
    <?php woocommerce_template_single_title();
//          woocommerce_show_product_sale_flash() ;
}


add_action('woocommerce_single_product_summary','bioferm_wrapper_products', 10);
function bioferm_wrapper_products(){
    ?>
     <?php woocommerce_show_product_images() ?>
    <div class="startshop-item-detail">
    <?php
//    woocommerce_template_single_rating();
          woocommerce_template_single_price();
          woocommerce_template_single_add_to_cart();
          woocommerce_template_single_excerpt();?>
    </div>
<?php
}


add_action('woocommerce_after_single_product','bioferm_wrapper_product_end', 5);
function bioferm_wrapper_product_end(){
    ?>
    </div>
    <?php
}