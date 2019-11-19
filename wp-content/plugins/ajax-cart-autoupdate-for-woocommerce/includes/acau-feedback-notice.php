<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

// Create feedback notice class.
class acau_notice {

	public function __construct() {
		
		$this->dismiss_notice = get_option( 'acau_dismiss_notice', false );
		
		if ( is_admin() ) {
			// Display a notice encouraging to rate the plugin.
			add_action('admin_notices', [ $this, 'acau_feedback_notice' ] );
			// Make sure that the notice won't show up again if dismissed.
			add_action('wp_ajax_acau_notice_dismiss', [ $this, 'acau_notice_dismiss' ] );
			// Style the notice only if not dismissed, @media can't be used inline.
			add_action( 'admin_head', [ $this, 'acau_notice_style' ] );
		}		
	
	}
	
	public function acau_feedback_notice() {
		
		// Return if already dismissed.
		if ( $this->dismiss_notice ) return false;
		
		$now = time();
		
		// Previous plugin versions didn't store the date of first activation.
		// Make sure that the notice is displayed at least 7 days after the first plugin release with this notice.	
		if ( $now < strtotime( '2019-08-12 08:00:00' ) ) return false;
		
		// Plugin used at least 7 days.
		$activate_time = get_option( 'acau_first_activate', false);			
		if ( $activate_time != false ) {										
			if ( ( $now - $activate_time ) / 86400 < 7 ) return false;
		}	
		
		?>         

		<script type='text/javascript'>
			jQuery(function($){
				$(document).on( 'click', '#acau_notice_container a', function() {
					var data = {
						action: 'acau_notice_dismiss'                           
					};
					$.post(ajaxurl, data, function(response ) {
						$('#acau_notice_container').fadeOut('slow');
					});
				});
			});
		</script>
		
		<?php
	
		printf ('<div id = "acau_notice_container" class="updated">
					<div style="width:fit-content">
						<p style="margin-bottom:2px; padding:0; line-height:20px">
							Excellent! You\'ve been using <strong>Ajax Cart AutoUpdate for WooCommerce</strong> for more than 1 week. May I ask you to spread the word and kindly rate it on WordPress.org?
						</p>
						<p style="margin:0; padding:0; line-height:20px">
							~ Ryszard Jędraszyk, the plugin\'s author
						</p>
						<p style="line-height:20px; margin-bottom:4px">
							<a href="%s" target="_blank">Ok, you deserved it</a>
							&nbsp;&nbsp;&nbsp;
							<a href="#">I already did</a>
							&nbsp;&nbsp;&nbsp;
							<a href="#">Not good enough</a>
							<span id="acau_notice_span">* This notice will never show up again once any option is selected.</span>
						</p>
					</div>
				</div>',
				'https://wordpress.org/support/plugin/ajax-cart-autoupdate-for-woocommerce/reviews/?rate=5#new-post'					
				
		);		

	}
	
	public function acau_notice_dismiss() {		
		update_option( 'acau_dismiss_notice', true );	
		wp_die();
	}
	
	public function acau_notice_style() {
		
		// Return if already dismissed.
		if ( $this->dismiss_notice ) return;
		
		$my_style = "
		#acau_notice_container {
			padding: 0 5px;
			background: #fff6de;
			border: 1px solid;
			border-color: #2fb53b;
			box-shadow: none;
		}
		#acau_notice_span {			
			white-space: nowrap;
			font-size: 10px;			
		}
		@media (min-width: 768px) {
			#acau_notice_span {
				float: right;
			}
			#acau_notice_container {
				padding: 0 12px;
			}
		}
		";
		
		echo '<style>' . $my_style . '</style>';
	}
	
}

new acau_notice();