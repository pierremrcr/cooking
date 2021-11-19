<?php get_header(); ?>
<main>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail( 'medium' ); ?>
			<h1 class="title">
				<?php the_title(); ?>
			</h1>

			<div class="content">
				<?php the_content(); ?>
				<p>
					<strong>Ingrédients :</strong> 
					<?php echo get_post_meta( get_the_ID(), 'liste_des_ingredients', true ); ?>
				</p>

				<p>
					<strong>Temps de cuisson :</strong>
					<?php echo get_post_meta( get_the_ID(), 'temps_de_cuisson', true ); ?> 
				</p>

				<p>
					<strong>Etapes :</strong>
					<?php echo get_post_meta( get_the_ID(), 'etapes', true ); ?> 
				</p>

			</div>

		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>