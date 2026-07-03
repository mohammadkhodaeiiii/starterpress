<?php
/**
 * Services pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'خدمات', 'starterpress' ),
	'description' => __( 'بخش خدمات با آیتم‌های شماره‌گذاری‌شده.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'text' ),
	'keywords'    => array( 'خدمات', 'سرویس', 'فهرست', 'services' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"color":{"background":"var:preset|color|muted"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">خدمات ما</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">۰۱ — طراحی وب</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-foreground"} -->
			<p class="has-muted-foreground-color has-text-color">چیدمان‌های زیبا و واکنش‌گرا ساخته‌شده با ویرایشگر بلوک و Full Site Editing.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">۰۲ — توسعه</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-foreground"} -->
			<p class="has-muted-foreground-color has-text-color">کد PHP تمیز و شی‌گرا مطابق استانداردهای کدنویسی وردپرس و PSR-12.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">۰۳ — بهینه‌سازی</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted-foreground"} -->
			<p class="has-muted-foreground-color has-text-color">تنظیم کارایی، ممیزی دسترس‌پذیری و بهینه‌سازی Core Web Vitals.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
