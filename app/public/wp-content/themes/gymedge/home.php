<?php /* Template Name: Home */ ?>
<?php
// Layout Home
if ( GymEdge::$layout == 'full-width' ) {
	$gym_layout_class = 'col-sm-12 col-xs-12';
}
else{
	$gym_layout_class = 'col-xs-12';
}
?>
<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<main id="main" class="site-main">
				<!-- Hero -->
				<?php get_template_part( 'template-parts/content', 'hero' ); ?>
				
				<!-- main content -->
				<?php get_template_part( 'template-parts/content', 'image-carousel' ); ?>

				<!-- About the community  -->
				<?php get_template_part( 'template-parts/content', 'community' ); ?>

				<!-- Meet the team -->
				<?php get_template_part( 'template-parts/content', 'team' ); ?>

				<!-- Events -->
				<?php get_template_part( 'template-parts/content', 'events' ); ?>

				<!-- Testimonials -->
				<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

				<!-- CTA -->
				<?php get_template_part( 'template-parts/content', 'cta' ); ?>

			</main>
		</div>
	</div>
</div>
<?php get_footer(); ?>

