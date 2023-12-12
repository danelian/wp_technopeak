<?php 
/*
Template Name: About us
*/
get_header(); ?>

<div class="aboutus">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>

    <div class="aboutus-stats">
      <div class="aboutus-stats__content">
        <h2 class="section-title"><?php the_field('a_stats_title'); ?></h2>
        <?php if( have_rows('a_stats_texts') ): ?>
          <div class="row">
          <?php while( have_rows('a_stats_texts') ): the_row(); ?>
            <div class="line-content"><?php the_sub_field('text'); ?></div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php if( have_rows('a_digits') ): ?>
          <div class="digits">
          <?php while( have_rows('a_digits') ): the_row(); ?>
            <?php $digit = get_sub_field('digit'); ?>
            <p class="digit"><span><?php echo $digit['number']; ?></span><?php echo $digit['text']; ?></p>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="aboutus-stats__image" style="background-image: url('<?php the_field('a_stats_image'); ?>');"></div>
    </div>

    <div class="aboutus-indi">
      <h2 class="section-title"><?php the_field('a_indi_title'); ?></h2>
      <div class="aboutus-indi__container">

        <?php
        $a_indi_left = get_field('a_indi_left');
        if( $a_indi_left ): ?>
          <div class="aboutus-indi__left">
            <?php if ($a_indi_left['title']) : ?><h3><?php echo $a_indi_left['title']; ?></h3><?php endif; ?>
            <?php if ($a_indi_left['text']) : ?><p><?php echo $a_indi_left['text']; ?></p><?php endif; ?>
            <?php if ($a_indi_left['image']) : ?>
              <img src="<?php echo $a_indi_left['image']; ?>" alt="chart image">
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php
        $a_indi_center = get_field('a_indi_center');
        if( $a_indi_center ): ?>
          <div class="aboutus-indi__center">
            <?php if ($a_indi_center['percent']) : ?><h6><?php echo $a_indi_center['percent'] ?></h6><?php endif; ?>
            <?php if ($a_indi_center['image']) : ?>
              <img src="<?php echo $a_indi_center['image'] ?>" alt="chart image">
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if( have_rows('a_indi_right') ): ?>
          <div class="aboutus-indi__right">
          <?php while( have_rows('a_indi_right') ): the_row(); ?>
            <div class="point">
              <div class="point__icon"></div>
              <div class="point__text"><?php the_sub_field('text'); ?></div>
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div class="aboutus-benefits">
      <h2 class="section-title"><?php the_field('a_benefits_title'); ?></h2>
      <?php if( have_rows('a_benefits') ): ?>
        <div class="aboutus-benefits__list">
        <?php while( have_rows('a_benefits') ): the_row(); ?>
          <?php $item = get_sub_field('item'); ?>
          <div class="benefit">
            <?php if ($item['icon']) : ?><div class="benefit__icon"><img src="<?php echo $item['icon']; ?>" alt="icon"></div><?php endif; ?>
            <?php if ($item['title']) : ?><h2 class="benefit__title"><?php echo $item['title']; ?></h2><?php endif; ?>
            <?php if ($item['text']) : ?><div class="benefit__text"><?php echo $item['text']; ?></div><?php endif; ?>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>