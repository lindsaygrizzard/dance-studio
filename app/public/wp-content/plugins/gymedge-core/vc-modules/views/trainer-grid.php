<?php
$thumb_size = 'gymedge-size3';
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
	'post_type'      => 'gym_trainer',
	'posts_per_page' => 100,
	'paged'          => $paged,
	);

if ( !empty( $cat ) ) {
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'gym_team_category',
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
$col_class = "col-lg-$col_lg col-md-$col_md col-sm-$col_sm col-xs-$col_xs";

// Pagination fix
global $wp_query;
$wp_query   = NULL;
$wp_query   = $query;
?>
<div class="rt-team-grid-1 instructor-list">
	<div class="row auto-clear">
		<?php if ( have_posts() ) :?>
			<?php while ( have_posts() ) : the_post();?>
				<?php
				$id = get_the_id();
				$socials = get_post_meta( $id, 'gym_trainer_socials', true );
				$designation = get_post_meta( $id, 'gym_trainer_designation', true );
				?>
				
					<!-- instructor unit -->
						<div class="col-xs-8 col-xs-offset-4 instructor-info margin-bottom-20px">
							<!-- instructor image -->
							<a class="intructor-grid-item" href="<?php the_permalink();?>">
								<div class="col-xs-12 col-sm-3 instructor-img image-cropper">
									<?php the_post_thumbnail( $thumb_size );?>
								</div>
								<!-- instructor content -->
								<div class="content col-xs-12 col-sm-9">
									<h3 class="instructor-name">
										<?php the_title();?>
									</h3><br/>
									<?php if ( $designation_display ): ?>
										<p class="sub-header instructor-cats">
											<?php echo esc_html( $designation );?>
										</p>
									<?php endif; ?>
								</div>
							</a>
						</div>
			<?php endwhile;?>
			<div class="col-sm-12 col-xs-12"><?php rt_vc_pagination();?></div>
		<?php endif;?>
	</div>
</div>
<?php wp_reset_query();?>