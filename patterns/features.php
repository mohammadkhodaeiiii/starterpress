<?php
/**
 * Features pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'ویژگی‌ها', 'starterpress' ),
	'description' => __( 'شبکه سه‌ستونی ویژگی‌ها همراه با آیکون و توضیحات.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'featured' ),
	'keywords'    => array( 'ویژگی‌ها', 'شبکه', 'ستون', 'features', 'grid' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">چرا StarterPress؟</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
	<p class="has-text-align-center has-muted-foreground-color has-text-color">هر آنچه برای راه‌اندازی یک سایت سریع، دسترس‌پذیر و توسعه‌پذیر نیاز دارید.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">⚡ کارایی بالا</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>کمترین حجم CSS و JavaScript با بارگذاری شرطی برای Core Web Vitals عالی.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">♿ دسترس‌پذیری</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>سازگار با WCAG 2.2 AA با لینک پرش، حالت فوکوس، برچسب‌های ARIA و ناوبری با صفحه‌کلید.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">🔧 توسعه‌پذیر</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>معماری SOLID با PSR-4 autoloading — آماده افزودن ماژول‌های Pro بدون تغییر هسته.</p>
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
