<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide">
	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"100","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:post-date {"textAlign":"right","isLink":true,"fontSize":"large"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignwide is-style-wide" />
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide" />
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","bottom":"1em"}}}} -->
				<div class="wp-block-group" style="padding-top:1em;padding-bottom:1em">
					<!-- wp:query-pagination {"paginationArrow":"arrow"} -->
					<!-- wp:query-pagination-previous {"fontSize":"large"} /-->

					<!-- wp:query-pagination-next {"fontSize":"large"} /-->
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