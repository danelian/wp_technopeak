<a href="<?php the_permalink(); ?>" class="ccard">
  <h3 class="ccard__title"><?php the_title(); ?></h3>
  <?php
  $c_card_problem = get_field('c_card_problem');
  if( $c_card_problem ): ?>
    <div class="row">
      <h3><?php echo $c_card_problem['title']; ?></h3>
      <p><?php echo $c_card_problem['text']; ?></p>
    </div>
  <?php endif; ?>
  <?php
  $c_card_solution = get_field('c_card_solution');
  if( $c_card_solution ): ?>
    <div class="row">
      <h3><?php echo $c_card_solution['title']; ?></h3>
      <p><?php echo $c_card_solution['text']; ?></p>
    </div>
  <?php endif; ?>
  <div class="link-witharrow">
    inspect
    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
      <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
      <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
    </svg>            
  </div>
  <img src="<?php the_field('c_card_logo'); ?>" class="ccard__image" alt="<?php the_title(); ?>">
</a>