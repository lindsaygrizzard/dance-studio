<div class="testimonials padding-bottom-100px padding-top-100px">
	<?php //if( have_rows('slider_testimonial_repeater') ): ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
					<div class="owl-carousel-quotes owl-carousel owl-theme">
						<?php //while( have_rows('slider_testimonial_repeater') ): the_row();?>
							<div class="item instructor-item-home relative margin-bottom-20px">
								<h6 class="large-header">
									Highly recommend coming to SF Pole and Dance if you're in a workout rut and want to try something new!
									<?php the_sub_field('slider_testimonial_quote'); ?>
								</h6>
								<p class="quoter">
									Trisha V.
									<?php the_sub_field('slider_testimonial_quoter'); ?>
								</p>
							</div>

							<div class="item instructor-item-home relative margin-bottom-20px">
								<h6 class="large-header">
									2 Highly recommend coming to SF Pole and Dance if you're in a workout rut and want to try something new!
									<?php the_sub_field('slider_testimonial_quote'); ?>
								</h6>
								<p class="quoter">
									Trisha V.
									<?php the_sub_field('slider_testimonial_quoter'); ?>
								</p>
							</div>

							<div class="item instructor-item-home relative margin-bottom-20px">
								<h6 class="large-header">
									3 Highly recommend coming to SF Pole and Dance if you're in a workout rut and want to try something new!
									<?php the_sub_field('slider_testimonial_quote'); ?>
								</h6>
								<p class="quoter">
									Trisha V.
									<?php the_sub_field('slider_testimonial_quoter'); ?>
								</p>
							</div>
						<?php //endwhile; ?>
					</div>
				</div>
			</div>
			<div class="row padding-top-30px">
				<div class="col-sm-12 col-md-4 col-md-offset-4">
					<?php //if( get_field('hero_testimonial_sign_up') ): ?> 
						<a class="button button-outline home-hero-button" href="<?php the_field('hero_team_testimonial_up');?>">
							Sign up for class
						</a>
					<?php //endif;?>
				</div>
			</div>
		</div>
	<?php //endif; ?>
</div>