<?php get_header(); ?>

<h1>Nos dernières recettes</h1>

<main id="accueil">
 
	<?php $loop = new WP_Query( array( 'post_type' => 'recette', 'posts_per_page' => '10' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


  <article>
  	<a href="<?php the_permalink(); ?>">
       <?php the_post_thumbnail('medium'); ?>
       <h3><?php the_title() ?></h3>
   </a>
       <?php the_excerpt(); ?>
       <div>
       	<a href="<?php the_permalink(); ?>">
       	Découvrir la recette
       </a>
   </div>
            
  </article>   

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>



