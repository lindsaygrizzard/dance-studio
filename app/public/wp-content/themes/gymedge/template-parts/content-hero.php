<div class="home-hero-background" style="background-color:#f1f1f1;">
	<div class="container vh-100 padding-top-200px padding-bottom-200px">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				
				<!-- header -->
				<?php //if( get_field('home_header') ): ?> 
					<h1 class="large-header margin-bottom-20px">Explore your strengthat San Francisco Pole and Dance.
						<?php the_field('home_header');?>
					</h1>
				<?php //endif;?>

				<!-- subheader -->
				<?php //if( get_field('hero_subheader') ): ?> 
					<h2 class="sub-header margin-bottom-30px">
						<?php the_field('hero_subheader');?>
						Start fresh with fitness that’s anything but routine. Try the best workouts from pole dance to flexibility to aerial straps. Even better? Get 50% off your first class with promo code FIRST.
					</h2>
				<?php //endif;?>

				<!-- ctas -->
				<div class="col-xs-12 col-sm-6 padding-0px padding-right-10px">
					<?php //if( get_field('hero_new_link') ): ?> 
						<a class="text-center button button-purple home-hero-button" href="<?php the_field('hero_new_link');?>">I'm new!</a>
					<?php //endif;?>
				</div>

				<div class="col-xs-12 col-sm-6 padding-0px padding-left-10px">
					<?php //if( get_field('hero_sign_up') ): ?> 
						<a class="button button-outline home-hero-button" href="<?php the_field('hero_sign_up');?>">Sign up for class</a>
					<?php //endif;?>
				</div>
			</div>
		</div>
	</div>
</div>

