<?php get_header(); ?>
<div id="content" class="clearfix row-fluid">
	<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<?php
			global $post;
			$tmp_post = $post;
			$args = array( 'post_type' => 'feat', 'post_status' => 'publish', ); // set this to how many posts you want in the carousel
			$myposts = get_posts( $args );
			$post_num = 0;
			foreach( $myposts as $post ) :	setup_postdata($post);
			$post_num++; 
		?>
			<div class="<?php if($post_num == 1){ echo 'active'; } ?> item">
				<div class="feat_thumb">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
				<div class="feat_content">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>				
					<a href="<?php echo get_post_meta( $post->ID, 'link_url', true); ?>" class="read_more"> <?php _e("Loe lähemalt", "theme"); ?> <i class="icon-chevron-right icon-2x"></i></a>
					
				</div>
				<div class="clearfix"></div>
			</div>
	<?php endforeach; ?>
	<?php $post = $tmp_post; ?>
	</div>
	<div class="indicator-position">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>
	</div>
</div><!-- /.carousel -->
<div class="well">

	<ul class="widgets">
		<li class="raport"><h3>2012 Eelraport</h3>
			<p><i class="icon-youtube-play icon-3x"></i> <span>82172 videot</span></p>
			<p><i class="icon-music icon-3x"></i> <span>22524 muusikapala</span></p>
			<p><i class="icon-gamepad icon-3x"></i> <span>314 mängu</span></p>
			<a href="http://451.ee/raportid/" class="read_more"><?php _e("Loe lähemalt", "theme"); ?> <i class="icon-chevron-right icon-2x"></i></a>
		</li>
		<li><h3 class="muted">2012 Raport</h3></li>
		<li><h3 class="muted">2013 Raport</h3></li>
	</ul>

</div>



				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="text-center">
				<article <?php post_class('clearfix'); ?> role="article"><section class="post_content">
						<?php the_content(); ?>
					</section> 
				</article>
				</div>
			<?php endwhile; ?>	
			<?php endif; ?>
<?php if ( is_user_logged_in() ) { ?>

<h2 class="ruupor"><?php _e("Anna meile teada sisu eemaldamisest!", "theme"); ?></h2>
<div class="well" style="position: relative;">
	<div class="row-fluid">
		<div class="span7">
		<?php insert_cform('1'); ?>
		</div>

		<div class="span5 well-large">
		<p>	Projektil "451" eesmärk on koguda statsistikat ebaseadusliku sisu eemaldamise kohta internetist. Riik sellist statistikat veel ei kogu, seetõttu oleme väga tänulikud, kui annate meile informatsiooni suletud lehekülgede või kustutatud sisu kohta. Juriidilist nõu me ei anna, kuid seda, milliste seaduste alusel sisu eemaldamist nõuda võib, saab vaadata juriidilisest analüüsist.</p>
		</div>
	</div>
</div>

<?php } ?> 

<div class="row-fluid">
<h3><?php _e("Viimased postitused", "theme"); ?></h3>

		<ul class="latest_posts">
		<?php 
		global $post;
		$args = array( 'posts_per_page' => 10, 'suppress_filters' => 0 );
		$myposts = get_posts( $args );	
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><i class="icon-chevron-right icon-large"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
		<?php endforeach; ?>  
		</ul>
</div>
<?php get_footer(); ?>