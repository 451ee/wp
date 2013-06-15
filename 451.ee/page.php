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
  $sidelinks = wp_list_pages("link_before=<i class='icon-li icon-angle-right icon-large'></i>&title_li=&echo=0&depth=1&child_of=".$post->ID);
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

<table>
  <thead>
    <tr>
        <th colspan="7">SISU EEMALDAMINE INTERNETIST
        </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="col1">Ebaseadusliku sisu liik</td>
      <td>Isikuandmete kaitsega vastuolus olev sisu</td>
      <td>Tarbijakaitsega vastuolus olev sisus</td>
      <td>Sisu, mis rikub kaughasartmängule kehtestatud nõudeid </td>
      <td>Sisu, mida keelab karistusõigus (lasteporno, identiteedi vargus, jne)</td>
      <td>Laimav ja halvustav sisu ning sisu, mis riivab isiku privaatsust ja isikuõigusi</td>
      <td>Sisu, mis rikub intellektuaalse omandi õgusi</td>
    </tr>
    <tr>
      <td class="col1">Vastutava isiku indentifitseerimine, kui ta ei ole teada</td>
      <td>Taotlus ISP-le info saamiseks (väärteomenetlus)</td>
      <td>Vastutav isik on reeglina teada</td>
      <td> </td>
      <td>Taotlus ISP-le info saamiseks (kriminaalmenetlus)</td>
      <td>Eeltõenusmenetlus (tsiviilmenetlus).</td>
      <td>1) Eeltõenusmenetlus (tsiviilmenetlus);<br />
          2) Taotlus ISP-le info saamiseks (kriminaalmenetlus).</td>
    </tr>
    <tr>
      <td class="col1">Vastutavate isikute ring</td>
      <td>1) Õiguste rikkuja;<br />2) Kaasaitaja (teatud juhul ISP)</td>
      <td>1) Õiguste rikkuja;<br />2) Kaasaitaja (teatud juhul ISP)</td>
      <td> </td>
      <td>1) Õiguste rikkuja; <br />2) Kaasaitaja (teatud juhul ISP)</td>
      <td>1) Õiguste rikkuja; <br />2) Kaasaitaja (teatud juhul ISP)</td>
      <td>1) Õiguste rikkuja; <br />2) Kaasaitaja (teatud juhul ISP)</td>
    </tr>
    <tr>
      <td class="col1">Sisu eemaldamise meetodid</td>
      <td>1) Taotlus;<br />2) Haldusmenetlus;<br />3) Väärteomenetlus</td>
      <td>1) Taotlus;<br />2) Haldusmenetlus;<br />3) Väärteomenetlus</td>
      <td>Juurdepääsu piiramine kaughasartmängu veebilehtedele</td>
      <td>1) Taotlus;<br /></>2) Kriminaalmenetlus</td>
      <td>1) Taotlus;<br />2) Tsiviilmenetlus</td>
      <td>1) Taotlus;<br />2) Tsiviilmenetlus;<br />3) Kriminaalmenetlus</td>
    </tr>
  </tbody>
</table>    
    
        
<?php get_footer(); ?>