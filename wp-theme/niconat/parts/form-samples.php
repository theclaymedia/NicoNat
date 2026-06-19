<?php
/**
 * Finishes page — sample request form.
 * Renders the Contact Form 7 form when NN_CF7_SAMPLES is configured in
 * functions.php (the CF7 form body, including the finish multi-select widget,
 * is in wp-theme/README.md). Falls back to the styled mockup form otherwise.
 */
if ( NN_CF7_SAMPLES && function_exists( 'wpcf7' ) ) : ?>
  <div class="sample-form-wrap">
    <?php echo do_shortcode( NN_CF7_SAMPLES ); ?>
  </div>
<?php else : ?>
      <form class="sample-form" id="sampleForm" novalidate>
        <div class="sample-field">
          <label for="sf-name">Full Name</label>
          <input type="text" id="sf-name" name="name" placeholder="Jane Doe" required>
        </div>
        <div class="sample-field">
          <label for="sf-company">Company / Studio</label>
          <input type="text" id="sf-company" name="company" placeholder="Acme Design Co.">
        </div>
        <div class="sample-field">
          <label for="sf-email">Email Address</label>
          <input type="email" id="sf-email" name="email" placeholder="jane@studio.com" required>
        </div>
        <div class="sample-field">
          <label for="sf-phone">Phone</label>
          <input type="tel" id="sf-phone" name="phone" placeholder="(323) 000-0000">
        </div>

        <div class="sample-field full">
          <label>Finishes of Interest <span class="label-hint">&mdash; up to 3 per order</span></label>
          <div class="finish-select" id="finishSelect">
            <div class="finish-select-input">
              <div class="finish-chips" id="finishChips">
                <input type="text" class="finish-other" id="finishOther" placeholder="Selected finishes appear here — or type to add a custom one and press Enter">
              </div>
              <button type="button" class="finish-toggle" id="finishToggle" aria-haspopup="listbox" aria-expanded="false">
                Choose from list
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
            </div>
            <div class="finish-panel" id="finishPanel" hidden>
        <div class="finish-group">
          <h4>Metal Finishes</h4>
          <label class="finish-opt"><input type="checkbox" value="Blacked Steel (NN-M01)"> <span class="finish-opt-name">Blacked Steel</span> <span class="finish-opt-code">NN-M01</span></label>
          <label class="finish-opt"><input type="checkbox" value="Graphite (NN-M02)"> <span class="finish-opt-name">Graphite</span> <span class="finish-opt-code">NN-M02</span></label>
          <label class="finish-opt"><input type="checkbox" value="Satin Stainless Steel (NN-M03)"> <span class="finish-opt-name">Satin Stainless Steel</span> <span class="finish-opt-code">NN-M03</span></label>
          <label class="finish-opt"><input type="checkbox" value="Polished Stainless Steel (NN-M04)"> <span class="finish-opt-name">Polished Stainless Steel</span> <span class="finish-opt-code">NN-M04</span></label>
          <label class="finish-opt"><input type="checkbox" value="Satin Brass (NN-M05)"> <span class="finish-opt-name">Satin Brass</span> <span class="finish-opt-code">NN-M05</span></label>
          <label class="finish-opt"><input type="checkbox" value="Polished Brass (NN-M06)"> <span class="finish-opt-name">Polished Brass</span> <span class="finish-opt-code">NN-M06</span></label>
          <label class="finish-opt"><input type="checkbox" value="Satin Bronze (NN-M07)"> <span class="finish-opt-name">Satin Bronze</span> <span class="finish-opt-code">NN-M07</span></label>
          <label class="finish-opt"><input type="checkbox" value="Oil Rubbed Brass (NN-M08)"> <span class="finish-opt-name">Oil Rubbed Brass</span> <span class="finish-opt-code">NN-M08</span></label>
          <label class="finish-opt"><input type="checkbox" value="White Bronze (NN-M09)"> <span class="finish-opt-name">White Bronze</span> <span class="finish-opt-code">NN-M09</span></label>
          <label class="finish-opt"><input type="checkbox" value="Champagne (NN-M10)"> <span class="finish-opt-name">Champagne</span> <span class="finish-opt-code">NN-M10</span></label>
          <label class="finish-opt"><input type="checkbox" value="Satin Nickel (NN-M11)"> <span class="finish-opt-name">Satin Nickel</span> <span class="finish-opt-code">NN-M11</span></label>
          <label class="finish-opt"><input type="checkbox" value="Polished Nickel (NN-M12)"> <span class="finish-opt-name">Polished Nickel</span> <span class="finish-opt-code">NN-M12</span></label>
          <label class="finish-opt"><input type="checkbox" value="Polished Copper (NN-M13)"> <span class="finish-opt-name">Polished Copper</span> <span class="finish-opt-code">NN-M13</span></label>
          <label class="finish-opt"><input type="checkbox" value="Powder Coating (NN-M14)"> <span class="finish-opt-name">Powder Coating</span> <span class="finish-opt-code">NN-M14</span></label>
        </div>
        <div class="finish-group">
          <h4>Wood Finishes</h4>
          <label class="finish-opt"><input type="checkbox" value="White Oak (NN-W01)"> <span class="finish-opt-name">White Oak</span> <span class="finish-opt-code">NN-W01</span></label>
          <label class="finish-opt"><input type="checkbox" value="Natural Oak (NN-W02)"> <span class="finish-opt-name">Natural Oak</span> <span class="finish-opt-code">NN-W02</span></label>
          <label class="finish-opt"><input type="checkbox" value="White Oak Ceruse Natural (NN-W03)"> <span class="finish-opt-name">White Oak Ceruse Natural</span> <span class="finish-opt-code">NN-W03</span></label>
          <label class="finish-opt"><input type="checkbox" value="White Oak Bleached (NN-W04)"> <span class="finish-opt-name">White Oak Bleached</span> <span class="finish-opt-code">NN-W04</span></label>
          <label class="finish-opt"><input type="checkbox" value="Sycamore (NN-W05)"> <span class="finish-opt-name">Sycamore</span> <span class="finish-opt-code">NN-W05</span></label>
          <label class="finish-opt"><input type="checkbox" value="Natural Beech (NN-W06)"> <span class="finish-opt-name">Natural Beech</span> <span class="finish-opt-code">NN-W06</span></label>
          <label class="finish-opt"><input type="checkbox" value="Walnut (NN-W07)"> <span class="finish-opt-name">Walnut</span> <span class="finish-opt-code">NN-W07</span></label>
          <label class="finish-opt"><input type="checkbox" value="Mahogany (NN-W08)"> <span class="finish-opt-name">Mahogany</span> <span class="finish-opt-code">NN-W08</span></label>
          <label class="finish-opt"><input type="checkbox" value="Walnut Dark Umber (NN-W09)"> <span class="finish-opt-name">Walnut Dark Umber</span> <span class="finish-opt-code">NN-W09</span></label>
          <label class="finish-opt"><input type="checkbox" value="Rosewood Natural (NN-W10)"> <span class="finish-opt-name">Rosewood Natural</span> <span class="finish-opt-code">NN-W10</span></label>
          <label class="finish-opt"><input type="checkbox" value="Oak Ebonized (NN-W11)"> <span class="finish-opt-name">Oak Ebonized</span> <span class="finish-opt-code">NN-W11</span></label>
          <label class="finish-opt"><input type="checkbox" value="Dark Ebony (NN-W12)"> <span class="finish-opt-name">Dark Ebony</span> <span class="finish-opt-code">NN-W12</span></label>
        </div>
        <div class="finish-group">
          <h4>Partnership Collection</h4>
          <label class="finish-opt"><input type="checkbox" value="Stone (NN-C01)"> <span class="finish-opt-name">Stone</span> <span class="finish-opt-code">NN-C01</span></label>
          <label class="finish-opt"><input type="checkbox" value="Glass &amp; Mirror (NN-C02)"> <span class="finish-opt-name">Glass &amp; Mirror</span> <span class="finish-opt-code">NN-C02</span></label>
          <label class="finish-opt"><input type="checkbox" value="Full Grain Leather (NN-C03)"> <span class="finish-opt-name">Full Grain Leather</span> <span class="finish-opt-code">NN-C03</span></label>
          <label class="finish-opt"><input type="checkbox" value="Integrated Lighting (NN-C04)"> <span class="finish-opt-name">Integrated Lighting</span> <span class="finish-opt-code">NN-C04</span></label>
          <label class="finish-opt"><input type="checkbox" value="Acrylic (NN-C05)"> <span class="finish-opt-name">Acrylic</span> <span class="finish-opt-code">NN-C05</span></label>
        </div>
            </div>
            <input type="hidden" id="finishHidden" name="finishes">
          </div>
        </div>

        <div class="sample-field full">
          <label>Application</label>
          <div class="sample-radios">
            <label class="radio-opt"><input type="radio" name="application" value="Indoor" checked> <span>Indoor</span></label>
            <label class="radio-opt"><input type="radio" name="application" value="Outdoor"> <span>Outdoor</span></label>
            <label class="radio-opt"><input type="radio" name="application" value="Indoor &amp; Outdoor"> <span>Indoor &amp; Outdoor</span></label>
          </div>
        </div>
        <div class="sample-field full">
          <label for="sf-address">Shipping Address</label>
          <input type="text" id="sf-address" name="address" placeholder="Street, City, State, ZIP">
        </div>
        <div class="sample-field full">
          <label for="sf-notes">Project Details</label>
          <textarea id="sf-notes" name="notes" placeholder="Tell us a little about your project, timeline, and quantities..."></textarea>
        </div>
        <div class="sample-submit">
          <button type="submit" class="btn-primary">Request Samples <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></button>
        </div>
      </form>

      <div class="sample-confirm" id="sampleConfirm">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
        <h3>Thank you!</h3>
        <p>Your sample request has been received. Our team will be in touch within <strong>5&ndash;7 business days</strong> to confirm the details and ship your samples.</p>
      </div>
<?php endif; ?>
