<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
add_filter( 'woocommerce_form_field_args', 'bioferm_woocommerce_custom_checkout_fields' );
function bioferm_woocommerce_custom_checkout_fields( $fields ) {
    $fields['input_class'] = array( 'form-control' , 'margin-bottom-md');
    return $fields;
}
add_filter( 'woocommerce_default_address_fields', 'bioferm_woocommerce_custom_checkout_default_fields' );
function bioferm_woocommerce_custom_checkout_default_fields($fields){
    $fields['address_2']['label'] = 'Квартира, дом';
    return $fields;
}
add_filter( 'woocommerce_billing_fields', 'bioferm_woocommerce_custom_checkout_billing_fields', 10, 2 );
function bioferm_woocommerce_custom_checkout_billing_fields( $address_fields, $country ) {
    $address_fields['billing_first_name']['class'] = array( 'col-md-4' );
    $address_fields['billing_last_name']['class'] = array( 'col-md-5' );
    $address_fields['billing_address_1']['class'] = array( 'col-md-5' );
    $address_fields['billing_address_2']['class'] = array( 'col-md-5' );
    $address_fields['billing_company'] ['class']  = array( 'col-md-5');
    $address_fields['billing_city']['class']      = array( 'row col-md-5' );
    $address_fields['billing_state']['class']     = array( 'row col-md-5' );
    $address_fields['billing_postcode']['class']  = array( 'row col-md-5' );
    $address_fields['billing_phone']['class']     = array( 'col-md-5' );
    $address_fields['billing_email']['class']     = array( 'col-md-5' );
    $address_fields['billing_country']['class']   = array( 'col-md-5 display-disabled' );
    return $address_fields;
}

add_action( 'woocommerce_before_checkout_form', 'bioferm_checkout_form_start' );
function bioferm_checkout_form_start(){
    ?>
    <div class="row">
    <?php
}
add_action( 'woocommerce_after_checkout_form', 'bioferm_checkout_form_close' );
function bioferm_checkout_form_close(){
    ?>
    </div>
    <?php
}
add_action( 'woocommerce_checkout_before_customer_details', 'bioferm_customer_details_start' );
function bioferm_customer_details_start(){
    ?>
    <div class="col-md-7 payment-details-box">
    <?php
}
add_action( 'woocommerce_checkout_after_customer_details', 'bioferm_customer_details_close' );
function bioferm_customer_details_close(){
    ?>
    </div>
    <?php
}
add_action( 'woocommerce_checkout_before_order_review_heading', 'bioferm_order_review_start' );
function bioferm_order_review_start(){
    ?>
    <div class="col-md-4 your-order-total your-order-total-bg">
    <?php
}
add_action( 'woocommerce_checkout_after_order_review', 'bioferm_order_review_close' );
function bioferm_order_review_close(){
    ?>
    </div>
    <?php
}