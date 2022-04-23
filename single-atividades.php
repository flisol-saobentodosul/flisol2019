<?php get_header();
if(have_posts() ) { the_post();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="content-header-pages title-post-single" >
				<h1><?php the_title( '' ); ?></h1>
			</div>
		</div>
	</div>
	<div class="content-post-ativities">
		<div class="box-content-post-ativities">
			<?php
				   if(is_single() ){
					   the_content();
				   } else{
					   the_excerpt();
				   }
		?>
		</div>
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
<?php }
get_footer(); ?>