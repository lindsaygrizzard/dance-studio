<?php /* Template Name: aboutUs */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">

			<?php if( get_field('about_us_image') ): ?> 
				<img class="circular-image margin-bottom-10px" src="<?php the_field('about_us_image'); ?>">
			<?php endif;?>
				<h1 class="large-header">Manifesto</h1>
				<h2 class="sub-header primary margin-bottom-20px">community, truth, progression, play, individualism</h2>
				<div class="content margin-bottom-50px">
					<p>Welcome to San Francisco Pole & Dance! By stepping through these doors, you aren't just taking a fitness class, you are joining a community. As students we grow together, uplifting each another with encouragement and unconditional support. We move against the grain of how society demands we behave, and practice our art according to five essential values.</p>
					<p>Community. We learn from one another, sharing abundantly with the knowledge that we grow with each other.
					</p>
					<p>Truth. We speak of ourselves with respect, celebrating the grace and power that our bodies and minds give us.
					</p>
					<p>Progression. By working with where our bodies are at right now, we build the foundations that will allow us to perform even more gracefully and precisely tomorrow.
					</p>
					<p>Play. We delight in a curious exploration of movement, embracing the pure enjoyment of dance.
					</p>
					<p>Individualism. We observe and learn from one another, trusting that our differences and diversity create strength and beauty.</p>
				</div>

				<!-- sign up cta -->
				<div class="instructor-ctas padding-0px cta margin-bottom-50px">
					<?php if( get_field('schedule_link') ): ?> 
						<a class="text-center button button-purple sign-up" href="<?php the_field('schedule_link');?>">
							View our schedule
						</a>
					<?php endif;?>
					<!-- Gallery -->
					 <?php if( get_field('gallery_link') ): ?> 
						<a class="button button-outline gallery" href="<?php the_field('gallery_link'); ?>">
							Gallery
						</a>
					<?php endif;?>
				</div>
				<!-- END CTA -->

				<?php if( get_field('about_us_studio') ): ?> 
					<img class="about-studio margin-bottom-50px" src="<?php the_field('about_us_studio'); ?>">
				<?php endif;?>

				<div class="content margin-bottom-50px">
					<h2 class="large-header margin-bottom-20px">Our studio</h2>
					<p>
						Our 2800sqft. studio is located at 301 8th Street in San Francisco.
					</p>
					<p>
						We have a 1,400sqft pole classroom with eight 45mm poles, in addition to a rentable private pole room with one 45mm pole. We also have an aerial space with 6 points and a separate room for flexibility and gymnastics training.
					</p>
				</div>

				<div class="content margin-bottom-50px">
					<h2 class="large-header margin-bottom-20px">Getting here</h2>
					<p>
						To get into the building, dial 121# on the callbox downstairs. Once you've been buzzed in, take the elevator up to the 2nd floor. Walk all the way down to the end of the hall to your left. 
					</p>
					<p>
						There is free 1-hour street parking on Folsom Street and 2-hour parking on 8th and Harrison Streets. The nearest parking garage is Soma Grand Garage, at 1160 Mission St between 7th and 8th Streets.
					</p>
				</div>

				<!-- Press -->
				<?php if ( have_rows('press_links') ): ?>
					<div class="content margin-bottom-100px">
						<h2 class="large-header margin-bottom-20px">Press</h2>
						
						<?php
							while ( have_rows('press_links') ) : the_row();	
						?>
								<a class="primary" href="<?php the_sub_field('press_link');?>"><?php the_sub_field('press_link_title');?></a></br>
						<?php endwhile;?>
					</div>
				<?php endif; ?>
				<!-- END Press -->


			<!--  -->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>