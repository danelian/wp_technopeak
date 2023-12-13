<?php 
/*
Template Name: Single Industry
*/
get_header(); ?>

<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

<?php the_content(); ?>

<?php get_template_part('template-section/contact-us'); ?>

<?php get_footer(); ?>