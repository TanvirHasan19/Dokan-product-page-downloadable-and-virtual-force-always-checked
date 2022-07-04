/**
 * Dokan product page downloadable and virtual force always checked 
 */ 
function dokan_product_page_downloadable_virtual_checkbox_force_checked() {
	if ( is_user_logged_in() && function_exists( 'dokan_is_seller_dashboard' ) && dokan_is_seller_dashboard() ) {
	?>
	<script>
		(function($) {
			var Dokan_Product_Virtual_Download_Checkbox_Customized = {
				init: function() {
					$('.downloadable-checkbox ._is_downloadable').prop('checked', true);
					$('.virtual-checkbox ._is_virtual').prop('checked', true);
				},
			};
			
			$(function() {
				Dokan_Product_Virtual_Download_Checkbox_Customized.init();
		 	});													 
		})(jQuery);	
	</script>
	<?php
	}
}
add_action( 'wp_footer', 'dokan_product_page_downloadable_virtual_checkbox_force_checked' );
