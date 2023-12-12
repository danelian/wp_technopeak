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
      <h2 class="section-title">Our advantages</h2>
      <div class="aboutus-benefits__list">
        <div class="benefit">
          <div class="benefit__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-benefits-icon-01.svg" alt="">
          </div>
          <h2 class="benefit__title">Scoring</h2>
          <div class="benefit__text">
            A credit score or credit score is an assessment in the form of a number that reflects a person or debtor, about the possibility of you paying off credit in the next loan application.
          </div>
        </div>
        <div class="benefit">
          <div class="benefit__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-benefits-icon-02.svg" alt="">
          </div>
          <h2 class="benefit__title">Benefit</h2>
          <div class="benefit__text">
            Your credit score can determine how much your loan and credit card applications are approved. Not only that, with a credit score you are given the freedom to choose.
          </div>
        </div>
        <div class="benefit">
          <div class="benefit__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-benefits-icon-01.svg" alt="">
          </div>
          <h2 class="benefit__title">Understand your credit</h2>
          <div class="benefit__text">
            Credit can be complicated. But it doesn't have to be. Learning responsible credit behavior can set you up to reach your goals. Find out what's in your Equifax credit scores are calculate.
          </div>
        </div>
        <div class="benefit">
          <div class="benefit__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-benefits-icon-02.svg" alt="">
          </div>
          <h2 class="benefit__title">Reach your financial goals</h2>
          <div class="benefit__text">
            Life is a series of milestones, and when it comes to finances, knowledge is your most valuable asset. If you're planning to buy a home, purchase a car, or take out a loan.
          </div>
        </div>
        <div class="benefit">
          <div class="benefit__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-benefits-icon-01.svg" alt="">
          </div>
          <h2 class="benefit__title">Personal credit</h2>
          <div class="benefit__text">
            Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.
          </div>
        </div>
        <div class="benefit">
          <div class="benefit__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-benefits-icon-02.svg" alt="">
          </div>
          <h2 class="benefit__title">Business credit</h2>
          <div class="benefit__text">
            Every business is singular, and every customer interaction is a highly personalized 1:1 proposition. But in each instance, our goal is simple.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>