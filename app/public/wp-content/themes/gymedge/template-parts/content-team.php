<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<!-- header -->
			<?php //if( get_field('home_community_header') ): ?> 
				<h3 class="large-header margin-bottom-20px">
					Meet our team
					<?php the_field('home_community_header');?>
				</h3>
			<?php //endif;?>
			<?php //if( get_field('hero_community_subheader') ): ?> 
				<p class="col-xs-12 col-sm-8 padding-0px sub-header">
					<?php the_field('hero_community_subheader');?>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at sapien nulla. Proin sit amet consectetur ipsum, ac dictum nunc. Integer pulvinar eros eu cursus porttitor. Mauris sodales vel purus nec posuere. Aenean dapibus tortor nec laoreet tempor.
				</p>
			<?php //endif;?>
		</div>
	</div>
</div>

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

<div class="rt-team-grid-1 instructor-list instructor-list-home">
	<div class="row auto-clear">
		<?php if ( have_posts() ) :?>
			<div class="carousel-wrap">
				<div class="owl-carousel">
					<?php while ( have_posts() ) : the_post();?>
						<?php
						$id = get_the_id();
						$socials = get_post_meta( $id, 'gym_trainer_socials', true );
						$designation = get_post_meta( $id, 'gym_trainer_designation', true );
						?>
							<!-- instructor unit -->
							<?php if ( get_the_post_thumbnail() & get_the_title() ) : ?>
								<div class="item instructor-item-home relative margin-bottom-20px">
									<!-- instructor image -->
									<a class="intructor-grid-item-home" href="<?php the_permalink();?>">
										<div class="instructor-img-home image-cropper">
											<?php the_post_thumbnail( $thumb_size );?>
										</div>
										<!-- instructor content -->
										<div class="content margin-top-20px">
											<p class="black instructor-name-home sub-header uppercase text-center">
											<p class="black instructor-name-home sub-header uppercase text-center">
												<?php the_title();?>
											</p>
										</div>
									</a>
								</div>
							<?php endif; ?>
					<?php endwhile;?>
				</div>
			</div>
			<div class="col-sm-12 col-xs-12"><?php rt_vc_pagination();?></div>
		<?php endif;?>
	</div>
</div>
<?php wp_reset_query();?>