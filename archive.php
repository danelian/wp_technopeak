<?php 
/*
Template Name: News
*/
get_header(); ?>

<section class="news">
  <div class="container">
    <div class="heading-row">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <?php if (get_field('p_news_text')) : ?><p><?php the_field('p_news_text'); ?></p><?php endif; ?>
    </div>

    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $query = new WP_Query( array(
        'posts_per_page' => 12,
        'paged' => $paged,
        'order' => 'ASC',
      ));
    ?>

    <?php if ( $query->have_posts() ) : ?>

    <div class="news__cards">
    <?php while ( $query->have_posts() ) : $query->the_post();
      get_template_part('template-parts/content-ncard');
    endwhile; ?>
    </div>

    <div class="pagination">
      <?php 
        echo paginate_links( array(
          'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
          'total'        => $query->max_num_pages,
          'current'      => max( 1, get_query_var( 'paged' ) ),
          'format'       => '?paged=%#%',
          'show_all'     => false,
          'type'         => 'plain',
          'end_size'     => 1,
          'mid_size'     => 2,
          'prev_next'    => true,
          'prev_text'    => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.69092 9.8999C2.69092 10.4522 3.13863 10.8999 3.69092 10.8999L17.6305 10.8999C18.1828 10.8999 18.6305 10.4522 18.6305 9.8999C18.6305 9.34762 18.1828 8.8999 17.6305 8.8999L3.69092 8.8999C3.13863 8.8999 2.69092 9.34762 2.69092 9.8999Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2.12067 10.5607C2.53512 10.9258 3.20707 10.9258 3.62152 10.5607L10.1813 4.78294C10.5958 4.4179 10.5958 3.82606 10.1813 3.46102C9.76688 3.09599 9.09493 3.09599 8.68048 3.46102L2.12067 9.2388C1.70623 9.60384 1.70623 10.1957 2.12067 10.5607Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2.12067 9.45051C2.53512 9.08547 3.20707 9.08547 3.62152 9.45051L10.1813 15.2283C10.5958 15.5933 10.5958 16.1852 10.1813 16.5502C9.76688 16.9152 9.09493 16.9152 8.68049 16.5502L2.12067 10.7724C1.70623 10.4074 1.70623 9.81555 2.12067 9.45051Z" fill="currentColor"/></svg>',
          'next_text'    => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.3096 10.1112C17.3096 9.55892 16.8619 9.11121 16.3096 9.11121L2.36997 9.1112C1.81768 9.1112 1.36997 9.55892 1.36997 10.1112C1.36997 10.6635 1.81768 11.1112 2.36997 11.1112L16.3096 11.1112C16.8619 11.1112 17.3096 10.6635 17.3096 10.1112Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.8798 9.45039C17.4654 9.08535 16.7934 9.08535 16.379 9.45039L9.81916 15.2282C9.40471 15.5932 9.40471 16.185 9.81916 16.5501C10.2336 16.9151 10.9056 16.9151 11.32 16.5501L17.8798 10.7723C18.2943 10.4073 18.2943 9.81543 17.8798 9.45039Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.8798 10.5606C17.4654 10.9256 16.7934 10.9256 16.379 10.5606L9.81916 4.78282C9.40471 4.41778 9.40471 3.82594 9.81916 3.4609C10.2336 3.09586 10.9056 3.09586 11.32 3.4609L17.8798 9.23868C18.2943 9.60372 18.2943 10.1956 17.8798 10.5606Z" fill="currentColor"/></svg>',
          'add_args'     => false,
          'add_fragment' => '',
        ));
      ?>
    </div>
    
    <?php wp_reset_postdata(); ?>
    <?php else : endif; ?>

  </div>
</section>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>