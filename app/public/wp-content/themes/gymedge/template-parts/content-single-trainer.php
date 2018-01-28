<?php
global $post;
$gym_designation   = get_post_meta( $post->ID, 'gym_trainer_designation', true );
$gym_experience    = get_post_meta( $post->ID, 'gym_trainer_experience', true );
$gym_email         = get_post_meta( $post->ID, 'gym_trainer_email', true );
$gym_phone         = get_post_meta( $post->ID, 'gym_trainer_phone', true );
$gym_socials       = get_post_meta( $post->ID, 'gym_trainer_socials', true );
$gym_skills        = get_post_meta( $post->ID, 'gym_trainer_skill', true );

if ( GymEdge::$layout == 'full-width' ) {
	$gym_trainer_img_class = 'col-sm-4';
	$gym_trainer_details_class = 'col-sm-8 col-sm-offset-2';
}
else{
	$gym_trainer_img_class = 'col-sm-12 col-md-5 col-lg-4';
	$gym_trainer_details_class = 'col-sm-12 col-md-7 col-lg-8 col-sm-offset-2';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="<?php echo esc_attr( $gym_trainer_details_class );?>">
			<div class="trainer-detail-content">

				<!-- instructor header, image and categories -->
				<div class="instructor-image-single">
					<?php the_post_thumbnail( $thumb_size );?>
				</div>
				<h1 class="instructor-name large-header margin-bottom-20px">
					<?php the_title();?>
				</h1>
				<?php if ( $gym_designation ): ?>
					<h2 class="instructor-cats sub-header">
						<?php echo esc_html( $gym_designation );?>
					</h2>
				<?php endif; ?>
				<!-- END instructor header, image and categories -->


				<!-- instructor content -->
				<div class="detail-heading margin-bottom-30px margin-top-30px"> 
					<?php the_content();?>
				</div>
				<!-- END instructor content -->


				<!-- CTAs -->
				<div class="instructor-ctas margin-bottom-75px">
					<a class="button button-purple sign-up" href="<?php the_field('instructor-mindbody-link'); ?>">
						Take class with
						<?php if( the_title() ): ?>
							<?php the_title();?>
						<?php endif;?>
					</a>
					 <?php if( get_field('gym_gallery') ): ?> 
						<a class="button button-outline gallery" href="<?php the_field('instructor-gallery-link'); ?>">
							Gallery
						</a>
					<?php endif;?>
				</div>
				<!-- END CTAS -->


				<!-- Links and Press -->
				<div class="videos-press row">
					<!-- Performance Video Links -->
					<?php if ( have_rows('performance_videos') ): ?>
						<ul class="col-xs-12 col-sm-6">
							<h4 class="uppercase sub-header">Performance Videos</h4>
					<?php
						while ( have_rows('performance_videos') ) : the_row();	
					?>
						<li>
							<a class="primary" href="<?php the_sub_field('performance_video_link');?>"><?php the_sub_field('instructor_video_title');?></a>
						</li>
					<?php endwhile;?>
						</ul>
					<?php endif; ?>

					<!-- Press Links -->
					<?php if ( have_rows('articles_press') ): ?>
						<ul class=" col-xs-12 col-sm-6">
							<h4 class="uppercase sub-header">Articles + Press</h4>
					<?php
						while ( have_rows('articles_press') ) : the_row();	
					?>
						<li>
							<a class="primary" href="<?php the_sub_field('articles_press_link');?>"><?php the_sub_field('articles_press_title');?></a>
						</li>
					<?php endwhile;?>
						</ul>
					<?php endif; ?>
				</div>
				<!-- END Links and Press -->


				<!-- featured upcoming class  -->
				<?php if ( have_rows('featured_class') ): ?>
					<div class="row margin-top-75px">
						<div class="col-sm-12 class-component">
								<h4 class="uppercase sub-header">Upcoming Classes</h4>

								<!-- outer level repeater -->
								<?php while ( have_rows('featured_class') ) : the_row();?>

								<!-- class heading details -->
									<div class="title margin-top-30px">
										<h2 class="medium-header col-xs-12 col-sm-7 padding-0px margin-0px"><?php the_sub_field('featured_class_title');?></h2>
										<div class="col-xs-12 col-sm-5 type-days text-right">
											<div class="outline-padding inline margin-right-10px">
												<span class="sub-header"><?php the_sub_field('featured_class_category');?>
												</span>
											</div>
											<div class="outline-padding inline">
												<span class="sub-header">
													<?php the_sub_field('featured_class_days');?>
												</span>
											</div>
										</div>
									</div>

									<!-- class description -->
									<p class="col-sm-12 padding-0px padding-top-10px details margin-top-30px">
										<?php the_sub_field('featured_class_description');?>
									</p>

									<!-- repeater for class highlights -->
									<div class="col-sm-12 overflow-hidden outline-padding padding-20px margin-bottom-30px margin-top-20px highlights">
										<?php if( have_rows('featured_class_highlights') ): ?>
											<!-- sub repeater for class items -->
											<ul class="highlights padding-top-20px padding-bottom-20px overflow-hidden">
												<?php while( have_rows('featured_class_highlights') ): the_row();?>
													<li class="col-xs-12 col-sm-4 item">
														<?php the_sub_field('featured_class_highlight_item'); ?>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif;?>
									</div>

									<!-- featured class cta -->
									<div class="instructor-ctas padding-0px cta">
										<a class="text-center button button-purple sign-up" href="<?php the_sub_field('featured_class_cta');?>">
											Sign up for class
										</a>
									</div>
									
								<?php endwhile;?>	
						</div>
					</div>
				<?php endif; ?>
				<!-- END featured upcoming class  -->


				<!-- Social media -->
				<?php if ( !empty( $gym_socials ) ): ?>
					<div class="social margin-top-100px border-left">
						<p class="uppercase inline-block">Social Media</p> </br>
						<?php foreach ( $gym_socials as $gym_key => $gym_social ): ?>
							<?php if ( !empty( $gym_social ) ): ?>
								<a class="social-icons" target="_blank" href="<?php echo esc_attr( $gym_social );?>"><i class="fa <?php echo esc_attr( GymEdge::$trainer_social_fields[$gym_key]['icon'] );?>"></i></a>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>						
				<?php endif; ?>
				<!-- END Social media -->

			</div>
		</div>
	</div>
</article>