<?php
/**
 * FAQ pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'پرسش‌های متداول', 'starterpress' ),
	'description' => __( 'پرسش‌های متداول با عناصر باز/بسته‌شونده.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'text' ),
	'keywords'    => array( 'پرسش', 'سوال', 'متداول', 'آکاردئون', 'faq' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">پرسش‌های متداول</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:details -->
		<details class="wp-block-details"><summary>ویرایش کامل سایت (FSE) چیست؟</summary><!-- wp:paragraph -->
		<p>ویرایش کامل سایت (FSE) به شما امکان می‌دهد همه بخش‌های سایت — سربرگ، پاورقی، قالب‌ها و بیشتر — را با ویرایشگر بلوک وردپرس سفارشی کنید.</p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary>آیا StarterPress به افزونه نیاز دارد؟</summary><!-- wp:paragraph -->
		<p>خیر. StarterPress به‌صورت پیش‌فرض کار می‌کند. پشتیبانی از WooCommerce داخلی اما اختیاری است.</p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary>آیا قالب آماده ترجمه است؟</summary><!-- wp:paragraph -->
		<p>بله. تمام رشته‌های قابل‌نمایش در توابع ترجمه قرار گرفته‌اند و فایل POT در پوشه languages موجود است.</p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details -->
		<details class="wp-block-details"><summary>آیا می‌توانم از StarterPress برای پروژه‌های تجاری استفاده کنم؟</summary><!-- wp:paragraph -->
		<p>بله. StarterPress تحت مجوز GPL v2 یا جدیدتر منتشر شده که استفاده تجاری را مجاز می‌داند.</p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
