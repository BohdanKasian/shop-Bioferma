<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
add_action('woocommerce_before_main_content', 'bioferm_add_breadcrumb', 20);
function bioferm_add_breadcrumb(){
    ?>
    <div class="content_section">
        <div class="wrapper">
    <?php woocommerce_breadcrumb(); ?>

<?php
}

add_action('woocommerce_after_main_content', 'bioferm_add_before_footer', 20);
function bioferm_add_before_footer(){
    ?>          </div>
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

