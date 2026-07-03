<?php
/**
 * Latest posts pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'آخرین نوشته‌ها', 'starterpress' ),
	'description' => __( 'شبکه‌ای از آخرین نوشته‌های وبلاگ.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'query' ),
	'keywords'    => array( 'وبلاگ', 'نوشته', 'آخرین', 'اخبار', 'latest', 'posts' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">آخرین مطالب وبلاگ</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"var:custom|radius|medium"}}} /-->
				<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
				<!-- wp:post-date {"fontSize":"small","textColor":"muted-foreground"} /-->
				<!-- wp:post-excerpt {"moreText":"ادامه مطلب","excerptLength":15} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">هنوز نوشته‌ای منتشر نشده است.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->',
);
