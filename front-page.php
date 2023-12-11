<?php 
/**
 * Template Name: Home
 */
get_header(); ?>

<section class="hero">
  <div class="container">
    <div class="hero__container">
      <h1 class="page-title"><?php the_field('hero_title'); ?></h1>
      <p><?php the_field('hero_text'); ?></p>
      <?php 
      $hero_link = get_field('hero_link');
      if( $hero_link ): 
          $hero_link_url = $hero_link['url'];
          $hero_link_title = $hero_link['title'];
          $hero_link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
          ?>
          <a class="button" href="<?php echo esc_url( $hero_link_url ); ?>" target="<?php echo esc_attr( $hero_link_target ); ?>">
            <?php echo esc_html( $hero_link_title ); ?>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.51346 1.50002L17.0135 1.50002C17.8419 1.50002 18.5135 2.17159 18.5135 3.00002L18.5135 16.5C18.5135 17.3284 17.8419 18 17.0135 18C16.185 18 15.5135 17.3284 15.5135 16.5V6.62134L3.93198 18.2028C3.34619 18.7886 2.39645 18.7886 1.81066 18.2028C1.22487 17.617 1.22487 16.6673 1.81066 16.0815L13.3921 4.50002L3.51346 4.50002C2.68503 4.50002 2.01346 3.82844 2.01346 3.00002C2.01346 2.17159 2.68503 1.50002 3.51346 1.50002Z" fill="currentColor"/>
            </svg>
          </a>
      <?php endif; ?>

      <?php if( have_rows('hero_benefits') ): ?>
        <div class="hero__benefits">
        <?php while( have_rows('hero_benefits') ): the_row(); ?>
          <?php $benefit = get_sub_field('benefit'); ?>
          <div class="hero-benefit">
            <div class="hero-benefit__head">
              <div class="hero-benefit__icon">
                <img src="<?php echo $benefit['icon']; ?>" alt="">
              </div>
              <h2 class="hero-benefit__title"><?php echo $benefit['title']; ?></h2>
            </div>
            <div class="hero-benefit__text"><?php echo $benefit['text']; ?></div>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <img src="<?php the_field('hero_bg_desktop'); ?>" class="frontpage-desktop-bg" alt="background image">
  <img src="<?php the_field('hero_bg_mobile'); ?>" class="frontpage-mobile-bg" alt="background image">
</section>

<section class="aboutbl">
  <div class="container">
    <div class="aboutbl__container">
      <div class="aboutbl__col">
        <h2 class="section-title"><?php the_field('aboutbl_details_title'); ?></h2>
        <?php if( have_rows('aboutbl_details') ): ?>
          <div class="aboutbl__details">
          <?php $count = 0; while( have_rows('aboutbl_details') ): the_row(); ?>
            <?php $detail = get_sub_field('detail'); $count++; ?>
            <div class="aboutbl-detail">
              <div class="aboutbl-detail__number"><?php echo $count; ?></div>
              <div class="aboutbl-detail__content">
                <h3><?php echo $detail['title']; ?></h3>
                <p><?php echo $detail['text']; ?></p>
              </div>
              <img src="<?php echo $detail['image']; ?>" class="aboutbl-detail__image" alt="<?php $detail['title']; ?>">
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="aboutbl__col">
        <h2 class="section-title"><?php the_field('aboutbl_advantages_title'); ?></h2>
        <?php if( have_rows('aboutbl_advantages') ): ?>
          <div class="aboutbl__benefits">
          <?php while( have_rows('aboutbl_advantages') ): the_row(); ?>
            <?php $advantage = get_sub_field('advantage'); ?>
            <div class="benefit">
              <div class="benefit__icon">
                <img src="<?php echo $advantage['icon']; ?>" alt="">
              </div>
              <h2 class="benefit__title"><?php echo $advantage['title']; ?></h2>
              <div class="benefit__text"><?php echo $advantage['text']; ?></div>
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="fclients">
  <div class="container">
    <div class="heading">
      <h2 class="section-title"><?php the_field('fclients_title'); ?></h2>
    </div>
    <div class="line-decor"></div>
    <?php if( have_rows('fclients_list') ): ?>
      <div class="fclients__list">
      <?php while( have_rows('fclients_list') ): the_row(); ?>
        <div class="point">
          <div class="point__icon"></div>
          <div class="point__text"><?php the_sub_field('text'); ?></div>
        </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="newsbl">
  <div class="container">
    <div class="heading">
      <h2 class="section-title"><?php the_field('news_title'); ?></h2>
      <?php if (get_field('news_link')) : ?>
        <a href="<?php the_field('news_link'); ?>" class="button-icon-arrow">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.51346 1.50002L17.0135 1.50002C17.8419 1.50002 18.5135 2.17159 18.5135 3.00002L18.5135 16.5C18.5135 17.3284 17.8419 18 17.0135 18C16.185 18 15.5135 17.3284 15.5135 16.5V6.62134L3.93198 18.2028C3.34619 18.7886 2.39645 18.7886 1.81066 18.2028C1.22487 17.617 1.22487 16.6673 1.81066 16.0815L13.3921 4.50002L3.51346 4.50002C2.68503 4.50002 2.01346 3.82844 2.01346 3.00002C2.01346 2.17159 2.68503 1.50002 3.51346 1.50002Z" fill="currentColor"/>
          </svg>
        </a>
      <?php endif; ?>
    </div>
    <?php
      global $post;
      $query = new WP_Query( [
        'posts_per_page' => 6,
        'orderby'        => 'ASC',
      ] );
      if ( $query->have_posts() ) { ?>
        <div class="news__cards">
        <?php while ( $query->have_posts() ) {
          $query->the_post();
          get_template_part('template-parts/content-ncard');
        } ?>
        </div>
      <?php } else {
        // Постов не найдено
      }
      wp_reset_postdata(); // Сбрасываем $post
      ?>
  </div>
</section>
	
<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>