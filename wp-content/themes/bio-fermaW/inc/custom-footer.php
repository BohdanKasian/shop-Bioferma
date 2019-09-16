<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'bio_ferma_footer_parts', 'bio_ferma_footer_contacts', 10);
function bio_ferma_footer_contacts(){
    get_template_part( 'template-parts/footer/footer-contacts');

}

add_action( 'bio_ferma_footer_parts', 'bio_ferma_footer_ascroll', 20);
function bio_ferma_footer_ascroll(){
    get_template_part( 'template-parts/footer/footer-ascroll');
}
