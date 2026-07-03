<?php
/**
 * Footer pattern.
 *
 * @package StarterPress
 */

return array(
	'title'       => __( 'پاورقی', 'starterpress' ),
	'description' => __( 'پاورقی چندستونی با اطلاعات سایت، ناوبری و حق نشر.', 'starterpress' ),
	'categories'  => array( 'starterpress', 'footer' ),
	'keywords'    => array( 'پاورقی', 'فوتر', 'ستون', 'ناوبری', 'footer' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|foreground","text":"var:preset|color|background"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="color:var(--wp--preset--color--background);background-color:var(--wp--preset--color--foreground);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:site-title {"level":2} /-->
			<!-- wp:site-tagline /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size">پیوندها</h3>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size">درباره</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">StarterPress — یک قالب مدرن Full Site Editing وردپرس اثر محمد خدایی.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">قدرت گرفته از وردپرس · قالب StarterPress</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
