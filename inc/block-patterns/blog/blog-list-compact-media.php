<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide">
	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"100","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center">
				<!-- wp:column {"width":"150px"} -->
				<div class="wp-block-column" style="flex-basis:150px">
					<!-- wp:post-featured-image {"isLink":true,"width":"","height":"150px"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:post-date {"textAlign":"left","isLink":true,"fontSize":"large"} /-->
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
			<!-- wp:query-pagination {"align":"wide","className":"alignwide is-style-default"} -->
			<div class="wp-block-query-pagination alignwide is-style-default">
				<!-- wp:query-pagination-previous {"fontSize":"large"} /-->

				<!-- wp:query-pagination-next {"fontSize":"large"} /-->
			</div>
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->