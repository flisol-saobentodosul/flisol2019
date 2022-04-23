<?php
/**
* Template Name: Palestrantes
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); 
$palestrante = new WP_Query(array(
                'post_type' 			=> 'palestrante',
                'posts_per_page' 	=> -1
  ));
if($palestrante->have_posts()){
  $counter = 0;
?>
<div class="container">
  <div class="content-header-pages">
    <h1>>_ Palestrantes</h1>
  </div>
  <div class="row">
    <?php while($palestrante->have_posts()){
          $palestrante->the_post();
          $post_id = get_the_ID();
          $post_thumbnail = get_the_post_thumbnail($post_id);
          $name_speaker = get_the_title('');
          $form = get_field('formacao-especialidade'); 
          $company = get_field('instituicao-empresa'); 
          $resume = get_field('resumo_palestrante'); 
          $am = get_field('manha'); 
          ?>
    <div class="col-sm-6 mb">
      
      <div class="box-palestrante">
        <div class="box-img-palestrante">
          <?php echo $post_thumbnail; ?>
        </div>
        <div class="box-info-palestrante">
          <h5><?php echo $name_speaker; ?></h5>
          <p>Formação/Especialidade: <?php echo $form; ?></p>
          <p>Instituição/Empresa: <?php echo $company;?></p>
          <p id="buttom-resume">
            <a class="link-button" data-toggle="collapse" href="#resumeSpeaker-<?php echo $post_id ?>" role="button" aria-expanded="false" aria-controls="resumeSpeaker">
              Sobre
            </a>
          </p>
          <div class="collapse" id="resumeSpeaker-<?php echo $post_id ?>">
            <div class="card card-body">
              <?php echo $resume ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
 <!--  <div class="content-button-form">
    <a class="link-button" data-toggle="modal" data-target="#exampleModal">
      Seja um Palestrante
    </a>
  </div> -->

  <!-- Modal -->
  <?php
  } else {
  ?>
  <div class="container">
  <div class="content-header-pages">
    <h1>>_ Palestrantes</h1>
  </div>
  <div class="row">
    <h6 class="not-content">Não possuímos nenhum palestrante no momento</h6>
  </div>
  <?php
  }
  get_footer(); ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <a class="link-button danger" data-dismiss="modal">Cancelar</a>
          <a class="link-button success">Enviar</a>
        </div>
      </div>
    </div>
  </div>
</div>