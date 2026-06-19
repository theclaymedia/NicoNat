<?php
/**
 * Swatch detail modal — output on the finishes page only (see footer.php).
 */
?>
  <!-- SWATCH MODAL -->
  <div class="swatch-modal" id="swatchModal" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Finish detail">
    <div class="swatch-modal-content">
      <button class="swatch-modal-close" id="modalClose" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18"/><path d="M6 6l12 12"/></svg>
      </button>
      <img class="swatch-modal-img" id="modalImg" alt="">
      <div class="swatch-modal-meta">
        <div class="swatch-modal-cat" id="modalCat"></div>
        <h2 class="swatch-modal-name" id="modalName"></h2>
        <div class="swatch-modal-code" id="modalCode"></div>
        <p class="swatch-modal-desc" id="modalDesc"></p>
        <div class="swatch-modal-vendors" id="modalVendors" hidden>
          <span class="vendors-label">Sourced in partnership with</span>
          <div class="vendors-links" id="modalVendorLinks"></div>
        </div>
        <button type="button" class="btn-primary" id="modalRequest">
          Request a Sample
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
        </button>
      </div>
    </div>
  </div>
