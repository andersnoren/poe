<?php
/**
 * Title: Full width footer with a call to action, site title, theme credit, and social icons.
 * Slug: poe/footer-cta
 * Categories: poe-footer
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:group {"align":"full","backgroundColor":"quaternary"} -->
	<div class="wp-block-group alignfull has-quaternary-background-color has-background">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"64px","top":"64px"}}}} -->
				<div class="wp-block-columns" style="padding-top:64px;padding-bottom:64px">
					<!-- wp:column -->
					<div class="wp-block-column"></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"1em"}}}} -->
						<h2 style="margin-bottom:1em">We want to work with you! Get in touch for an estimate.</h2>
						<!-- /wp:heading -->

						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a class="wp-block-button__link">Reach out</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2em","padding":{"bottom":"32px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide" style="padding-bottom:32px">
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
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->