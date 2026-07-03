<?php
/**
 * Call to action pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'فراخوان به اقدام', 'starterpress' ),
	'description' => __( 'بنر برجسته فراخوان به اقدام با عنوان و دکمه.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'call-to-action' ),
	'keywords'    => array( 'فراخوان', 'بنر', 'اقدام', 'cta', 'banner' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"color":{"gradient":"var:preset|gradient|primary-to-secondary"}},"textColor":"primary-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-foreground-color has-text-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30);background:var(--wp--preset--gradient--primary-to-secondary)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">آماده شروع هستید؟</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">همین امروز StarterPress را دانلود کنید و پروژه وردپرس بعدی خود را با اطمینان بسازید.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">همین حالا دانلود کنید</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
