<?php get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

<div class="default-page-style">
  <div class="container">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    <h1 class="section-title"><?php the_title(); ?></h1>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>