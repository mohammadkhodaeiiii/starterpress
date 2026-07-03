<?php
/**
 * Hero pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'قهرمان (Hero)', 'starterpress' ),
	'description' => __( 'بخش قهرمان تمام‌عرض با عنوان، توضیح و دکمه‌های فراخوان به اقدام.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'banner' ),
	'keywords'    => array( 'قهرمان', 'هیرو', 'بنر', 'فراخوان', 'hero', 'banner', 'cta' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"color":{"gradient":"var:preset|gradient|primary-to-secondary"}},"textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-foreground-color has-text-color" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30);background:var(--wp--preset--gradient--primary-to-secondary)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size">با StarterPress وب‌سایت‌های زیبا بسازید</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">یک قالب سبک و مدرن Full Site Editing با تمرکز بر کارایی، دسترس‌پذیری و معماری تمیز.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">شروع کنید</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">بیشتر بدانید</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
