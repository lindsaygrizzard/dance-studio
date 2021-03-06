<?php
$gym_has_entry_meta  = ( GymEdge::$options['post_date'] || GymEdge::$options['post_author_name'] || GymEdge::$options['post_cats'] || GymEdge::$options['post_comment_num'] ) ? true : false;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header-single">
		<h3 class="large-header margin-bottom-20px">
			<?php the_title();?>
		</h3>
		<?php if ( has_post_thumbnail() ): ?>
			<div class="entry-thumbnail single-post-image margin-bottom-30px"><?php the_post_thumbnail( 'gymedge-size1' );?></div>
		<?php endif; ?>
	</div>
	<div class="entry-content">
		<?php the_content();?>
		<?php wp_link_pages();?>
	</div>
	<?php if ( has_tag() && GymEdge::$options['post_tags'] ): ?>
		<div class="entry-footer">
			<p><?php echo get_the_term_list( $post->ID, 'post_tag', '', ', ' ); ?></p>
		</div>
	<?php endif; ?>
	<?php if ( $gym_has_entry_meta ): ?>
		<div class="entry-meta margin-top-50px">
			<ul>
				<?php if ( GymEdge::$options['post_author_name'] ): ?>
					<li class="margin-top-10px"><?php esc_html_e( 'By', 'gymedge' );?> : <?php the_author_posts_link();?></li>
				<?php endif; ?>
				<?php if ( has_category() && GymEdge::$options['post_cats'] ): ?>
					<li class="margin-top-10px"><?php esc_html_e( 'Categories', 'gymedge' );?> : <?php the_category( ', ' );?></li>
				<?php endif; ?>
			</ul>			
		</div>			
	<?php endif; ?>
</article>