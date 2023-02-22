<?php
/**
 * Title: Footer with site title, theme credit and social icons. This is the default footer in the theme.
 * Slug: poe/footer-horizontal
 * Categories: poe-footer
 */
?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">© 2023</p>
				<!-- /wp:paragraph -->

				<!-- wp:site-title {"level":0,"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size">Theme by <a
					href="https://andersnoren.se">Anders Norén</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"inherit","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->