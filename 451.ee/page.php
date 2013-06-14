<?php get_header(); ?>
<div id="content" class="clearfix row-fluid">
	<div class="span12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('clearfix'); ?> role="article">
		<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1> 
		<section class="post_content clearfix" itemprop="articleBody">
		<?php the_content(); ?>
		</section></article>


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
</div>
<?php get_footer(); ?>