<?php
// Layout class
if ( GymEdge::$layout == 'full-width' ) {
	$gym_layout_class = 'col-sm-12 col-xs-12';
}
else{
	$gym_layout_class = 'col-xs-12';
}
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'banner');?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
				<!-- Class info -->
				<div class="instructor-info margin-bottom-50px overflow-hidden">
					<div class="instructor-img image-cropper margin-bottom-20px">
						<?php the_post_thumbnail( $thumb_size );?>
					</div>
					<!-- title  -->
					<h1 class="large-header col-xs-12 col-sm-5 padding-0px margin-0px"><?php the_title();?></h1>

					<!-- Class description -->
					<p class="col-sm-12 padding-0px padding-top-10px details">
						<?php the_excerpt();?>
					</p>

					<!-- Class Highlights Custom Field -->
					<?php if( have_rows('featured_class_highlights') ): ?>
						<div class="col-sm-12 overflow-hidden outline-padding padding-20px margin-bottom-30px margin-top-20px highlights">
							<!-- sub repeater for class items -->
							<ul class="highlights padding-top-20px padding-bottom-20px overflow-hidden">
								<?php while( have_rows('featured_class_highlights') ): the_row();?>
									<li class="col-xs-12 col-sm-4 item">
										<?php the_sub_field('featured_class_highlight_item'); ?>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endif;?>
					<!-- END Class Highlights -->

					<!-- featured class cta -->
					<div class="instructor-ctas padding-0px cta">
						<?php if( get_field('featured_class_cta') ): ?> 
							<a class="text-center button button-purple sign-up" href="<?php the_field('featured_class_cta');?>">
								Sign up
							</a>
						<?php endif;?>
						<!-- Future optional custom field for video preview link -->
						 <?php if( get_field('class_video') ): ?> 
							<a class="button button-outline gallery" href="<?php the_field('class_video'); ?>">
								Video Preview
							</a>
						<?php endif;?>
					</div>
					<!-- END CTA -->

				</div>
			</div>
	</div>
</div>
<?php get_footer(); ?>