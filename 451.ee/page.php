<?php get_header(); ?>
<div id="content" class="clearfix row-fluid">
	<div class="span9">
		 <div class="row-fluid">
			<div class="span2">
<?php
//if the post has a parent
if($post->post_parent){
  //collect ancestor pages
  $relations = get_post_ancestors($post->ID);
  //get child pages
  $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
  if ($result){
    foreach($result as $pageID){
      array_push($relations, $pageID->ID);
    }
  }
  //add current post to pages
  array_push($relations, $post->ID);
  //get comma delimited list of children and parents and self
  $relations_string = implode(",",$relations);
  //use include to list only the collected pages. 
  $sidelinks = wp_list_pages("link_before=<i class='icon-li icon-angle-right icon-large'></i>&title_li=&echo=0&include=".$relations_string);
}else{
  // display only main level and children
  $sidelinks = wp_list_pages("title_li=&echo=0&depth=1&child_of=".$post->ID);
}

if ($sidelinks) { ?>
 
  <ul class="subpages icons-ul">
	<?php //links in <li> tags
    echo $sidelinks; ?>
  </ul>         
<?php } ?>

			</div>
			<div class="span10">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class('clearfix'); ?> role="article">
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1> 
			<section class="post_content clearfix" itemprop="articleBody">
			<?php the_content(); ?>
			</section>
			</article>


			<?php endwhile; ?>		
			<?php endif; ?>
			</div>
		</div>

	</div>
	<div class="span3">
	</div>
</div>
<?php get_footer(); ?>