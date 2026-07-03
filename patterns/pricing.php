<?php
/**
 * Pricing pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'قیمت‌گذاری', 'starterpress' ),
	'description' => __( 'جدول قیمت‌گذاری سه‌سطحی با یک پلن برجسته.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'call-to-action' ),
	'keywords'    => array( 'قیمت', 'پلن', 'جدول', 'pricing', 'plans' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">قیمت‌گذاری ساده</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted-foreground"} -->
	<p class="has-text-align-center has-muted-foreground-color has-text-color">پلنی را که با پروژه شما هماهنگ است انتخاب کنید.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"textAlign":"center"} -->
				<h3 class="wp-block-heading has-text-align-center">شروع</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
				<p class="has-text-align-center has-xx-large-font-size"><strong>رایگان</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list"><li>ویرایش کامل سایت (FSE)</li><li>الگوهای بلوکی</li><li>تنوع استایل‌ها</li><li>پشتیبانی انجمن</li></ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">دانلود</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card starterpress-pricing-featured","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card starterpress-pricing-featured" data-badge="محبوب">
				<!-- wp:heading {"level":3,"textAlign":"center"} -->
				<h3 class="wp-block-heading has-text-align-center">حرفه‌ای</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
				<p class="has-text-align-center has-xx-large-font-size"><strong>۴۹۰ هزار تومان</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list"><li>تمام امکانات پلن شروع</li><li>سازنده سربرگ</li><li>مگامنو</li><li>الگوهای ویژه</li><li>پشتیبانی اولویت‌دار</li></ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">دریافت نسخه حرفه‌ای</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"textAlign":"center"} -->
				<h3 class="wp-block-heading has-text-align-center">آژانس</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","fontSize":"xx-large"} -->
				<p class="has-text-align-center has-xx-large-font-size"><strong>۹۹۰ هزار تومان</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list"><li>تمام امکانات نسخه حرفه‌ای</li><li>برچسب سفید (White-label)</li><li>سایت‌های نامحدود</li><li>ماژول‌های سفارشی</li><li>پشتیبانی اختصاصی</li></ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">تماس با ما</a></div>
				<!-- /wp:button --></div>
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
