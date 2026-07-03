<?php
/**
 * Logo grid pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'شبکه لوگو', 'starterpress' ),
	'description' => __( 'ردیفی از لوگوهای شرکا یا مشتریان.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'featured' ),
	'keywords'    => array( 'لوگو', 'شرکا', 'مشتریان', 'برند', 'logos' ),
	'content'     => '<!-- wp:group {"align":"full","className":"starterpress-logo-grid","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull starterpress-logo-grid" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"small"} -->
	<p class="has-text-align-center has-muted-foreground-color has-text-color has-small-font-size">مورد اعتماد تیم‌ها در سراسر جهان</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
			<p class="has-text-align-center has-x-large-font-size"><strong>برند الف</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
			<p class="has-text-align-center has-x-large-font-size"><strong>برند ب</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
			<p class="has-text-align-center has-x-large-font-size"><strong>برند ج</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
			<p class="has-text-align-center has-x-large-font-size"><strong>برند د</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
