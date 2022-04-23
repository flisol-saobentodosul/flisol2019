<?php
/**
* Template Name: 404
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<?php get_header(); ?>
<section class="not-found">
	<div class="container">
		<div class="row">
			<div class="col s6 m6 l6">
				<div class="error-not-found">
					<h1>404</h1>
				</div>
			</div>
			<div class="col s6 m6 l6">
				<div class="mesage-not-found">
					<h1>Houston temos um problema</h1>
					<hr id="not-error">
					<h5>Não conseguimos encontrar o que você está procurando</h5>
					<a href="<?php echo get_permalink(34);?>">
						<h6>Vamos levar você para casa</h6>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>