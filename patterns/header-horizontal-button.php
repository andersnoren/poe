<?php
/**
 * Title: Header with site title, menu, and a button.
 * Slug: poe/header-horizontal-button
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

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground"} -->
				<div class="wp-block-button"><a
						class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background">Say
						Hi</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->