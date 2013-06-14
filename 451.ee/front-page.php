<?php get_header(); ?>
<div id="content" class="clearfix row-fluid">

	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide"> 
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>
		<div class="carousel-inner">
		<?php
			global $post;
			$tmp_post = $post;
			#$show_posts = of_get_option('slider_options');
			$args = array( 'post_type' => 'feat', 'post_status' => 'publish', ); // set this to how many posts you want in the carousel
			$myposts = get_posts( $args );
			$post_num = 0;
			foreach( $myposts as $post ) :	setup_postdata($post);
			$post_num++;
			#$post_thumbnail_id = get_post_thumbnail_id();
			#$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-carousel' );
			?>
			<div class="<?php if($post_num == 1){ echo 'active'; } ?> item">
			<?php the_post_thumbnail( 'full' ); ?>
			<h2><?php the_title(); ?></h2>
			<div class="feat_content">
			<?php the_excerpt(); ?>
			<a href="" class="btn btn-info">Loe lähemalt</a>
			</div>
		</div>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	
		</div>
	</div><!-- /.carousel -->

				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class('clearfix'); ?> role="article"><section class="post_content">
						<?php the_content(); ?>
					</section> 
				</article>
			<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
</div>
<?php get_footer(); ?>