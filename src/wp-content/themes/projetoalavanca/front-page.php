<?php
/*
* Template Name: Frontpage Template
*/
?>
<?php //get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<!-- <?php query_posts(array('post_type' => 'page','post_parent'=>get_the_ID())); ?> -->
<?php while (have_posts()) : the_post(); ?>
 <div class="artigo">
   <?php get_template_part('templates/content-page', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
 </div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
