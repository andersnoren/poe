<?php
/**
 * Title: Header with site title, menu, and social icons.
 * Slug: poe/header-horizontal-social
 * Categories: poe-header
 */
?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"fontSize":"medium"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"__unstableLocation":"primary","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"1.5em"}}} -->

			<!-- wp:navigation-link {"label":"Work","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- /wp:navigation -->

			<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"inherit","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":{"top":"0.75em","left":"0.75em"}}}} -->
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
</div>
<!-- /wp:group -->