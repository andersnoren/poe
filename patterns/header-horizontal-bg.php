<?php
/**
 * Title: The default header with a background color.
 * Slug: poe/header-horizontal-bg
 * Categories: poe-header
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5vh","bottom":"5vh"}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background"
		style="padding-top:5vh;padding-bottom:5vh">
		<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">

				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:site-title {"fontSize":"medium"} /-->

					<!-- wp:navigation {":"primary","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"1.5em"}}} -->

					<!-- wp:navigation-link {"label":"Work","url":"#","kind":"custom","isTopLevelLink":true} /-->

					<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

					<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->