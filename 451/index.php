<?php
/**
 * The template for displaying POST LISTING.
 */

get_header(); ?>

<?php /* if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  
  <div class="printedContent">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
  </div>
    
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<br /><br />
*/ ?>


    <img id="logo" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/logo.png" /><br /><br />
    Estonian Transparency Report
	</div>
 
  <div id="bottom">
  
  	Will be opened<br />
		12th of june 2013<br /><br />
  	<img id="logo" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/censored.png" /><br /><br />


<?php get_footer(); ?>