<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */
defined( 'ABSPATH' ) || exit;
if ( $max_value && $min_value === $max_value ) {
    ?>
    <div class="quantity hidden">
        <input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
    </div>
    <?php
} else {
    /* translators: %s: Quantity. */
    $label = !empty($args['product_name']) ? sprintf(esc_html__('%s quantity', 'woocommerce'), wp_strip_all_tags($args['product_name'])) : esc_html__('Quantity', 'woocommerce');
    ?>
    <div class="quantity">
        <label class="screen-reader-text"
               for="<?php echo esc_attr($input_id); ?>"><?php esc_html_e('Quantity', 'woocommerce'); ?></label>
        <input type="button" value="-" class="qty_button minus"/>
        <input
                type="number"
                id="<?php echo esc_attr($input_id); ?>"
                class="input-text qty text"
                step="<?php echo esc_attr($step); ?>"
                min="<?php echo esc_attr($min_value); ?>"
                max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>"
                name="<?php echo esc_attr($input_name); ?>"
                value="<?php echo esc_attr($input_value); ?>"
                title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>"
                size="4"
                pattern="<?php echo esc_attr($pattern); ?>"
                inputmode="<?php echo esc_attr($inputmode); ?>"
                aria-labelledby="<?php echo esc_attr($labelledby); ?>"/>
        <input type="button" value="+" class="qty_button plus"/>
        <?php do_action('woocommerce_after_quantity_input_field'); ?>
    </div>
    <?php
}
// Minimum CSS to remove +/- default buttons on input field type number
add_action( 'wp_head' , 'custom_quantity_fields_css', 100 );
function custom_quantity_fields_css(){
    ?>
    <style>
        .quantity input::-webkit-outer-spin-button,
        .quantity input::-webkit-inner-spin-button {
            display: none;
            margin: 0;
        }
        .quantity input.qty {
            appearance: textfield;
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }
    </style>
    <?php
};
add_action( 'wp_footer' , 'custom_quantity_fields_script', 100 );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
        jQuery( function( $ ) {
            if ( ! String.prototype.getDecimals ) {
                String.prototype.getDecimals = function() {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if ( ! match ) {
                        return 0;
                    }
                    return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
                }
            }
            // Quantity "plus" and "minus" buttons
            $( document.body ).on( 'click', '.plus, .minus', function() {
                var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                    currentVal  = parseFloat( $qty.val() ),
                    max         = parseFloat( $qty.attr( 'max' ) ),
                    min         = parseFloat( $qty.attr( 'min' ) ),
                    step        = $qty.attr( 'step' );
                // Format values
                if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
                if ( max === '' || max === 'NaN' ) max = '';
                if ( min === '' || min === 'NaN' ) min = 0;
                if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;
                // Change the value
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( currentVal >= max ) ) {
                        $qty.val( max );
                    } else {
                        $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                    }
                } else {
                    if ( min && ( currentVal <= min ) ) {
                        $qty.val( min );
                    } else if ( currentVal > 0 ) {
                        $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                    }
                }
                // Trigger change event
                $qty.trigger( 'change' );
            });
        });
    </script>
    <?php
} ?>