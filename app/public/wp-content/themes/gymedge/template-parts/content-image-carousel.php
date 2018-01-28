	<div class="container-fluid padding-0px">
		<div class="relative">
			<h3 class="large-header absolute z-index-mid image-overlay-test-home">
				Behind the scenes
			</h3>
		
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <?php if( have_rows('slider_repeater') ): ?>

		    	<div class="carousel-inner">
		  			<?php while( have_rows('slider_repeater') ): the_row();?>
	  					<div class="item <?php the_sub_field('active_class'); ?>">
	  					  <img src="http://via.placeholder.com/350x150" alt="Los Angeles" style="width:100%;">
	  					  <img src="<?php the_sub_field('slider_image'); ?>">
	  					</div>
		  			<?php endwhile; ?>
	  			</div>
	  		<?php endif;?>

	  			<div class="carousel-inner">
	  			  <div class="item active">
	  			    <img src="http://via.placeholder.com/350x150" alt="Los Angeles" style="width:100%;">
	  			  </div>

	  			  <div class="item">
	  			    <img src="http://via.placeholder.com/350x150" alt="Chicago" style="width:100%;">
	  			  </div>
	  			
	  			  <div class="item">
	  			    <img src="http://via.placeholder.com/350x150" alt="New york" style="width:100%;">
	  			  </div>
	  			</div>
		   
		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
	  </div>
	</div>
