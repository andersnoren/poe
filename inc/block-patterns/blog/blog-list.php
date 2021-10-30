<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide">
	<!-- wp:query {"queryId":1,"query":{"perPage":"10","pages":"100","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide" />
		<!-- /wp:separator -->

		<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"2em","bottom":"2em"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:2em;margin-bottom:2em">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:columns {"style":{"spacing":{"blockGap":"0.33em"}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:post-date {"isLink":true,"textColor":"secondary","fontSize":"heading-6"} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"75%"} -->
					<div class="wp-block-column" style="flex-basis:75%">
						<!-- wp:post-title {"isLink":true,"fontSize":"heading-6"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"2em"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2em">
				<!-- wp:paragraph {"align":"right","textColor":"primary","fontSize":"heading-6"} -->
				<p class="has-text-align-right has-primary-color has-text-color has-heading-6-font-size">⟶</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"3em"}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group" style="padding-top:3em">
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide" />
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
				<div class="wp-block-group" style="padding-top:1em;padding-bottom:1em">
					<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous {"fontSize":"heading-6"} /-->

					<!-- wp:query-pagination-next {"fontSize":"heading-6"} /-->
					<!-- /wp:query-pagination -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide" />
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->