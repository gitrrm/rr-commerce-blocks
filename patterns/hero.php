<?php
/**
 * Title: RR Commerce Hero
 * Slug: rr-commerce-blocks/hero
 * Categories: featured, banner
 * Inserter: true
 * Description: A clean, conversion-focused hero section for WooCommerce stores.
 */
?>

<!-- wp:cover {"dimRatio":0,"minHeight":520,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-primary-background-color has-background" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px;min-height:520px">

	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"},"style":{"spacing":{"blockGap":"20px"}}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1px"}}, "textColor":"secondary"} -->
			<p class="has-text-align-center has-secondary-color has-text-color" style="font-size:14px;font-weight:600;letter-spacing:1px;text-transform:uppercase">
				Discover something you'll love
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(42px,6vw,72px)","fontWeight":"700","lineHeight":"1.05"}},"textColor":"secondary"} -->
			<h1 class="wp-block-heading has-text-align-center has-secondary-color has-text-color" style="font-size:clamp(42px,6vw,72px);font-weight:700;line-height:1.05">
				Shop with confidence.
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":"1.6"}},"textColor":"secondary"} -->
			<p class="has-text-align-center has-secondary-color has-text-color" style="font-size:18px;line-height:1.6">
				Quality products, simple shopping and a seamless experience.
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"16px"}}}} -->
			<div class="wp-block-buttons" style="margin-top:16px">

				<!-- wp:button {"backgroundColor":"accent","textColor":"secondary","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link has-secondary-color has-accent-background-color has-text-color has-background wp-element-button" href="/shop/" style="border-radius:8px;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px">
						Shop Now
					</a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->