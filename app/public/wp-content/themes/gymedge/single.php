<?php
// Layout class
if ( GymEdge::$layout == 'full-width' ) {
	$gym_layout_class = 'col-xs-12';
}
else{
	$gym_layout_class = 'col-xs-12 col-sm-8 col-sm-offset-2';
}
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'banner');?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<div class="<?php echo esc_attr( $gym_layout_class );?>">
				<main id="main" class="site-main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-single', get_post_format() );?>
						<?php
						if ( comments_open() || get_comments_number() ){
							comments_template();
						}
						?>
					<?php endwhile; ?>
				</main>					
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>