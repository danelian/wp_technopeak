<?php 
/*
Template Name: Single Services
*/
get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

<?php the_content(); ?>

<section class="s-clients" id="s-clients">
  <div class="container">
    <h2 class="section-title">Clients</h2>
    <div class="clients__list">
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-01.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-02.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-03.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-04.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-05.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-01.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-02.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-03.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-04.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-05.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-01.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-02.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-03.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-04.jpg" alt="">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-list-05.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="container">
    <div class="wrapper">
      <h2 class="section-title">Lorem ipsum</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </div>
  </div>
</section>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>