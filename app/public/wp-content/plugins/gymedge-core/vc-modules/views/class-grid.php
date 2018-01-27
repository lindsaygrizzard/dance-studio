<?php
$thumb_size = 'gymedge-size5';

if ( get_query_var('paged') ) {
	$paged = get_query_var('paged');
}
elseif ( get_query_var('page') ) {
	$paged = get_query_var('page');
}
else {
	$paged = 1;
}

$args = array(
	'post_type'      => 'gym_class',
	'posts_per_page' => 100,
	'paged'          => $paged,
);

if ( !empty( $cat ) ) {
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'gym_class_category',
			'field' => 'term_id',
			'terms' => $cat,
		)
	);
}

switch ( $orderby ) {
	case 'title':
	$args['orderby'] = 'title';
	$args['order']   = 'ASC';
	break;
	case 'menu_order':
	$args['orderby'] = 'menu_order';
	$args['order']   = 'ASC';
	break;
}

$query = new WP_Query( $args );
$col_class = "col-lg-$col_lg col-md-$col_md col-sm-$col_sm col-xs-12";

// Pagination fix
global $wp_query;
$wp_query   = NULL;
$wp_query   = $query;
?>

<div class="row auto-clear">
	<?php if ( have_posts() ) :?>
		<?php while ( have_posts() ) : the_post();?>
			<?php
			$id = get_the_id();
			$schedule = get_post_meta( $id, 'gym_class_schedule', true );
			$schedule = ( $schedule != '' ) ? $schedule : array();
			$schedule_limit = apply_filters( 'gym_schedule_limit', false );
			if ( $schedule_limit ) {
				$schedule = array_slice( $schedule, 0, $schedule_limit );
			}
			?>
			<div class="col-sm-8 col-sm-offset-2">
				<!-- Class info -->
				<div class="instructor-info margin-bottom-50px overflow-hidden">
					<div class="instructor-img image-cropper margin-bottom-20px">
						<?php the_post_thumbnail( $thumb_size );?>
					</div>
					<!-- title and days -->
					<h1 class="large-header col-xs-12 col-sm-5 padding-0px margin-0px"><?php the_title();?></h1>
					<div class="col-xs-12 col-sm-6 type-days text-right margin-top-10px">
						<?php foreach ( $schedule as $time ): ?>
							<?php if ( !empty( $time['week'] )): ?>
								<div class="outline-padding less-padding inline margin-right-5px">
									<span class="sub-header">
										<?php echo esc_html( $weeknames[$time['week']] );?>
									</span>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<!-- END day/time -->

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
		<?php endwhile;?>
		<div class="col-sm-12 col-xs-12"><?php rt_vc_pagination();?></div>
	<?php endif;?>
</div>


<?php wp_reset_query();?>