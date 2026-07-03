<?php
/**
 * Team pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'تیم', 'starterpress' ),
	'description' => __( 'شبکه اعضای تیم با نام و سمت.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'team' ),
	'keywords'    => array( 'تیم', 'اعضا', 'کارکنان', 'team' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">با تیم ما آشنا شوید</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
				<p class="has-text-align-center has-xx-large-font-size">👤</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-text-align-center has-large-font-size">محمد خدایی</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
				<p class="has-text-align-center has-muted-foreground-color has-text-color">معمار قالب</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
				<p class="has-text-align-center has-xx-large-font-size">👤</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-text-align-center has-large-font-size">ژین اسمیت</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
				<p class="has-text-align-center has-muted-foreground-color has-text-color">توسعه‌دهنده ارشد</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
				<p class="has-text-align-center has-xx-large-font-size">👤</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-text-align-center has-large-font-size">جان دو</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
				<p class="has-text-align-center has-muted-foreground-color has-text-color">طراح تجربه کاربری</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
