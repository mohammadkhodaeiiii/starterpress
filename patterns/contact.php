<?php
/**
 * Contact pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'تماس با ما', 'starterpress' ),
	'description' => __( 'بخش تماس با جزئیات ارتباطی و جایگاه فرم.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'contact' ),
	'keywords'    => array( 'تماس', 'فرم', 'ایمیل', 'contact' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">با ما در تماس باشید</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">اطلاعات تماس</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><strong>ایمیل:</strong> hello@example.com</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>تلفن:</strong> ۰۲۱-۱۲۳۴۵۶۷۸</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>آدرس:</strong> تهران، خیابان اصلی، پلاک ۱۲۳</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph -->
				<p>یک افزونه فرم تماس (مثل WPForms یا Contact Form 7) نصب کنید و بلوک فرم را اینجا قرار دهید.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">ارسال پیام</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
