<?php
/**
* Template Name: Programações
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); 

$programacao = new WP_Query(array(
                'post_type' 			=> 'programacao',
                'posts_per_page' 	=> -1
  ));
if($programacao->have_posts()){
  $counter = 0;
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-header-pages">
          <h1><a target="_blank" href="<?php echo get_permalink(22); ?>" style="color: #000;">>_</a> Programação</h1>
			<br>
			<h5 style="color: #f1a719;">
				O evento e os certificados<span style="color: #000;">*</span> são gratuitos.
			</h5>
			
			<p>
				*Certificados emitidos apenas para participação presencial
			</p>
        </div>
      </div>
    </div>
    <div class="content-programacao">
      <div class="row">
        <div class="col-sm-5"> <!--  /manhã -->
          <h3>Manhã</h3>
          <?php while($programacao->have_posts()){
                    $programacao->the_post();
                    $post_id = get_the_ID();
                    $name_lecture = get_the_title('');
                    $minister = get_field('ministrante'); 
                    $hour = get_field('horario'); 
                    $resume = get_field('resumo'); 
                    $am = get_field('manha'); 
                    $minicurso = get_field('minicurso'); 
                    $local = get_field('local'); 
	  				$observacao = get_field('observacoes'); 
	  				$link_transmissao = get_field('link_transmissao');
	  				$material = get_field('slides');
                    ?>
            <?php if ($am === true) { ?>
              <!-- Box com o programacao -->
              <div class="box-programacao">
                <h5><?php echo $name_lecture ?></h5>
                <p>Ministrante: <?php echo $minister ?></p>
                <p>Local: <?php echo $local ?></p>
                <p>Início: <?php echo $hour ?></p>
				<p style="color: #f1a719;">
					<?php echo $observacao ?>
				</p>
				
				
                <p class="buttom-resume">
					 <?php if(isset($link_transmissao)){ ?>
					<a class="link-button" href="<?php echo $link_transmissao; ?>" target="_blank" style="color: #f1a719; font-weight: bold;font-size: 20px;">
						ASSISTIR
					</a>
					<?php } ?>
					   <?php if(isset($material)){ ?>
					<a class="link-button" href="<?php echo $material; ?>" target="_blank" style="font-weight: bold;font-size: 20px;color: rgba(0, 0, 0, 0.5);" download>
						DOWNLOAD SLIDES
					</a>
					<?php } ?>
                               
                </p>
				  <p class="buttom-resume">
					  <a class="link-button"  data-toggle="collapse" href="#resumeCollapse-<?php echo $post_id ?>" role="button" aria-expanded="false" aria-controls="resumeCollapse-<?php echo $post_id ?>">Resumo</a>
					  <?php if ($minicurso === true ) { ?>
						<a class="link-button" data-toggle="modal" data-target="#formIncricao"  onclick="minicurso('<?php echo $name_lecture; ?>')">Inscrição</a>
					  <?php } ?> 
				  </p>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="collapse multi-collapse" id="resumeCollapse-<?php echo $post_id ?>">
                      <div class="card card-body">
                        <?php echo $resume; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  function minicurso(mcurso) {
                    var assunto = mcurso;
                    document.getElementById('minicurso-assunto').value=(assunto);
                  }
                </script>
              <!-- ./Box com o programacao -->
            </div>
           <?php  } 
              } ?>
        </div> <!--  ./Manhã -->
        <div class="col-sm-5"> <!--  /Tarde -->
          <h3>Tarde</h3>
          <?php while($programacao->have_posts()) {
                    $programacao->the_post();
                    $post_id = get_the_ID();
                    $name_lecture = get_the_title('');
                    $minister = get_field('ministrante'); 
                    $hour = get_field('horario'); 
                    $resume = get_field('resumo'); 
                    $pm = get_field('tarde'); 
                    $minicurso = get_field('minicurso'); 
                    $local = get_field('local'); 
	  				$observacao = get_field('observacoes'); 
	  				$link_transmissao = get_field('link_transmissao');
	  				$material = get_field('slides');
                    ?>
            <?php if ($pm === true) { ?>
              <!-- Data Palestras -->
              <!-- Box com o programacao -->
              <div class="box-programacao">
                <h5><?php echo $name_lecture ?></h5>
                <p>Ministrante: <?php echo $minister ?></p>
                <p>Local: <?php echo $local ?></p>
                <p>Início: <?php echo $hour ?></p>
				
				<p style="color: #f1a719;">
					<?php echo $observacao ?>
				</p>
		
               <p class="buttom-resume">
					 <?php if(isset($link_transmissao)){ ?>
					<a class="link-button" href="<?php echo $link_transmissao; ?>" target="_blank" style="color: #f1a719; font-weight: bold;font-size: 20px;">
						ASSISTIR
					</a>
					<?php } ?>
					   <?php if(isset($material)){ ?>
					<a class="link-button" href="<?php echo $material; ?>" target="_blank" style="font-weight: bold;font-size: 20px;color: rgba(0, 0, 0, 0.5);" download>
						DOWNLOAD SLIDES
					</a>
					<?php } ?>
                               
                </p>
				  <p class="buttom-resume">
					  <a class="link-button"  data-toggle="collapse" href="#resumeCollapse-<?php echo $post_id ?>" role="button" aria-expanded="false" aria-controls="resumeCollapse-<?php echo $post_id ?>">Resumo</a>
					  <?php if ($minicurso === true ) { ?>
						<a class="link-button" data-toggle="modal" data-target="#formIncricao"  onclick="minicurso('<?php echo $name_lecture; ?>')">Inscrição</a>
					  <?php } ?> 
				  </p>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="collapse multi-collapse" id="resumeCollapse-<?php echo $post_id ?>">
                      <div class="card card-body">
                        <?php echo $resume; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  function minicurso(mcurso) {
                    var assunto = mcurso;
                    document.getElementById('minicurso-assunto').value=(assunto);
                  }
                </script>
              <!-- ./Box com o programacao -->
            </div>
           <?php  } 
              } ?>
        </div> <!--  ./Tarde -->
      </div>    
    </div>
  </div>
<!-- Modal -->
  <div class="modal fade" id="formIncricao" tabindex="-1" role="dialog" aria-labelledby="formIncricao" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formPatrocinadorLabel">EFETUAR INSCRIÇÃO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <?php echo do_shortcode('[contact-form-7 id="40" title="Inscrição"]') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
  } else {
?>
 <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content-header-pages">
          <h1><a target="_blank" href="<?php echo get_permalink(22); ?>" style="color: #000;">>_</a> Programação</h1>
        </div>
      </div>
    </div>
    <div class="content-programacao">
      <div class="row">
        <h6 class="not-content">Ainda não possuímos uma programção. Aguarde em breve as novidades!</h6>
      </div>    
    </div>
  </div>
 
<?php 
  }
get_footer(); ?>
 