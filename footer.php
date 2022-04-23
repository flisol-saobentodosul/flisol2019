      <footer id="footer">
        <p>
          flisol@saobentodosul:~/<?php if(get_permalink() != get_home_url() . '/home') is_home() ? bloginfo('description') : wp_title(''); ?>$ >_
        </p>
        <h5>&#8811;</h5>
      </footer>
	  </div> <!-- ./column of body page -->
  </div> <!-- ./Row -->
</div> <!-- ./corpo -->

  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '40' == event.detail.contactFormId ) {
        ga( 'send', 'event', 'Contact Form', 'submit' );
    }
}, false );
</script>
<script>
document.addEventListener( '.wpcf7mail .sent', function( event ) {
	alert("Enviado com sucesso");
    location = 'https://saobentodosul.flisol.org.br/';
}, false );
</script>
</body> <!-- ./body -->
</html>

