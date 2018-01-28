<div class="bg-pink-50 padding-top-50px padding-bottom-200px">
	<div class="container relative">
		<div class="row padding-bottom-40px">
			<div class="col-xs-12 col-sm-8">
				<!-- header -->
				<?php //if( get_field('home_events_header') ): ?> 
					<h3 class="large-header margin-bottom-20px">
						Make new friends
						<?php the_field('home_events_header');?>
					</h3>
				<?php //endif;?>
				<?php //if( get_field('hero_events_subheader') ): ?> 
					<p class="col-xs-12 col-sm-8 padding-0px sub-header">
						<?php the_field('home_events_subheader');?>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at sapien nulla. Proin sit amet consectetur ipsum, ac dictum nunc. Integer pulvinar eros eu cursus porttitor. Mauris sodales vel purus nec posuere. Aenean dapibus tortor nec laoreet tempor.
					</p>
				<?php //endif;?>
			</div>
		</div>
		<div class="cal-groups">
			<!-- cal item -->
			<div class="col-custom-cal">
				<div class="cal-item padding-20px margin-right-20px text-center">
					<p class="cal-item-month padding-bottom-0px">
						Dec
					<?php //if( get_field('home_event_calendar_month') ): ?>
						<?php the_field('home_event_calendar_month');?>
					<?php //endif;?>
					</p>
					<p class="cal-item-day padding-bottom-40px x-large-header ">
						25
						<?php //if( get_field('home_event_calendar_day') ): ?> 
							<?php the_field('home_event_calendar_day');?>
						<?php //endif;?>
					</p>
					<p class="cal-item-descr">
						Back to o.school night
						<?php //if( get_field('home_event_calendar_description') ): ?> 
							<?php the_field('home_event_calendar_description');?>
						<?php //endif;?>
					</p>
				</div>
			</div>
			<!-- cal item -->
			<div class="col-custom-cal">
				<div class="cal-item padding-20px text-center">
					<p class="cal-item-month padding-bottom-0px">
						Jan
					<?php //if( get_field('home_event_calendar_month2') ): ?>
						<?php the_field('home_event_calendar_month2');?>
					<?php //endif;?>
					</p>
					<p class="cal-item-day padding-bottom-40px x-large-header ">
						24
						<?php //if( get_field('home_event_calendar_day2') ): ?> 
							<?php the_field('home_event_calendar_day2');?>
						<?php //endif;?>
					</p>
					<p class="cal-item-descr">
						Transformations Student Showcase
						<?php //if( get_field('home_event_calendar_description2') ): ?> 
							<?php the_field('home_event_calendar_description2');?>
						<?php //endif;?>
					</p>
				</div>
			</div>
			<div class="cal-dancer absolute">
				<img src="http://via.placeholder.com/350x450" alt="Los Angeles"/>
			</div>
		</div>
	</div>
</div>