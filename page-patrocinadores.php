<?php
/**
* Template Name: Patrocinadores
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); 
$patrocinador = new WP_Query(array(
                'post_type' 			=> 'patrocinador',
                'posts_per_page' 	=> -1
  ));
if($patrocinador->have_posts()){
  $counter = 0;
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-header-pages">
          <h1>>_ Patrocinadores</h1>
        </div>
      </div>
    </div>
    <div class="content-patrocinadores">
      <div class="row">
      <?php 
        while($patrocinador->have_posts()){
          $patrocinador->the_post();
          $post_id = get_the_ID();
          $post_thumbnail = get_the_post_thumbnail($post_id);
          $name_sponsor = get_the_title('');
          $link = get_field('contato'); 
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      ?>
        <div class="col-sm-4 ">
			<div class="box-partners">
          <a href="<?php echo $link ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $name_sponsor ?>" target="_blank">
            <div class="logo-patrocinador" style="background-image: url(<?php echo $featured_img_url  ?>)"></div>
          </a>
			<?php
		  if ( have_rows('midias_sociais') ) { ?>
			<ul class="social-media">
				<?php while( have_rows('midias_sociais')) {
			  the_row(); 
			  $image = get_sub_field('icone');
			  $link = get_sub_field('link');
				?>
				<?php if( $link ){ ?>
				<a href="<?php echo $link; ?>" title="<?php echo $link ?>" data-toggle="tooltip" data-placement="top" target="_blank">
					<?php } ?>

					<img class="image-social-media" src="<?php echo $image; ?>" alt="<?php echo $link ?>"/>

					<?php if( $link ) { ?>
				</a>
				<?php } ?>
				<?php } ?>
			</ul>

			<?php  } ?>
			</div>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="content-button-form">
      <a class="link-button" data-toggle="modal" data-target="#formPatrocinador">
        Seja um Patrocinador
      </a>
    </div>
  </div>
  <?php
  } else { ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-header-pages">
          <h1>>_ Patrocinadores</h1>
        </div>
      </div>
    </div>
    <div class="content-patrocinadores">
      <div class="row">
        <h6 class="not-content">Ainda não há patrocinadores! </h6>
      </div>
      <div class="content-button-form">
        <a class="link-button" data-toggle="modal" data-target="#formPatrocinador">
        Seja um Patrocinador
      </a>
    </div>
  </div>
  <?php
  }
  get_footer(); ?>
  <!-- Modal -->
  <div class="modal fade" id="formPatrocinador" tabindex="-1" role="dialog" aria-labelledby="formPatrocinador" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formPatrocinadorLabel">SEJA UM PATROCINADOR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <?php echo do_shortcode('[contact-form-7 id="39" title="Patrocinador"]') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>