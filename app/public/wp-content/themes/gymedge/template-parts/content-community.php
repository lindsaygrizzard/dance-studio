<div class="container vh-100 padding-top-200px padding-bottom-200px">
	<div class="row">
		<div class="col-xs-12 col-sm-8">
			
			<!-- header -->
			<?php //if( get_field('home_community_header') ): ?> 
				<h3 class="large-header margin-bottom-20px">
					Discover a community
					<?php the_field('home_community_header');?>
				</h3>
			<?php //endif;?>

			<!-- subheader -->
			<?php //if( get_field('hero_community_subheader') ): ?> 
				<p class="col-xs-12 col-sm-8 padding-0px sub-header margin-bottom-30px">
					<?php the_field('hero_community_subheader');?>
					As students we grow together, uplifting each another with encouragement and unconditional support. We move against the grain of how society demands we behave, and practice our art according to five essential values.
				</p>
			<?php //endif;?>

			<!-- ctas -->
			<div class="col-xs-12 col-sm-6 padding-0px padding-right-10px">
				<?php //if( get_field('hero_community_new_link') ): ?> 
					<a class="text-center button button-purple home-hero-button" href="<?php the_field('hero_community_new_link');?>">
						Our Manifesto
					</a>
				<?php //endif;?>
			</div>

			<div class="col-xs-12 col-sm-6 padding-0px padding-left-10px">
				<?php //if( get_field('hero_community_sign_up') ): ?> 
					<a class="button button-outline home-hero-button" href="<?php the_field('hero_community_sign_up');?>">
						Sign up for class
					</a>
				<?php //endif;?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4" style="background-color: #f1f1f1; height:300px"></div>
	</div>
</div>


