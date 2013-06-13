<?php get_header(); ?>
<div id="content" class="clearfix row-fluid">
	<div class="span9">
		<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
 		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="row-fluid">
				<div class="span2">
					<div class="datebox">
						<?php the_time('d') ?><hr> <?php the_time('m') ?>
					</div>
					<span class="author"><?php the_author(); ?></span>
				</div>
				<div class="span10">
					<section class="post_content clearfix">
					<?php the_content( __("Read more &raquo;","theme") ); ?>
					</section>
				</div>

			</div>
		</article>
				
				<?php endwhile; ?>	
				
				<article id="post-not-found">
					<header>
						<h1><?php _e("Not Found", "theme"); ?></h1>
					</header>
					<section class="post_content">
						<p><?php _e("Sorry, but the requested resource was not found on this site.", "theme"); ?></p>
					</section>
					<footer>
					</footer>
				</article>
				
				<?php endif; ?>
		
		</div>
		<div class="span3">
		   <?php $args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC'
); ?>
		<div class="widget">
		<h3>Postitused</h3>
			<ul class="archives">
			<?php wp_get_archives( $args ); ?> 
			</ul>
		</div>
		</div>

</div>

	


<?php get_footer(); ?>