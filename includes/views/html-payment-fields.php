<?php
/** @var WC_PPP_Brasil_Gateway $this */

// Exit if not in WordPress.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$error      = false;
$data       = null;
$data_error = null;

try {
	$data = $this->get_posted_data();
} catch ( Exception $ex ) {
	$error = $ex->getMessage();
	wc_add_notice( $error );
	if ( $ex->data ) {
		$data_error = $ex->data;
	}
}
?>
<div id="wc-ppb-brasil-wrappers">
	<?php if ( $error ): ?>
        <p><?php echo $error; ?></p>
        <input type="hidden" id="wc-ppp-brasil-api-error-data" name="wc-ppp-brasil-data"
               value="<?php echo htmlentities( json_encode( $data_error ) ); ?>">
	<?php else: ?>
        <input type="hidden" id="wc-ppp-brasil-data" name="wc-ppp-brasil-data"
               value="<?php echo htmlentities( json_encode( $data ) ); ?>">
        <input type="hidden" id="wc-ppp-brasil-response" name="wc-ppp-brasil-response" value="">
        <input type="hidden" id="wc-ppp-brasil-error" name="wc-ppp-brasil-error" value="">
        <div id="wc-ppp-brasil-container-loading" class="hidden">
            <div class="paypal-loading"></div>
        </div>
        <div id="wc-ppp-brasil-container-dummy" class="hidden">
			<?php include 'html-paypal-iframe.php'; ?>
        </div>
        <div id="wc-ppp-brasil-container"></div>
        <div id="wc-ppb-brasil-container-overlay" class="hidden">
            <div class="icon-lock"></div>
            <div class="text">
                <p><?php _e( 'Favor preencher corretamente as informações dos passos anteriores.', 'ppp-brasil' ); ?></p>
                <p><?php _e( 'Caso já tenha preenchido, <a href="#" data-action="update-checkout">clique aqui</a>.', 'ppp-brasil' ); ?></p>
            </div>
        </div>
	<?php endif; ?>
</div>