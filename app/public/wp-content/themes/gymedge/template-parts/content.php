<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<article class="margin-bottom-75px" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-header">
					<?php if ( has_post_thumbnail() ): ?>
						<a class="circular-image-link" href="<?php the_permalink();?>"><?php the_post_thumbnail( 'gymedge-size2' );?></a>
					<?php endif; ?>
				</div>
				<div class="entry-summary">
					<h3 class="large-header margin-bottom-20px">
						<a class="black" href="<?php the_permalink();?>"><?php the_title();?>
						</a>
					</h3>
					<div class="blog-para">
						<?php the_excerpt();?>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>