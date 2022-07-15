<?php
/**
 * Title: Header with site title and menu, stacked on all screen sizes.
 * Slug: poe/header-horizontal-stacked
 * Categories: poe-header
 */
?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
	<div class="wp-block-columns alignwide is-not-stacked-on-mobile">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:site-title {"fontSize":"medium"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:navigation {"openSubmenusOnClick":true,"overlayMenu":"never","__unstableLocation":"primary","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.25em"}}} -->

			<!-- wp:navigation-link {"label":"Work","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->