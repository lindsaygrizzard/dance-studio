<?php /* Template Name: Parties and Pricing */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">

			<!-- MAIN IMAGE -->
			<?php if( get_field('main_image') ): ?> 
				<img class="circular-image margin-bottom-10px" src="<?php the_field('main_image'); ?>">
			<?php endif;?>
			<!-- END MAIN IMAGE -->

			<!-- MAIN HEADER AND SUB HEADER -->
			<?php if( have_rows('main_header_and_sub_header') ): ?>
				<?php while( have_rows('main_header_and_sub_header') ): the_row(); ?>
					<h1 class="large-header">
						<?php the_sub_field('title'); ?>
					</h1>
					<div class="content margin-bottom-50px">
						<p>
							<?php the_sub_field('description'); ?>
						</p>
					</div>
				<?php endwhile; ?>
			<?php endif;?>
			<!-- END MAIN HEADER AND SUB HEADER -->

			<!-- COMPONENT -->                     
			<?php if( have_rows('pricing_party_group') ): ?>
				<div class="content overflow-hidden">
				<?php while( have_rows('pricing_party_group') ): the_row(); ?>
					<div class="margin-bottom-75px">

						<h2 class="large-header margin-bottom-20px">
							<?php the_sub_field('section_title'); ?>
							<span class="large-header float-right">
								<?php the_sub_field('price'); ?>
							</span>
						</h2>

						<p>
							<?php the_sub_field('description'); ?>
						</p>

						<!-- quick party facts component -->
						<?php if( have_rows('quick_facts') ): ?>
							<div class="col-sm-12 overflow-hidden outline-padding padding-20px margin-bottom-30px margin-top-20px highlights">
								<ul class="highlights padding-top-20px padding-bottom-20px overflow-hidden">
								<!-- Sub Repeater for quick facts -->
								<?php while( have_rows('quick_facts') ): the_row(); ?>
									<li class="col-xs-12 col-sm-4 item">
										<?php the_sub_field('fact'); ?>
									</li>
								<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>

						<!-- button CTA -->
						<?php if( get_sub_field('button_url') ): ?>
							<div class="instructor-ctas padding-0px margin-top-30px cta">
								<a class="text-center button button-purple sign-up" href="<?php the_sub_field('button_url'); ?>">
									Sign Up
								</a>
							</div>
						<?php endif; ?>	

					</div>
				<?php endwhile; ?>
				</div>
			<?php endif;?>
			<!-- END COMPONENT-->

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>