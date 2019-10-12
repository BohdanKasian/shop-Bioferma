<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<div class="col-md-5">
<section class="woocommerce-customer-details panel panel-primary ">

    <?php if ( $show_shipping ) : ?>

    <section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses  addresses">
        <div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address ">

            <?php endif; ?>

            <h2 class="woocommerce-column__title payment_methods_thankyou-page panel-heading"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h2>

            <address class="panel-body">
                <ul class="order_details list-group">
                <?php if ( $order->get_billing_first_name() ) : ?>
                    <li class="woocommerce-customer-details--name list-group-item"> <strong>Имя и Фамилия:</strong>
                        <?php echo $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();	?>
                    </li>
                <?php endif; ?>

                <?php if ( $order->get_billing_company() ) : ?>
                    <li class="woocommerce-customer-details--company list-group-item"><strong>Компания:</strong>
                        <?php echo $order->get_billing_company();	?>
                    </li>
                <?php endif; ?>

                <?php if ( $order->get_billing_city() ) : ?>
                    <li class="woocommerce-customer-details--addres list-group-item"><strong>Адрес:</strong>
                        <?php echo $order->get_billing_postcode() . ', ' . $order->get_billing_country() . ', ' . $order->get_billing_state() . ', ' . $order->get_billing_city() . ', ' . $order->get_billing_address_1() . ' ' . $order->get_billing_address_2(); ?>
                    </li>
                <?php endif; ?>

                <?php if ( $order->get_billing_phone() ) : ?>
                    <li class="woocommerce-customer-details--phone list-group-item"><strong>Телефон:</strong><?php echo esc_html( $order->get_billing_phone() ); ?></li>
                <?php endif; ?>

                <?php if ( $order->get_billing_email() ) : ?>
                    <li class="woocommerce-customer-details--email list-group-item"><strong>Ваш e-mail:</strong><?php echo esc_html( $order->get_billing_email() ); ?></li>
                <?php endif; ?>
                </ul>
            </address>

            <?php if ( $show_shipping ) : ?>

        </div><!-- /.col-1 -->

        <div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
            <h2 class="woocommerce-column__title "><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
            <address>
                <?php echo wp_kses_post( $order->get_formatted_shipping_address( __( 'N/A', 'woocommerce' ) ) ); ?>
            </address>
        </div><!-- /.col-2 -->

    </section><!-- /.col2-set -->

<?php endif; ?>

    <?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>