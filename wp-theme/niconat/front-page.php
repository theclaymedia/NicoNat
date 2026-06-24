<?php
/**
 * Front page - NicoNat homepage (1:1 with mockup index.html)
 */
get_header();
?>

  <!-- HERO -->
  <section class="hero" id="hero">
    <div class="hero-slideshow" aria-hidden="true">
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/images/featured_brands/Amiri/Amiri_soho_1.jpeg'); ?>" alt=""></div>
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/NN_new_images/saks_beverly_hills_2024.jpg'); ?>" alt=""></div>
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/NN_new_images/Bavette_s_Steakhouse___Bar___Bar_1.jpg'); ?>" alt=""></div>
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/images/featured_brands/RuPaul/RuPaul_Closet_1.webp'); ?>" alt=""></div>
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/NN_new_images/marzul_interior_3.jpg'); ?>" alt=""></div>
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/images/featured_brands/Cult_gaia/cult_gaia_1.jpg'); ?>" alt=""></div>
      <div class="hero-slide"><img src="<?php echo nn_asset('assets/images/featured_brands/Equinox/Equinox_1.jpg'); ?>" alt=""></div>
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-inner">
      <div class="hero-text">
        <h1 class="hero-tagline anim anim-up">We Build Exceptional</h1>
      </div>
      <div class="hero-marquee-wrap anim anim-up">
        <div class="hero-marquee">
          <span>Brand Environments</span><span class="dot">&bull;</span>
          <span>Flagship Stores</span><span class="dot">&bull;</span>
          <span>Retail Fixtures</span><span class="dot">&bull;</span>
          <span>Shop Interiors</span><span class="dot">&bull;</span>
          <span>Display Systems</span><span class="dot">&bull;</span>
          <span>Hospitality</span><span class="dot">&bull;</span>
          <span>High-End Residential</span><span class="dot">&bull;</span>
          <span>Brand Environments</span><span class="dot">&bull;</span>
          <span>Flagship Stores</span><span class="dot">&bull;</span>
          <span>Retail Fixtures</span><span class="dot">&bull;</span>
          <span>Shop Interiors</span><span class="dot">&bull;</span>
          <span>Display Systems</span><span class="dot">&bull;</span>
          <span>Hospitality</span><span class="dot">&bull;</span>
          <span>High-End Residential</span><span class="dot">&bull;</span>
        </div>
      </div>
      <div class="hero-text">
        <p class="hero-desc anim anim-up">End-to-end retail solutions that transform ideas into physical experiences, crafted with precision and built to scale.</p>
        <a href="<?php echo esc_url( nn_work_url() ); ?>" class="btn-primary anim anim-up">
          View Our Work
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
    <div class="hero-scroll"><span>Scroll</span><div class="hero-scroll-line"></div></div>
  </section>

  <!-- ABOUT -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-content anim anim-left">
        <div class="section-label">About Us</div>
        <h2 class="section-title">Built on Craft. Driven by <span>Innovation.</span></h2>
        <p class="about-text">Founded in 1999 in Los Angeles, Niconat is a domestic manufacturer with over 26 years of experience.</p>
        <p class="about-text">Built by three brothers with backgrounds in manufacturing, business, and design, the company combines technical expertise with a strong creative perspective.</p>
        <p class="about-text">Today, Niconat operates at the intersection of design, engineering, and fabrication &mdash; delivering high-quality, custom solutions for retail, hospitality, and high-end residential environments. End-to-end execution from concept to installation.</p>
        <p class="about-tagline">Different backgrounds, one mindset: <strong>build, create, and innovate.</strong></p>
        <a href="#" class="btn-primary">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></a>
      </div>
      <div class="about-image anim anim-right">
        <img src="<?php echo nn_asset('assets/images/NicoNat_About_Us_Image.jpg'); ?>" alt="NicoNat Facility">
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-header anim anim-up">
        <div class="section-label">What We Do</div>
        <h2 class="section-title">From Raw Metal to <span>Remarkable</span></h2>
      </div>
      <div class="services-grid">
        <div class="service-card anim anim-up">
          <div class="service-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg></div>
          <h3>Retail Fixtures</h3>
          <p>Custom displays, shop-in-shop environments, and full store fixture programs built to your exact brand specifications.</p>
        </div>
        <div class="service-card anim anim-up">
          <div class="service-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
          <h3>Vertical Manufacturing</h3>
          <p>Metal, millwork, upholstery, lighting, and glazing produced in-house under one roof for full quality control.</p>
        </div>
        <div class="service-card anim anim-up">
          <div class="service-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 11-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 112.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 112.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg></div>
          <h3>Engineering & Design</h3>
          <p>From technical shop drawings to 3D modeling and rendering, every detail is engineered before production begins.</p>
        </div>
        <div class="service-card anim anim-up">
          <div class="service-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg></div>
          <h3>Project Management</h3>
          <p>A dedicated manager tracks your project from kickoff to completion, keeping timelines and quality on point.</p>
        </div>
        <div class="service-card anim anim-up">
          <div class="service-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8l4 2.5v5L16 18"/></svg></div>
          <h3>Logistics & Installation</h3>
          <p>In-house packing, crating, and experienced installation crews deployed across North America.</p>
        </div>
        <div class="service-card anim anim-up">
          <div class="service-icon"><svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg></div>
          <h3>Restoration</h3>
          <p>Repairs, refinishing, fixture refreshes, and component replacements to extend the life of your space.</p>
        </div>
      </div>
      <div class="services-cta anim anim-up">
        <a href="#" class="btn-outline">Explore Our Capabilities <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>
  </section>

  <!-- MATERIALS & FINISHES -->
  <section class="finishes" id="finishes">
    <div class="section-header anim anim-up">
      <div class="section-label">Materials &amp; Finishes</div>
      <h2 class="section-title">Crafted in the <span>Details</span></h2>
      <p class="finishes-subtitle">From the earliest design conversations, we work with our clients to understand the role finish, texture, and material play in their vision &mdash; producing a full range of metalwork, millwork, and custom surfaces in&#8209;house with a hands-on sensibility.</p>
    </div>
    <div class="finishes-grid">

      <article class="finish-card is-active anim anim-up">
        <div class="finish-card-image">
          <img src="<?php echo nn_asset('assets/images/featured_brands/Samsung/Samsung%20Bench_2.jpg'); ?>" alt="Metal finishes detail" loading="lazy">
          <div class="finish-card-label">Metal Finishes</div>
        </div>
        <div class="finish-card-info">
          <div class="finish-card-info-inner">
            <h3>Metal Finishes</h3>
            <p>From mirror-polished brass and brushed stainless to hand-applied patinas and powder coats, our in-house metal shop produces a full spectrum of decorative metalwork &mdash; built to last and finished to spec.</p>
            <a href="<?php echo esc_url( nn_finishes_url() ); ?>#metal" class="finish-card-link">
              View Finishes
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="finish-card anim anim-up">
        <div class="finish-card-image">
          <img src="<?php echo nn_asset('assets/images/featured_brands/Saks_fifth_avenue/Saks_Chikago_2.JPG'); ?>" alt="Wood and millwork finishes" loading="lazy">
          <div class="finish-card-label">Wood &amp; Millwork</div>
        </div>
        <div class="finish-card-info">
          <div class="finish-card-info-inner">
            <h3>Wood &amp; Millwork</h3>
            <p>Hand-selected hardwoods, exotic veneers, custom stains, and high-gloss lacquers &mdash; milled, finished, and assembled under one roof for total quality control and a flawless final surface.</p>
            <a href="<?php echo esc_url( nn_finishes_url() ); ?>#wood" class="finish-card-link">
              View Finishes
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="finish-card anim anim-up">
        <div class="finish-card-image">
          <img src="<?php echo nn_asset('assets/images/beautiful_finishes/custom_finishes/full_grain_leather.jpg'); ?>" alt="Upholstery and custom surfaces" loading="lazy">
          <div class="finish-card-label">Custom Surfaces</div>
        </div>
        <div class="finish-card-info">
          <div class="finish-card-info-inner">
            <h3>Upholstery &amp; Custom Surfaces</h3>
            <p>Bespoke leather and fabric upholstery, specialty glazing, stone, integrated lighting, and one-off material treatments &mdash; every element detailed to match the design intent.</p>
            <a href="<?php echo esc_url( nn_finishes_url() ); ?>#custom" class="finish-card-link">
              View Finishes
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </article>

    </div>
  </section>

  <!-- PORTFOLIO -->
  <section class="portfolio" id="portfolio">
    <div class="portfolio-header anim anim-up">
      <div class="section-label">Selected Work</div>
      <h2 class="section-title">Brands We Have Proudly<br>Brought to <span>Life</span></h2>
    </div>

    <!-- Amiri - Full Bleed (Priority) -->
    <div class="pf-full anim anim-scale">
      <img src="<?php echo nn_asset('assets/images/featured_brands/Amiri/Amiri_soho_1.jpeg'); ?>" alt="Amiri Soho" loading="lazy">
      <img src="<?php echo nn_asset('assets/images/logos/Amiri_Logo.svg'); ?>" alt="Amiri" class="pf-full-logo">
      <div class="pf-full-overlay">
        <h3>Amiri</h3>
        <div class="pf-location">Soho, New York</div>
      </div>
    </div>

    <!-- Bavette's Steakhouse - Split -->
    <div class="pf-split anim anim-up">
      <div class="pf-split-image"><img src="<?php echo nn_asset('assets/NN_new_images/Bavette_s_Steakhouse___Bar___Bar_1.jpg'); ?>" alt="Bavette's Steakhouse Bar, Las Vegas" loading="lazy"></div>
      <div class="pf-split-info">
        <h3>Bavette's Steakhouse</h3>
        <div class="pf-location">Las Vegas, Nevada</div>
        <p>A moody, jewel-toned hospitality build executed with the same precision as a flagship retail environment &mdash; custom millwork, bespoke bar fixtures, and tailored lighting that set the tone for a legendary dining experience.</p>
        <a href="#" class="btn-outline">View Project <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <!-- Marzul - Full Bleed -->
    <div class="pf-full anim anim-scale">
      <img src="<?php echo nn_asset('assets/NN_new_images/marzul_interior_3.jpg'); ?>" alt="Marzul Restaurant Interior, San Diego" loading="lazy">
      <div class="pf-full-overlay">
        <h3>Marzul</h3>
        <div class="pf-location">San Diego, California</div>
      </div>
    </div>

    <!-- Saks Fifth Avenue - Split Reversed -->
    <div class="pf-split reversed anim anim-up">
      <div class="pf-split-image"><img src="<?php echo nn_asset('assets/NN_new_images/saks_beverly_hills_2024.jpg'); ?>" alt="Saks Fifth Avenue Beverly Hills" loading="lazy"></div>
      <div class="pf-split-info">
        <img src="<?php echo nn_asset('assets/images/logos/Saks_Fifth_Avenue_Logo.svg'); ?>" alt="Saks" class="pf-split-logo" style="height:44px;">
        <h3>Saks Fifth Avenue</h3>
        <div class="pf-location">Beverly Hills</div>
        <p>A premium retail environment combining millwork, metal, and lighting to deliver an elevated shopping experience for one of America's most iconic department stores.</p>
        <a href="#" class="btn-outline">View Project <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <!-- RuPaul - Full Bleed -->
    <div class="pf-full anim anim-scale">
      <img src="<?php echo nn_asset('assets/images/featured_brands/RuPaul/RuPaul_Closet_1.webp'); ?>" alt="RuPaul's Private Closet" loading="lazy">
      <img src="<?php echo nn_asset("assets/images/logos/RuPaul's_Drag_Race_Logo.svg"); ?>" alt="RuPaul" class="pf-full-logo">
      <div class="pf-full-overlay">
        <h3>RuPaul's Private Closet</h3>
        <div class="pf-location">Los Angeles</div>
      </div>
    </div>

    <!-- Equinox - Split -->
    <div class="pf-split anim anim-up">
      <div class="pf-split-image"><img src="<?php echo nn_asset('assets/images/featured_brands/Equinox/Equinox_1.jpg'); ?>" alt="Equinox" loading="lazy"></div>
      <div class="pf-split-info">
        <img src="<?php echo nn_asset('assets/images/logos/Equinox_Logo.svg'); ?>" alt="Equinox" class="pf-split-logo">
        <h3>Equinox</h3>
        <div class="pf-location">Los Angeles</div>
        <p>High-performance fitness environments built to Equinox's exacting standards, blending premium materials with functional design across multiple locations.</p>
        <a href="#" class="btn-outline">View Project <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <!-- Cult Gaia - Split Reversed -->
    <div class="pf-split reversed anim anim-up">
      <div class="pf-split-image"><img src="<?php echo nn_asset('assets/images/featured_brands/Cult_gaia/cult_gaia_1.jpg'); ?>" alt="Cult Gaia" loading="lazy"></div>
      <div class="pf-split-info">
        <img src="<?php echo nn_asset('assets/images/logos/Cult_Gaia_Logo.svg'); ?>" alt="Cult Gaia" class="pf-split-logo">
        <h3>Cult Gaia</h3>
        <div class="pf-location">Los Angeles</div>
        <p>A bespoke retail environment featuring custom displays and lighting solutions that bring the brand's artistic vision into a physical space.</p>
        <a href="#" class="btn-outline">View Project <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg></a>
      </div>
    </div>

    <!-- Drip Coffee - Full Bleed -->
    <div class="pf-full anim anim-scale">
      <img src="<?php echo nn_asset('assets/images/featured_brands/Drip_coffee/Drip_Coffee_South_Coast_Plaza_1.jpeg'); ?>" alt="Drip Coffee" loading="lazy">
      <div class="pf-full-overlay">
        <h3>Drip Coffee</h3>
        <div class="pf-location">South Coast Plaza</div>
      </div>
    </div>

    <div class="portfolio-cta anim anim-up">
      <a href="<?php echo esc_url( nn_work_url() ); ?>" class="btn-primary">
        View All Projects
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </section>

  <!-- OUR WORKS — HORIZONTAL CASE STUDY -->
  <section class="works" id="works">
    <div class="works-header anim anim-up">
      <div class="section-label">Our Works</div>
      <h2 class="section-title">A Closer Look at the <span>Craft</span></h2>
      <div class="works-subtitle">Featured Projects &mdash; Drag or scroll to explore</div>
    </div>

    <div class="works-track-wrap anim anim-up">
      <button class="works-nav prev" id="worksPrev" aria-label="Previous">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="M12 19l-7-7 7-7"/></svg>
      </button>
      <div class="works-track" id="worksTrack">
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-01.jpg'); ?>" alt="NicoNat featured project — page 1" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-02.jpg'); ?>" alt="NicoNat featured project — page 2" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-03.jpg'); ?>" alt="NicoNat featured project — page 3" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-04.jpg'); ?>" alt="NicoNat featured project — page 4" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-05.jpg'); ?>" alt="NicoNat featured project — page 5" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-06.jpg'); ?>" alt="NicoNat featured project — page 6" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-07.jpg'); ?>" alt="NicoNat featured project — page 7" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-08.jpg'); ?>" alt="NicoNat featured project — page 8" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-09.jpg'); ?>" alt="NicoNat featured project — page 9" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-10.jpg'); ?>" alt="NicoNat featured project — page 10" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-11.jpg'); ?>" alt="NicoNat featured project — page 11" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-12.jpg'); ?>" alt="NicoNat featured project — page 12" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-13.jpg'); ?>" alt="NicoNat featured project — page 13" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-14.jpg'); ?>" alt="NicoNat featured project — page 14" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-15.jpg'); ?>" alt="NicoNat featured project — page 15" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-16.jpg'); ?>" alt="NicoNat featured project — page 16" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-17.jpg'); ?>" alt="NicoNat featured project — page 17" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-18.jpg'); ?>" alt="NicoNat featured project — page 18" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-19.jpg'); ?>" alt="NicoNat featured project — page 19" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-20.jpg'); ?>" alt="NicoNat featured project — page 20" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-21.jpg'); ?>" alt="NicoNat featured project — page 21" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-22.jpg'); ?>" alt="NicoNat featured project — page 22" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-23.jpg'); ?>" alt="NicoNat featured project — page 23" loading="lazy"></div>
        <div class="works-card"><img src="<?php echo nn_asset('assets/images/our-works/work-24.jpg'); ?>" alt="NicoNat featured project — page 24" loading="lazy"></div>
      </div>
      <button class="works-nav next" id="worksNext" aria-label="Next">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
      </button>
    </div>

    <div class="works-meta">
      <div class="works-progress"><div class="works-progress-bar" id="worksProgressBar"></div></div>
      <div class="works-counter"><span id="worksCurrent">01</span> / <span id="worksTotal">24</span></div>
    </div>
  </section>

  <!-- WORKS LIGHTBOX -->
  <div class="works-lightbox" id="worksLightbox" role="dialog" aria-modal="true" aria-label="Featured project viewer">
    <button class="works-lightbox-close" id="worksLbClose" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18"/><path d="M6 6l12 12"/></svg>
    </button>
    <button class="works-lightbox-btn prev" id="worksLbPrev" aria-label="Previous image">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="M12 19l-7-7 7-7"/></svg>
    </button>
    <img class="works-lightbox-img" id="worksLbImg" alt="">
    <button class="works-lightbox-btn next" id="worksLbNext" aria-label="Next image">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
    </button>
    <div class="works-lightbox-counter"><span id="worksLbCurrent">01</span> / <span id="worksLbTotal">24</span></div>
  </div>

  <!-- CLIENT LOGOS -->
  <section class="clients">
    <div class="clients-marquee">
      <img src="<?php echo nn_asset('assets/images/logos/samsung-8.svg'); ?>" alt="Samsung">
      <img src="<?php echo nn_asset('assets/images/niconat-logo-circle.png'); ?>" alt="NicoNat">
      <img src="<?php echo nn_asset('assets/images/logos/Sam%20Edelman%20Logo.svg'); ?>" alt="Sam Edelman">
      <img src="<?php echo nn_asset("assets/images/logos/RuPaul's_Drag_Race_Logo.svg"); ?>" alt="RuPaul">
      <img src="<?php echo nn_asset('assets/images/logos/Amiri_Logo.svg'); ?>" alt="Amiri">
      <img src="<?php echo nn_asset('assets/images/logos/Equinox_Logo.svg'); ?>" alt="Equinox">
      <img src="<?php echo nn_asset('assets/images/logos/JINS_Logo.svg'); ?>" alt="JINS">
      <img src="<?php echo nn_asset('assets/images/logos/Cult_Gaia_Logo.svg'); ?>" alt="Cult Gaia">
      <img src="<?php echo nn_asset('assets/images/logos/Olivela_Logo.svg'); ?>" alt="Olivela">
      <img src="<?php echo nn_asset('assets/images/logos/Chlo%C3%A9_logo.svg'); ?>" alt="Chloe">
      <img src="<?php echo nn_asset('assets/images/logos/Fashionpile_Logo.svg'); ?>" alt="FashionPhile">
      <img src="<?php echo nn_asset('assets/images/logos/Saks_Fifth_Avenue_Logo.svg'); ?>" alt="Saks">
      <img src="<?php echo nn_asset('assets/images/logos/Fabletics_Logo.svg'); ?>" alt="Fabletics">
      <img src="<?php echo nn_asset('assets/images/logos/Gaylord_Pacific_Logo.svg'); ?>" alt="Gaylord Pacific">
      <img src="<?php echo nn_asset('assets/images/logos/Shooting_Star_Jackson_Hole_Logo.png'); ?>" alt="Shooting Star">
      <!-- Duplicate for seamless loop -->
      <img src="<?php echo nn_asset('assets/images/logos/samsung-8.svg'); ?>" alt="Samsung">
      <img src="<?php echo nn_asset('assets/images/niconat-logo-circle.png'); ?>" alt="NicoNat">
      <img src="<?php echo nn_asset('assets/images/logos/Sam%20Edelman%20Logo.svg'); ?>" alt="Sam Edelman">
      <img src="<?php echo nn_asset("assets/images/logos/RuPaul's_Drag_Race_Logo.svg"); ?>" alt="RuPaul">
      <img src="<?php echo nn_asset('assets/images/logos/Amiri_Logo.svg'); ?>" alt="Amiri">
      <img src="<?php echo nn_asset('assets/images/logos/Equinox_Logo.svg'); ?>" alt="Equinox">
      <img src="<?php echo nn_asset('assets/images/logos/JINS_Logo.svg'); ?>" alt="JINS">
      <img src="<?php echo nn_asset('assets/images/logos/Cult_Gaia_Logo.svg'); ?>" alt="Cult Gaia">
      <img src="<?php echo nn_asset('assets/images/logos/Olivela_Logo.svg'); ?>" alt="Olivela">
      <img src="<?php echo nn_asset('assets/images/logos/Chlo%C3%A9_logo.svg'); ?>" alt="Chloe">
      <img src="<?php echo nn_asset('assets/images/logos/Fashionpile_Logo.svg'); ?>" alt="FashionPhile">
      <img src="<?php echo nn_asset('assets/images/logos/Saks_Fifth_Avenue_Logo.svg'); ?>" alt="Saks">
      <img src="<?php echo nn_asset('assets/images/logos/Fabletics_Logo.svg'); ?>" alt="Fabletics">
      <img src="<?php echo nn_asset('assets/images/logos/Gaylord_Pacific_Logo.svg'); ?>" alt="Gaylord Pacific">
      <img src="<?php echo nn_asset('assets/images/logos/Shooting_Star_Jackson_Hole_Logo.png'); ?>" alt="Shooting Star">
    </div>
  </section>

  <!-- STATS -->
  <section class="stats">
    <div class="container">
      <div class="stats-grid">
        <div class="anim anim-up"><div class="stat-number"><span class="counter" data-target="7500">0</span></div><div class="stat-label">Projects</div></div>
        <div class="anim anim-up"><div class="stat-number"><span class="counter" data-target="27">0</span></div><div class="stat-label">Years in Business</div></div>
        <div class="anim anim-up"><div class="stat-number"><span class="counter" data-target="100">0</span></div><div class="stat-label">Brands We&rsquo;ve Worked With</div></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="process">
    <div class="container">
      <div class="section-header anim anim-up">
        <div class="section-label">Our Process</div>
        <h2 class="section-title">Start Your <span>Project</span> Today</h2>
      </div>
      <div class="process-grid">
        <div class="process-card anim anim-up">
          <div class="process-number">01</div>
          <h3>Engineering & Design</h3>
          <p>We turn your vision into precise shop drawings, 3D models, and engineered solutions.</p>
        </div>
        <div class="process-card anim anim-up">
          <div class="process-number">02</div>
          <h3>Manufacturing</h3>
          <p>Our 65,000 sq ft facility combines metal, millwork, upholstery, lighting, and glass.</p>
        </div>
        <div class="process-card anim anim-up">
          <div class="process-number">03</div>
          <h3>Project Management</h3>
          <p>A dedicated manager tracks every detail from start to finish.</p>
        </div>
        <div class="process-card anim anim-up">
          <div class="process-number">04</div>
          <h3>Installation</h3>
          <p>Experienced crews deployed across North America for a perfect result every time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-info anim anim-left">
        <div class="section-label">Work With Us</div>
        <h2 class="section-title" style="color:#fff">Let's Create Something <span>Remarkable</span></h2>
        <p>From concept to installation, we partner with you to create retail environments that stand out, perform, and scale.</p>
        <div class="contact-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
          <a href="mailto:info@niconat.co">info@niconat.co</a>
        </div>
        <div class="contact-detail">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <a href="tel:+13237211900">(323) 721-1900</a>
        </div>
        <div class="contact-social">
          <a href="#" aria-label="LinkedIn"><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
          <a href="#" aria-label="Instagram"><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558a5.823 5.823 0 002.126-1.384 5.823 5.823 0 001.384-2.126c.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913a5.56 5.56 0 00-1.384-2.126A5.56 5.56 0 0019.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227a3.81 3.81 0 01-.899 1.382 3.744 3.744 0 01-1.38.896c-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421a3.716 3.716 0 01-1.379-.899 3.644 3.644 0 01-.9-1.38c-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 100 12.324 6.162 6.162 0 100-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 11-2.882 0 1.441 1.441 0 012.882 0z"/></svg></a>
        </div>
      </div>
      <?php get_template_part( 'parts/form', 'contact' ); ?>
    </div>
  </section>


<?php get_footer(); ?>
