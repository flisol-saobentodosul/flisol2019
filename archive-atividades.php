<?php
/**
* Template Name: Atividades
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); 
$atividades = new WP_Query(array(
                'post_type' 			=> 'atividades',
                'posts_per_page' 	=> -1
  ));
if($atividades->have_posts()){
  $counter = 0;
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-header-pages">
          <h1>>_ Atividades</h1>
        </div>
      </div>
    </div>
    <div class="content-patrocinadores">
      <div class="row">
      <?php 
        while($atividades->have_posts()){
          $atividades->the_post();
          $post_id = get_the_ID();
          $post_thumbnail = get_the_post_thumbnail($post_id);
          $name_sponsor = get_the_title('');
          $link = get_field('contato'); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      ?>
        <div class="col-sm-4 ">
			
				<div class="box-atctivities">
						<div class="image-summary">
							<?php if(!is_single() ) { the_post_thumbnail('282 img-responsive'); }?>
						</div>
						<div class="text-news">
							<h2 class="title-post"><?php the_title(''); ?></h2>
							<div class="summary">
								<?php if( is_single() ){
										  the_content();
	  									} else { 
										  the_excerpt();
	  								} ?>
							</div>
						</div>
						 <a class="link-button" href="<?php the_permalink(); ?>">
							Leia Mais >_
						 </a>
				</div>
			
			
        </div>
      <?php } ?>
      </div>
    </div>

  </div>
  <?php
  } else { ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-header-pages">
          <h1>>_ Atividades</h1>
        </div>
      </div>
    </div>

  <?php
  }
  get_footer(); ?>
