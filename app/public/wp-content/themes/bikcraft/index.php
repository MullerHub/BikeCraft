<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

  <h1><?php the_title();?> </h1>
  <?php the_contet();?>

  <?php endwhile; else: ?>
    <p><?php _e('sorry, no posts matches you criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>