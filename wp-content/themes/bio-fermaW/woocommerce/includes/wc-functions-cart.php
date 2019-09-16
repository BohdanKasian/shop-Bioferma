<?php
if( ! defined('ABSPATH')){
    exit;
}

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
<?php
if ( function_exists( 'bio_ferma_woocommerce_header_cart' ) ) {
bio_ferma_woocommerce_header_cart();
}
?>
 */

if ( ! function_exists( 'bio_ferma_woocommerce_cart_link_fragment' ) ) {
    /**
     * Cart Fragments.
     *
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param array $fragments Fragments to refresh via AJAX.
     * @return array Fragments to refresh via AJAX.
     */
    function bio_ferma_woocommerce_cart_link_fragment( $fragments ) {
        ob_start();
        bio_ferma_woocommerce_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
}
add_filter( 'woocommerce_add_to_cart_fragments', 'bio_ferma_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'bio_ferma_woocommerce_cart_link' ) ) {
    /**
     * Cart Link.
     *
     * Displayed a link to the cart including the number of items present and the cart total.
     *
     * @return void
     */

function bio_ferma_woocommerce_cart_link() {
        ?>
        <a class="cart-contents nodec" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Ваша корзина покупок'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopping.png" alt="" style="max-width:40px;position: absolute;right:0px;">
            <span class="count" ><?php echo wp_kses_data( WC()->cart->get_cart_contents_count()); ?></span>
        </a>
        <?php
    }
}

if ( ! function_exists( 'bio_ferma_woocommerce_header_cart' ) ) {
    /**
     * Display Header Cart.
     *
     * @return void
     */
    function bio_ferma_woocommerce_header_cart() {
        if ( is_cart() ) {
            $class = 'current-menu-item';
        } else {
            $class = '';
        }
        ?>
        <ul id="site-header-cart" class="site-header-cart">
            <li class="<?php echo esc_attr( $class ); ?>">
                <?php bio_ferma_woocommerce_cart_link(); ?>
            </li>
            <li>
                <?php
                $instance = array(
                    'title' => '',
                );

                the_widget( 'WC_Widget_Cart', $instance );
                ?>
            </li>
        </ul>
        <?php
    }
}
