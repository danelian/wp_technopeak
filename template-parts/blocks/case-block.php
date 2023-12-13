<?php

/**
 * case-block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Load values and assing defaults.
$case_logo = get_field('case_logo');
$case_problem = get_field('case_problem');
$case_solution = get_field('case_solution');
$case_info = get_field('case_info');
$case_image = get_field('case_image');

$content_title = get_field('content_title');
$content_text = get_field('content_text');

?>

<div class="case-article">
  <div class="case-article__container">
    <div class="case-article__info">
      <div class="case-article__head">
        <h1 class="title"><?php the_title(); ?></h1>
        <img src="<?php the_field('case_logo'); ?>" alt="<?php the_title(); ?>">
      </div>
      <div class="row">
        <?php
        if( $case_problem ): ?>
          <div class="col">
            <h3><?php echo $case_problem['title']; ?></h3>
            <p><?php echo $case_problem['text']; ?></p>
          </div>
        <?php endif; ?>
        <?php
        if( $case_solution ): ?>
          <div class="col">
            <h3><?php echo $case_solution['title']; ?></h3>
            <p><?php echo $case_solution['text']; ?></p>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($case_info) { echo $case_info; } ?>
    </div>
    <div class="case-article__image" style="background-image: url('<?php the_field('case_image'); ?>');"></div>
  </div>
  <div class="case-article__content">
    <?php if ($content_title) { ?><h2 class="section-title"><?php echo $content_title; ?></h2><?php } ?>
    <?php if ($content_text) { echo $content_text; } ?>
  </div>
</div>