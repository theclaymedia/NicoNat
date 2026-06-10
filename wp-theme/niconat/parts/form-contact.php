<?php
/**
 * Homepage contact form.
 * Renders the Contact Form 7 form when NN_CF7_CONTACT is configured in
 * functions.php; otherwise falls back to the styled mockup form (non-sending),
 * so the theme demos correctly out of the box.
 */
if ( NN_CF7_CONTACT && function_exists( 'wpcf7' ) ) : ?>
  <div class="contact-form anim anim-right">
    <?php echo do_shortcode( NN_CF7_CONTACT ); ?>
  </div>
<?php else : ?>
  <form class="contact-form anim anim-right" onsubmit="event.preventDefault();">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Email Address" required>
        <input type="text" placeholder="Company">
        <textarea placeholder="Tell us about your project..." rows="4"></textarea>
        <button type="submit" class="btn-primary">Send Message <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></button>
      </form>
<?php endif; ?>
