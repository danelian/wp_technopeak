<?php 
/*
Template Name: Industry
*/
get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

<section class="industry">
  <div class="container">
    <div class="heading-row">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php if (get_field('industry_text')) : ?><p><?php the_field('industry_text'); ?></p><?php endif; ?>
    </div>
    <?php
    $select_industry = get_field('select_industry');
    if( $select_industry ): ?>
      <div class="industry__cards">
      <?php foreach( $select_industry as $industry_post ): 
          $permalink = get_permalink( $industry_post->ID );
          $title = get_the_title( $industry_post->ID );
          $i_card_icon = get_field( 'i_card_icon', $industry_post->ID );
          $i_card_text = get_field( 'i_card_text', $industry_post->ID );
          ?>
          <a href="<?php echo esc_url($permalink); ?>" class="icard">
            <img src="<?php echo $i_card_icon; ?>" class="icard__icon" alt="icon">
            <h2 class="icard__title"><?php echo esc_html( $title ); ?></h2>
            <?php if ($i_card_text) { ?><p><?php echo esc_html($i_card_text); ?></p><?php } ?>
            <div class="link-witharrow">
              inspect
              <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
                <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
                <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
              </svg>            
            </div>
          </a>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="s-clients">
  <div class="container">
    <?php if (get_field('i_clients_title')) : ?><h2 class="section-title"><?php the_field('i_clients_title'); ?></h2><?php endif; ?>
    <?php if( have_rows('i_clients') ): ?>
      <div class="clients__list">
      <?php while( have_rows('i_clients') ): the_row(); ?>
      <div class="col">
        <img src="<?php the_sub_field('logo'); ?>" alt="logo">
      </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>