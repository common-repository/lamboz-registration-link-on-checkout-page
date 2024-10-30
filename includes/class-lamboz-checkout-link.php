<?php
/**
 * Check if WooCommerce is active
 **/


if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
	add_action('woocommerce_before_checkout_form', 'LRLWC_custom_registration_link'); 
	function LRLWC_custom_registration_link()
	{
		$lrlwc_registration_link = get_option('lrlwc_registration_link');
		$lrlwc_registration_title = get_option('lrlwc_registration_title');
		$lrlwc_registration_question = get_option('lrlwc_registration_question');
		if(is_checkout()){
			if (!is_user_logged_in()){ 
				$lamboz_info_message = apply_filters( 'woocommerce_checkout_login_message', __( $lrlwc_registration_title, 'woocommerce' ) ); 
				$lamboz_info_message .= '<a href="'.$lrlwc_registration_link.'/?redirect_to='.site_url().'/checkout/">' . __( $lrlwc_registration_question , 'woocommerce' ) . '</a>';
				$result =  wc_print_notice( $lamboz_info_message, 'notice' ); 
				return $result;
			} 
		} 
	}
}
else{
	function LRLWC_admin_error_notice() {
		$class = 'notice notice-error';
		$message = __( 'Warning <b>Lamboz Registration Link On Checkout Page</b> Plugin required WooCommerce Plugin. Please activate WooCommerce plugin or deactive <b>Lamboz Registration Link On Checkout Page </b> Plugin', 'LRLWC' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), ( $message ) ); 
	}
	add_action( 'admin_notices', 'LRLWC_admin_error_notice' );
}

?>