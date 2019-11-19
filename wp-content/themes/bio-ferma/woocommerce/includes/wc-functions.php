<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
add_action('woocommerce_before_main_content', 'bioferm_add_breadcrumb', 20);
function bioferm_add_breadcrumb(){
    ?>
    <div class="content_section">
    <?php woocommerce_breadcrumb(); ?>

<?php
}

add_action('woocommerce_after_main_content', 'bioferm_add_before_footer', 20);
function bioferm_add_before_footer(){
    ?>
            </div>
        </div>
    </div>
<?php
}

add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {

    $currencies['UAH'] = __( 'Українська гривня', 'woocommerce' );

    return $currencies;

}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {

    switch( $currency ) {

        case 'UAH': $currency_symbol = 'грн.'; break;

    }

    return $currency_symbol;

}

add_filter('woocommerce_variable_price_html', 'custom_variation_price_default', 10, 2);
add_filter('woocommerce_variable_sale_price_html', 'custom_variation_price_default', 10, 2 );
//Отображение цены вариации по умолчанию
function custom_variation_price_default( $price, $product ) {
    foreach($product->get_available_variations() as $pav){
        $def=true;
        foreach($product->get_variation_default_attributes() as $defkey=>$defval){
            if($pav['attributes']['attribute_'.$defkey]!=$defval){
                $def=false;
            }
        }
        if($def){
            $price = $pav['display_price'];
        }
    }

    return woocommerce_price($price);
}

add_action( 'woocommerce_before_single_product', 'check_if_variable_first' );
function check_if_variable_first(){
    if ( is_product() ) {
        global $post;
        $product = wc_get_product( $post->ID );
        if ( $product->is_type( 'variable' ) ) {
            // removing the price of variable products
            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

// Change location of
            add_action( 'woocommerce_single_product_summary', 'custom_wc_template_single_price', 10 );
            function custom_wc_template_single_price(){
                global $product;

// Variable product only
                if($product->is_type('variable')):

                    // Main Price
                    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
                    $price = $prices[0] !== $prices[1] ? sprintf( __( 'От: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

                    // Sale Price
                    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
                    sort( $prices );
                    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( 'От: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

                    if ( $price !== $saleprice && $product->is_on_sale() ) {
                        $price = '<del>' . $saleprice . $product->get_price_suffix() . '</del> <ins>' . $price . $product->get_price_suffix() . '</ins>';
                    }

                    ?>
                    <style>
                        div.woocommerce-variation-price,
                        div.woocommerce-variation-availability,
                        div.hidden-variable-price {
                            height: 0px !important;
                            overflow:hidden;
                            position:relative;
                            line-height: 0px !important;
                            font-size: 0% !important;
                        }
                    </style>
                    <script>
                        jQuery(document).ready(function($) {
                            $('select').blur( function(){
                                if( '' != $('input.variation_id').val() ){
                                    $('p.price').html($('div.woocommerce-variation-price > span.price').html()).append('<p class="availability">'+$('div.woocommerce-variation-availability').html()+'</p>');
                                    console.log($('input.variation_id').val());
                                } else {
                                    $('p.price').html($('div.hidden-variable-price').html());
                                    if($('p.availability'))
                                        $('p.availability').remove();
                                    console.log('NULL');
                                }
                            });
                        });
                    </script>
                    <?php

//                    echo '<p class="price">'.$price.'</p>
//    <div class="hidden-variable-price" >'.$price.'</div>';

                endif;
            }

        }
    }
}



