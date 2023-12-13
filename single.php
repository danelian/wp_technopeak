<?php 
/*
Template Name: Single News
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
    <a href="<?php echo get_home_url(); ?>/news/" itemprop="item">
      <span itemprop="name">News</span>
    </a>
  </span>
  <span class="kb_sep"> / </span>
  <span class="kb_title"><?php the_title(); ?></span>
</div>

<section class="sn-section">
  <div class="container">
    <article class="article">
      <div class="image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
      <h1 class="title"><?php the_title(); ?></h1>
      <div class="meta"><?php the_time('d.m.Y') ?></div>
      <?php the_content(); ?>
    </article>

    <div class="seemore">
      <h2 class="section-title">See more</h2>

      <?php
        $query = new WP_Query( array(
          'posts_per_page' => 3,
          'orderby' => 'rand',
          'order'    => 'ASC'
        ));
      ?>

      <?php if ( $query->have_posts() ) : ?>

      <div class="news__cards">
      <?php while ( $query->have_posts() ) : $query->the_post();
        get_template_part('template-parts/content-ncard');
      endwhile; ?>
      </div>
      
      <?php wp_reset_postdata(); ?>
      <?php else : endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>