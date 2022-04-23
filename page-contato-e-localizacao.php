<?php
/**
* Template Name: Contato e Localização
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <div class="content-header-pages">
        <h1>>_ Contato e Localização</h1>
      </div>
    </div>
  </div>
  <div class="content-contact">
    <div class="row">
      <div class="col-sm-12">
        <div class="conctact-form">
          <?php
            echo do_shortcode('[contact-form-7 id="38" title="Contato"]')
          ?>
        </div>
        <div class="content-address">
          <p> Av. Pref. Ornith Bollmann, 561 - Brasília, São Bento do Sul - SC, 89282-425</p>
        </div>
      </div>
    </div>
  </div>
  <div class="map">
      <iframe src="https://embed.waze.com/iframe?zoom=16&lat=-26.2225592&lon=-49.3469141&pin=1&desc=1" width="100%" height="520">
      </iframe>
  </div>
</div>

<?php get_footer(); ?> 