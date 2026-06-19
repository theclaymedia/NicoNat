# NicoNat WordPress Theme

Pixel-faithful WordPress port of the approved NicoNat HTML mockup
(homepage + Materials & Finishes catalog). Built as a self-contained classic
theme — no parent theme, no page builder, no plugin dependencies except
Contact Form 7 for the two forms.

## Install (≈5 minutes)

1. Zip the `niconat/` folder (or use the prebuilt `niconat.zip`).
2. WP Admin → **Appearance → Themes → Add New → Upload Theme** → activate.
3. Create a page titled **Finishes** with slug `finishes`
   (the `page-finishes.php` template applies automatically by slug).
4. **Settings → Permalinks** → choose "Post name" → Save.
5. The homepage renders via `front-page.php` automatically — no Reading
   settings required. (Optionally create a "Home" page and set it as the
   static front page; the template is used either way.)

That's it for the visual site. The two forms render as styled mockups until
you complete the Forms step below.

## Forms (Contact Form 7)

1. Install + activate **Contact Form 7**.
2. Create a form named **Contact** and replace its body with:

```
[text* your-name placeholder "Your Name"]
[email* your-email placeholder "Email Address"]
[text your-company placeholder "Company"]
[textarea your-message x4 placeholder "Tell us about your project..."]
[submit class:btn-primary "Send Message"]
```

3. Create a second form named **Sample Request** and replace its body with:

```
<div class="sample-field">
  <label>Full Name</label>
  [text* your-name placeholder "Jane Doe"]
</div>
<div class="sample-field">
  <label>Company / Studio</label>
  [text your-company placeholder "Acme Design Co."]
</div>
<div class="sample-field">
  <label>Email Address</label>
  [email* your-email placeholder "jane@studio.com"]
</div>
<div class="sample-field">
  <label>Phone</label>
  [tel your-phone placeholder "(323) 000-0000"]
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
            [hidden finishes]
          </div>
</div>
<div class="sample-field full">
  <label>Application</label>
  <div class="sample-radios">
    [radio application use_label_element default:1 "Indoor" "Outdoor" "Indoor & Outdoor"]
  </div>
</div>
<div class="sample-field full">
  <label>Shipping Address</label>
  [text your-address placeholder "Street, City, State, ZIP"]
</div>
<div class="sample-field full">
  <label>Project Details</label>
  [textarea your-notes placeholder "Tell us a little about your project, timeline, and quantities..."]
</div>
<div class="sample-submit">
  [submit class:btn-primary "Request Samples"]
</div>
```

4. In each form's **Mail** tab set *To:* `info@niconat.co` (or wherever
   requests should go) and add `[finishes]` and `[application]` to the Sample Request
   mail body so the selected finishes and indoor/outdoor choice are included.
5. Copy each form's shortcode and paste them into the two constants at the
   top of `functions.php`:

```php
define( 'NN_CF7_CONTACT', '[contact-form-7 id="123" title="Contact"]' );
define( 'NN_CF7_SAMPLES', '[contact-form-7 id="456" title="Sample Request"]' );
```

The multi-select chips widget keeps working inside CF7 — it writes the chosen
finishes into the `[hidden finishes]` field. Visitors can also type custom
finishes and press Enter.

Known cosmetic difference: CF7 renders submit buttons as `<input>`, so the
small arrow icon next to "Send Message" / "Request Samples" is not shown.
Everything else is pixel-identical.

## Architecture notes for devs

- `front-page.php` — entire homepage, content hardcoded 1:1 from the mockup.
- `page-finishes.php` — finishes catalog (35 swatches with data-attributes
  feeding the detail modal), applies by slug.
- `header.php` / `footer.php` — shared chrome. Header style (transparent vs
  solid) is controlled by which stylesheet loads, same as the mockup.
- `parts/` — CF7-or-fallback form parts + the swatch modal.
- `assets/css/main.css` — homepage styles, extracted verbatim from the mockup.
- `assets/css/finishes.css` — finishes/inner-page styles, copied verbatim.
- `assets/css/wp-extras.css` — only WP-specific additions (admin bar, CF7).
- `assets/js/` — mockup scripts, unchanged except two CF7-compat guards in
  `finishes.js`.
- Images ship inside the theme (hardcoded-content phase). A later phase can
  move content into ACF/Customizer if the client needs self-serve editing.


## Projects (Work) — dev follow-up

The mockup ships a static Work archive (`projects.html`) plus eight project
detail pages (`project-*.html`) so the client has something to review. In
WordPress these should be implemented as a **Projects custom post type**
(title, location, type, hero image, gallery, scope-of-work, body) rather than
hand-built page templates, with archive + single templates reusing the
`.project-*` styles already in `finishes.css`. The homepage "View Project" /
"View All Projects" buttons in `front-page.php` should then point at the CPT
permalinks. Until the CPT exists, those buttons are placeholders.

## Partnership Collection vendor links

The former "Custom Finishes" section is now the **Partnership Collection**.
Each partnership swatch carries a `data-vendors="Name|URL;Name|URL"` attribute;
the swatch modal renders these as outbound links. Vendor URLs live in
`page-finishes.php` — update them there if a partner's URL changes.
