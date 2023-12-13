<?php 
/*
Template Name: Single Industry
*/
get_header(); ?>

<div class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
  <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <a href="http://localhost:8888/technopeak" itemprop="item">
      <span itemprop="name">Home</span>
    </a>
  </span>
  <span class="kb_sep"> / </span>
  <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
    <a href="<?php echo get_home_url(); ?>/industry/" itemprop="item">
      <span itemprop="name">Industry</span>
    </a>
  </span>
  <span class="kb_sep"> / </span>
  <span class="kb_title"><?php the_title(); ?></span>
</div>

<?php the_content(); ?>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>