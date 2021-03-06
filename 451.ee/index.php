<?php get_header(); ?>
<div id="content" class="clearfix row-fluid">
	<div class="span9">
		<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
 		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			<div class="row-fluid">
				<div class="span2">
					<div class="datebox">
						<?php the_time('d') ?><hr> <?php the_time('m') ?>
					</div>
					<span class="author"><?php the_author(); ?></span>
				</div>
				<div class="span10">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<section class="post_content clearfix">
					<?php if ( is_home() ) { the_excerpt(); } else { the_content( __("Read more &raquo;","theme") ); } ?>
					</section>
					 <?php if (is_single()) { ?>
					 <!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'et'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
					 <div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-width="200" data-show-faces="false" data-font="arial"></div>
					 <a href="<?php the_permalink() ?>" class="twitter-share-button" data-size="large">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

					 <h3><?php _e("Kommenteeri", "theme"); ?></h3>
					<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="600" data-num-posts="10"></div>
					<?php }?>					
				</div>
			</div>
		</article>
				<?php endwhile; ?>	<?php endif; ?>		
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
		<h3><?php _e("Postitused", "theme"); ?></h3>
			<ul class="archives">
			<?php wp_get_archives( $args ); ?> 
			</ul>
		</div>
		</div>
</div>
<?php get_footer(); ?>