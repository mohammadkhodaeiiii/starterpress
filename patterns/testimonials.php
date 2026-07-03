<?php
/**
 * Testimonials pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'نظرات مشتریان', 'starterpress' ),
	'description' => __( 'نظرات مشتریان در چیدمان سه‌ستونی.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'testimonials' ),
	'keywords'    => array( 'نظرات', 'دیدگاه', 'مشتریان', 'testimonials', 'reviews' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"color":{"background":"var:preset|color|muted"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--muted);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">مردم چه می‌گویند</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:quote -->
				<blockquote class="wp-block-quote"><p>StarterPress تمیزترین قالب استارتر بلوکی است که استفاده کرده‌ام. امتیاز کارایی از همان ابتدا عالی است.</p><cite>سارا جانسون، توسعه‌دهنده</cite></blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:quote -->
				<blockquote class="wp-block-quote"><p>امکانات دسترس‌پذیری در سطح عالی است. لینک پرش، حالت فوکوس و پشتیبانی ARIA از روز اول وجود دارد.</p><cite>الکس چن، مشاور دسترس‌پذیری</cite></blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:quote -->
				<blockquote class="wp-block-quote"><p>پایه‌ای عالی برای پروژه‌های مشتری. معماری SOLID توسعه آن را ساده می‌کند.</p><cite>ماریا گارسیا، مدیر آژانس</cite></blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
