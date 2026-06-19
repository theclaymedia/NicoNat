<?php
/**
 * Template Name: Finishes
 * Auto-applies to the page with slug "finishes".
 */
get_header();
?>

  <!-- PAGE HERO -->
  <section class="fin-hero">
    <div class="container">
      <div class="fin-breadcrumb">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span class="sep">/</span>
        <span class="current">Materials &amp; Finishes</span>
      </div>
      <div class="section-label">Beautiful Finishes</div>
      <h1>Materials &amp; <span>Finishes</span></h1>
      <p class="fin-hero-intro">Every finish below can be specified as shown or matched bespoke &mdash; we meticulously replicate finish, tone, and texture to ensure a seamless, elevated result across every metal, wood, and custom application. Click any swatch to view details and request a physical sample from our LA shop.</p>
    </div>
  </section>

  <!-- CATEGORY QUICK-NAV -->
  <nav class="fin-tabs" aria-label="Jump to finish category">
    <a href="#metal" class="fin-tab">Metal Finishes</a>
    <a href="#wood" class="fin-tab">Wood Finishes</a>
    <a href="#custom" class="fin-tab">Partnerships</a>
  </nav>

  <section id="metal" class="fin-swatches">
    <div class="container">
      <div class="fin-swatches-head anim">
        <div class="section-label">Metal Finishes</div>
        <h2 class="section-title">The <span>Metal</span> Collection</h2>
        <p>Brushed, polished, blackened, and patinated metals — each finish hand-developed in our in-house metal shop.</p>
      </div>
      <div class="swatch-grid">

        <figure class="swatch" tabindex="0" role="button" aria-label="View Blacked Steel"
                data-name="Blacked Steel" data-code="NN-M01" data-category="Metal Finish"
                data-desc="Blacked Steel is a rich, dark metal finish created through a controlled oxidation process that enhances the natural character of the steel. Its deep charcoal-to-black tones and subtle variations provide an industrial yet sophisticated appearance, making it a popular choice for luxury interiors, architectural elements, and custom furnishings." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/blacked_steel.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/blacked_steel.jpg'); ?>" alt="Blacked Steel" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Blacked Steel</h3><span class="swatch-code">NN-M01</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Graphite"
                data-name="Graphite" data-code="NN-M02" data-category="Metal Finish"
                data-desc="Graphite Finish features a sleek, contemporary dark gray tone with subtle metallic depth and a refined sheen. Its sophisticated appearance combines the elegance of polished metal with the understated character of charcoal hues, making it a versatile choice for modern luxury interiors, architectural details, and custom metalwork." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/graphite.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/graphite.jpg'); ?>" alt="Graphite" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Graphite</h3><span class="swatch-code">NN-M02</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Satin Stainless Steel"
                data-name="Satin Stainless Steel" data-code="NN-M03" data-category="Metal Finish"
                data-desc="Satin Stainless Steel offers a clean, contemporary appearance with a soft brushed texture and low-reflective sheen. Known for its durability and timeless appeal, this finish provides a refined balance between industrial strength and modern elegance." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_stainless_steel.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_stainless_steel.jpg'); ?>" alt="Satin Stainless Steel" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Satin Stainless Steel</h3><span class="swatch-code">NN-M03</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Polished Stainless Steel"
                data-name="Polished Stainless Steel" data-code="NN-M04" data-category="Metal Finish"
                data-desc="Polished Stainless Steel features a brilliant, mirror-like surface that reflects light beautifully, creating a sleek and sophisticated aesthetic. Its highly refined finish enhances the natural beauty of the metal while offering exceptional durability." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_stainless_steel.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_stainless_steel.jpg'); ?>" alt="Polished Stainless Steel" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Polished Stainless Steel</h3><span class="swatch-code">NN-M04</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Satin Brass"
                data-name="Satin Brass" data-code="NN-M05" data-category="Metal Finish"
                data-desc="Satin Brass showcases a warm golden hue with a soft brushed texture that delivers understated elegance and timeless sophistication. Its muted sheen offers a refined alternative to highly polished metals." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_brass.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_brass.jpg'); ?>" alt="Satin Brass" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Satin Brass</h3><span class="swatch-code">NN-M05</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Polished Brass"
                data-name="Polished Brass" data-code="NN-M06" data-category="Metal Finish"
                data-desc="Polished Brass features a rich, radiant golden finish with a brilliant reflective surface that exudes luxury and elegance. Its timeless appearance adds warmth, sophistication, and visual impact to any space." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_brass.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_brass.jpg'); ?>" alt="Polished Brass" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Polished Brass</h3><span class="swatch-code">NN-M06</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Satin Bronze"
                data-name="Satin Bronze" data-code="NN-M07" data-category="Metal Finish"
                data-desc="Satin Bronze features a rich, warm brown tone with subtle golden undertones and a soft brushed texture. Its refined, low-luster finish offers a perfect balance of sophistication and character, bringing depth and timeless elegance." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_bronze.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_bronze.jpg'); ?>" alt="Satin Bronze" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Satin Bronze</h3><span class="swatch-code">NN-M07</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Oil Rubbed Brass"
                data-name="Oil Rubbed Brass" data-code="NN-M08" data-category="Metal Finish"
                data-desc="Oil Rubbed Brass features deep bronze-brown tones with subtle warm brass highlights that become more pronounced over time. This finish offers a rich, aged appearance with excellent durability, making it ideal for interior applications such as decorative metalwork, furnishings, and architectural accents." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/oil_rubbed_brass.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/oil_rubbed_brass.jpg'); ?>" alt="Oil Rubbed Brass" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Oil Rubbed Brass</h3><span class="swatch-code">NN-M08</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View White Bronze"
                data-name="White Bronze" data-code="NN-M09" data-category="Metal Finish"
                data-desc="White Bronze features a soft silver-gray tone with subtle warmth and depth, offering a sophisticated alternative to traditional stainless steel or chrome finishes. Known for its durability and resistance to wear, this finish is well-suited for both interior and exterior applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/white_bronze.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/white_bronze.jpg'); ?>" alt="White Bronze" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">White Bronze</h3><span class="swatch-code">NN-M09</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Champagne"
                data-name="Champagne" data-code="NN-M10" data-category="Metal Finish"
                data-desc="Champagne Finish features a soft, warm gold tone with subtle bronze undertones, creating an elegant and contemporary appearance. Durable and versatile, this finish is ideal for interior architectural elements, custom furnishings, decorative accents, and high-end hospitality and residential applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/champagne.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/champagne.jpg'); ?>" alt="Champagne" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Champagne</h3><span class="swatch-code">NN-M10</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Satin Nickel"
                data-name="Satin Nickel" data-code="NN-M11" data-category="Metal Finish"
                data-desc="Satin Nickel features a soft silver tone with warm undertones and a smooth brushed texture that minimizes glare and fingerprints. Known for its durability and versatility." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_nickel.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/satin_nickel.jpg'); ?>" alt="Satin Nickel" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Satin Nickel</h3><span class="swatch-code">NN-M11</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Polished Nickel"
                data-name="Polished Nickel" data-code="NN-M12" data-category="Metal Finish"
                data-desc="Polished Nickel features a bright, reflective silver finish with subtle warm undertones that provide greater depth than chrome. Its mirror-like surface delivers a luxurious and timeless appearance while maintaining excellent durability for interior applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_nickel.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_nickel.jpg'); ?>" alt="Polished Nickel" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Polished Nickel</h3><span class="swatch-code">NN-M12</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Polished Copper"
                data-name="Polished Copper" data-code="NN-M13" data-category="Metal Finish"
                data-desc="Polished Copper features a vibrant reddish-gold tone with a brilliant reflective surface that brings warmth and visual impact to any space. Its high-luster finish highlights the natural beauty of copper while creating a bold and sophisticated statement." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_copper.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/polished_copper.jpg'); ?>" alt="Polished Copper" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Polished Copper</h3><span class="swatch-code">NN-M13</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Powder Coating"
                data-name="Powder Coating" data-code="NN-M14" data-category="Metal Finish"
                data-desc="Durable powder coat finishes in any custom RAL or texture specification — applied to metalwork for an even, long-lasting color with excellent resistance to wear, weather, and corrosion." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/powder_coating.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/metal_finishes/powder_coating.jpg'); ?>" alt="Powder Coating" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Powder Coating</h3><span class="swatch-code">NN-M14</span></figcaption>
        </figure>

      </div>
    </div>
  </section>

  <section id="wood" class="fin-swatches alt">
    <div class="container">
      <div class="fin-swatches-head anim">
        <div class="section-label">Wood Finishes</div>
        <h2 class="section-title">The <span>Wood</span> Collection</h2>
        <p>Hand-selected hardwoods, exotic veneers, custom stains, and cerused or ebonized treatments — milled and finished under one roof.</p>
      </div>
      <div class="swatch-grid">

        <figure class="swatch" tabindex="0" role="button" aria-label="View White Oak"
                data-name="White Oak" data-code="NN-W01" data-category="Wood Finish"
                data-desc="White Oak is a durable hardwood known for its light tan to warm beige tones and distinctive natural grain pattern. Highly versatile and resistant to wear, it is a popular choice for custom millwork, furniture, wall paneling, and architectural applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/white_oak.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/white_oak.jpg'); ?>" alt="White Oak" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">White Oak</h3><span class="swatch-code">NN-W01</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Natural Oak"
                data-name="Natural Oak" data-code="NN-W02" data-category="Wood Finish"
                data-desc="Natural Oak showcases warm golden-brown tones and authentic wood grain patterns that highlight the natural beauty of the material. Its organic character and timeless appeal bring warmth and sophistication to a wide range of interior design styles." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/natural_oak.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/natural_oak.jpg'); ?>" alt="Natural Oak" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Natural Oak</h3><span class="swatch-code">NN-W02</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View White Oak Ceruse Natural"
                data-name="White Oak Ceruse Natural" data-code="NN-W03" data-category="Wood Finish"
                data-desc="White Oak Ceruse Natural features the classic beauty of white oak enhanced with a cerused finish that highlights the wood's open grain and natural texture. Its light, natural tones combined with subtle grain contrast create a sophisticated and organic appearance. Durable and timeless." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/white_oak_ceruse_natural.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/white_oak_ceruse_natural.jpg'); ?>" alt="White Oak Ceruse Natural" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">White Oak Ceruse Natural</h3><span class="swatch-code">NN-W03</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View White Oak Bleached"
                data-name="White Oak Bleached" data-code="NN-W04" data-category="Wood Finish"
                data-desc="White Oak Bleached features soft, lightened tones that create a clean and contemporary appearance while preserving the natural grain and character of the wood. This finish offers a bright, airy aesthetic that complements modern, coastal, and Scandinavian-inspired interiors. Durable and versatile." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/white_oak_bleached.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/white_oak_bleached.jpg'); ?>" alt="White Oak Bleached" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">White Oak Bleached</h3><span class="swatch-code">NN-W04</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Sycamore"
                data-name="Sycamore" data-code="NN-W05" data-category="Wood Finish"
                data-desc="Sycamore is a distinctive hardwood known for its light cream to pale golden tones and fine, uniform grain pattern. Its smooth texture and subtle natural figuring create a clean, elegant appearance that works beautifully in contemporary and high-end interior applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/sycamore.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/sycamore.jpg'); ?>" alt="Sycamore" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Sycamore</h3><span class="swatch-code">NN-W05</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Natural Beech"
                data-name="Natural Beech" data-code="NN-W06" data-category="Wood Finish"
                data-desc="Natural Beech features a light, warm honey-beige tone with a fine, even grain that gives it a clean and understated appearance. Known for its strength, stability, and durability, beech is a reliable hardwood well-suited for custom millwork, cabinetry, furniture, and interior architectural applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/natural_beech.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/natural_beech.jpg'); ?>" alt="Natural Beech" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Natural Beech</h3><span class="swatch-code">NN-W06</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Walnut"
                data-name="Walnut" data-code="NN-W07" data-category="Wood Finish"
                data-desc="Walnut features rich, deep brown tones ranging from warm chocolate to dark espresso, often with natural grain variations that add depth and character. Known for its strength, durability, and luxurious appearance, walnut is highly valued in custom millwork, furniture, cabinetry, and architectural applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/walnut.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/walnut.jpg'); ?>" alt="Walnut" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Walnut</h3><span class="swatch-code">NN-W07</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Mahogany"
                data-name="Mahogany" data-code="NN-W08" data-category="Wood Finish"
                data-desc="Mahogany features rich reddish-brown tones with a naturally fine, straight grain that develops greater depth and warmth over time. Known for its strength, stability, and long-lasting durability, it is widely used in high-end millwork, furniture, cabinetry, and architectural applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/mahogany.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/mahogany.jpg'); ?>" alt="Mahogany" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Mahogany</h3><span class="swatch-code">NN-W08</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Walnut Dark Umber"
                data-name="Walnut Dark Umber" data-code="NN-W09" data-category="Wood Finish"
                data-desc="Walnut Dark Umber features deep, rich brown tones with subtle black undertones that emphasize the natural walnut grain. This finish creates a bold, sophisticated look while maintaining the warmth and organic character of the wood. Known for its durability and timeless appeal." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/walnut_dark_umber.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/walnut_dark_umber.jpg'); ?>" alt="Walnut Dark Umber" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Walnut Dark Umber</h3><span class="swatch-code">NN-W09</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Rosewood Natural"
                data-name="Rosewood Natural" data-code="NN-W10" data-category="Wood Finish"
                data-desc="Rosewood Natural features rich reddish-brown to deep burgundy tones with striking natural grain patterns that often include dark streaking and subtle variation. Known for its density, strength, and long-lasting durability, it is well-suited for high-end millwork, cabinetry, furniture, and specialty architectural applications." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/rosewood_natural.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/rosewood_natural.jpg'); ?>" alt="Rosewood Natural" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Rosewood Natural</h3><span class="swatch-code">NN-W10</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Oak Ebonized"
                data-name="Oak Ebonized" data-code="NN-W11" data-category="Wood Finish"
                data-desc="Oak Ebonized features deep black to charcoal tones achieved through a finishing process that enhances the natural oak grain beneath the surface. The result is a bold, dramatic look that still reveals subtle wood texture and movement. Highly durable and versatile." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/oak_ebonized.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/oak_ebonized.jpg'); ?>" alt="Oak Ebonized" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Oak Ebonized</h3><span class="swatch-code">NN-W11</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Dark Ebony"
                data-name="Dark Ebony" data-code="NN-W12" data-category="Wood Finish"
                data-desc="Dark Ebony features an intense, near-black tone with subtle depth that allows hints of underlying grain to remain visible depending on the substrate. This finish delivers a bold, refined, and contemporary aesthetic while maintaining a smooth, consistent surface." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/dark_ebony.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/wood_millwork/dark_ebony.jpg'); ?>" alt="Dark Ebony" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Dark Ebony</h3><span class="swatch-code">NN-W12</span></figcaption>
        </figure>

      </div>
    </div>
  </section>

  <section id="custom" class="fin-swatches">
    <div class="container">
      <div class="fin-swatches-head anim">
        <div class="section-label">Partnership Collection</div>
        <h2 class="section-title">The <span>Partnership</span> Collection</h2>
        <p>Premium materials we source from trusted partners &mdash; stone, glass &amp; mirror, leather, and integrated lighting &mdash; to craft beautiful, fully bespoke fixtures. Each links straight to the partner we work with.</p>
      </div>
      <div class="swatch-grid">

        <figure class="swatch" tabindex="0" role="button" aria-label="View Stone"
                data-name="Stone" data-code="NN-C01" data-category="Partnership"
                data-desc="A curated range of natural stones including limestone, travertine, quartzite, and onyx — cut, finished, and detailed in-house to integrate seamlessly with millwork, metalwork, and bespoke interiors." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/stone.jpg'); ?>" data-vendors="Cosentino|https://www.cosentino.com/;FENIX for Interiors|https://www.fenixforinteriors-na.com/">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/stone.jpg'); ?>" alt="Stone" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Stone</h3><span class="swatch-code">NN-C01</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Glass &amp; Mirror"
                data-name="Glass &amp; Mirror" data-code="NN-C02" data-category="Partnership"
                data-desc="Specialty decorative glass including fluted, reeded, antique, and back-painted treatments — available in clear, tinted, and patterned formats for partitions, casework, and feature elements." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/glass.jpg'); ?>" data-vendors="GlassPro|https://glas-pro.com/">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/glass.jpg'); ?>" alt="Glass" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Glass &amp; Mirror</h3><span class="swatch-code">NN-C02</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Full Grain Leather"
                data-name="Full Grain Leather" data-code="NN-C03" data-category="Partnership"
                data-desc="The highest grade of leather, retaining the hide's natural surface and character. Supple, exceptionally durable, and developing a richer patina over time — ideal for upholstery, panels, and bespoke detailing." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/full_grain_leather.jpg'); ?>" data-vendors="Maharam|https://www.maharam.com/;Jamie Stern|https://jamiesterndesign.com/">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/full_grain_leather.jpg'); ?>" alt="Full Grain Leather" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Full Grain Leather</h3><span class="swatch-code">NN-C03</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Integrated Lighting"
                data-name="Integrated Lighting" data-code="NN-C04" data-category="Partnership"
                data-desc="Linear LED, edge-lit panels, and concealed task lighting built directly into millwork and architectural elements — engineered to highlight materials and accentuate form without visible hardware." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/integrated_lighting.jpg'); ?>" data-vendors="Hera Lighting|https://www.heralighting.com/">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/integrated_lighting.jpg'); ?>" alt="Integrated Lighting" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Integrated Lighting</h3><span class="swatch-code">NN-C04</span></figcaption>
        </figure>

        <figure class="swatch" tabindex="0" role="button" aria-label="View Acrylic"
                data-name="Acrylic" data-code="NN-C05" data-category="Partnership"
                data-desc="Cast and machined acrylic in a wide range of clarities, colors, and surface textures — ideal for decorative panels, illuminated signage, sculptural lighting, and bespoke interior elements." data-img="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/acrylic.jpg'); ?>">
          <div class="swatch-img">
            <img src="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/acrylic.jpg'); ?>" alt="Acrylic" loading="lazy">
          </div>
          <figcaption class="swatch-meta"><h3 class="swatch-name">Acrylic</h3><span class="swatch-code">NN-C05</span></figcaption>
        </figure>

      </div>
    </div>
  </section>

  <!-- SAMPLE REQUEST FORM -->
  <section class="fin-samples" id="request-samples">
    <div class="container">
      <div class="fin-samples-head anim">
        <div class="section-label">Sample Process</div>
        <h2 class="section-title">Request <span>Samples</span></h2>
        <p>Select the finishes you'd like to see in person. We'll prepare physical samples and ship them to you, typically within 5&ndash;7 business days.</p>
      </div>

      <!-- TODO: This form is a styled mockup. Wire the submit handler to a real
           form service (e.g. Formspree) or backend before launch. -->
      <?php get_template_part( 'parts/form', 'samples' ); ?>
    </div>
  </section>


<?php get_footer(); ?>
