<section class="contactusbl">
  <div class="container">
    <div class="contactusbl__container">
      <div class="heading">
        <h2 class="section-title"><?php the_field('contactus_title', 'options'); ?></h2>
        <?php if (get_field('contactus_text', 'options')) : ?><p><?php the_field('contactus_text', 'options'); ?></p><?php endif; ?>
      </div>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="613fa80" title="Contact us for consultation"]'); ?>
      </div>
    </div>
  </div>
</section>