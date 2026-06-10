/* NicoNat theme — homepage scripts (extracted verbatim from mockup) */
// Header scroll
window.addEventListener('scroll', () => {
  document.getElementById('header').classList.toggle('scrolled', window.scrollY > 50);
});

// Mobile toggle
document.getElementById('mobileToggle').addEventListener('click', () => {
  document.getElementById('nav').classList.toggle('active');
});

// Hero marquee is CSS-only, no JS needed

// Stagger grid children
document.querySelectorAll('.services-grid, .process-grid, .stats-grid').forEach(g => {
  g.querySelectorAll('.anim').forEach((c, i) => { c.style.transitionDelay = (i * 0.1 + 0.1) + 's'; });
});

// Hero anim on load
setTimeout(() => {
  document.querySelectorAll('.hero-inner .anim').forEach(el => el.classList.add('visible'));
}, 300);

// Scroll animations
function checkAnim() {
  const t = window.innerHeight * 0.9;
  document.querySelectorAll('.anim:not(.visible)').forEach(el => {
    if (el.closest('.hero-inner')) return;
    if (el.getBoundingClientRect().top < t) el.classList.add('visible');
  });
}
window.addEventListener('scroll', checkAnim, { passive: true });
setTimeout(checkAnim, 400);

// Counters
function animateCounters() {
  document.querySelectorAll('.counter').forEach(c => {
    if (c.dataset.done) return;
    const rect = c.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.9) {
      c.dataset.done = '1';
      const target = parseInt(c.dataset.target);
      let cur = 0; const inc = target / 60;
      const timer = setInterval(() => { cur += inc; if (cur >= target) { cur = target; clearInterval(timer); } c.textContent = Math.floor(cur); }, 30);
    }
  });
}
window.addEventListener('scroll', animateCounters, { passive: true });
setTimeout(animateCounters, 500);

// Our Works horizontal carousel
(function() {
  const track = document.getElementById('worksTrack');
  if (!track) return;
  const prev = document.getElementById('worksPrev');
  const next = document.getElementById('worksNext');
  const bar = document.getElementById('worksProgressBar');
  const curEl = document.getElementById('worksCurrent');
  const cards = track.querySelectorAll('.works-card');
  const total = cards.length;

  function step() {
    const card = cards[0];
    if (!card) return 0;
    const style = getComputedStyle(track);
    const gap = parseFloat(style.columnGap || style.gap) || 0;
    return card.getBoundingClientRect().width + gap;
  }

  function update() {
    const max = track.scrollWidth - track.clientWidth;
    const ratio = max > 0 ? track.scrollLeft / max : 0;
    bar.style.width = (ratio * 100) + '%';
    const idx = Math.min(total, Math.round(track.scrollLeft / step()) + 1);
    curEl.textContent = String(idx).padStart(2, '0');
    prev.toggleAttribute('disabled', track.scrollLeft <= 2);
    next.toggleAttribute('disabled', track.scrollLeft >= max - 2);
  }

  prev.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
  next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
  track.addEventListener('scroll', update, { passive: true });

  // Drag to scroll (desktop)
  let down = false, startX = 0, startLeft = 0, moved = false;
  track.addEventListener('mousedown', e => {
    down = true; moved = false;
    startX = e.pageX; startLeft = track.scrollLeft;
    track.classList.add('dragging');
  });
  window.addEventListener('mouseup', () => {
    if (down) { down = false; track.classList.remove('dragging'); }
  });
  window.addEventListener('mousemove', e => {
    if (!down) return;
    const dx = e.pageX - startX;
    if (Math.abs(dx) > 4) moved = true;
    track.scrollLeft = startLeft - dx;
  });
  track.addEventListener('click', e => { if (moved) { e.preventDefault(); e.stopPropagation(); } }, true);

  update();
  window.addEventListener('resize', update);

  // Lightbox
  const lb = document.getElementById('worksLightbox');
  const lbImg = document.getElementById('worksLbImg');
  const lbClose = document.getElementById('worksLbClose');
  const lbPrev = document.getElementById('worksLbPrev');
  const lbNext = document.getElementById('worksLbNext');
  const lbCurrent = document.getElementById('worksLbCurrent');
  const lbTotal = document.getElementById('worksLbTotal');
  const imgs = Array.from(track.querySelectorAll('.works-card img'));
  lbTotal.textContent = String(imgs.length).padStart(2, '0');
  let lbIndex = 0;

  function showAt(i) {
    lbIndex = (i + imgs.length) % imgs.length;
    const src = imgs[lbIndex].getAttribute('src');
    lbImg.setAttribute('src', src);
    lbImg.setAttribute('alt', imgs[lbIndex].getAttribute('alt') || '');
    lbCurrent.textContent = String(lbIndex + 1).padStart(2, '0');
    lbPrev.toggleAttribute('disabled', lbIndex === 0);
    lbNext.toggleAttribute('disabled', lbIndex === imgs.length - 1);
  }
  function openLb(i) {
    showAt(i);
    lb.classList.add('open');
    document.body.classList.add('lightbox-open');
  }
  function closeLb() {
    lb.classList.remove('open');
    document.body.classList.remove('lightbox-open');
  }

  cards.forEach((card, i) => {
    card.addEventListener('click', e => {
      if (moved) return;
      openLb(i);
    });
  });
  lbClose.addEventListener('click', closeLb);
  lbPrev.addEventListener('click', () => { if (lbIndex > 0) showAt(lbIndex - 1); });
  lbNext.addEventListener('click', () => { if (lbIndex < imgs.length - 1) showAt(lbIndex + 1); });
  lb.addEventListener('click', e => { if (e.target === lb) closeLb(); });
  document.addEventListener('keydown', e => {
    if (!lb.classList.contains('open')) return;
    if (e.key === 'Escape') closeLb();
    else if (e.key === 'ArrowLeft' && lbIndex > 0) showAt(lbIndex - 1);
    else if (e.key === 'ArrowRight' && lbIndex < imgs.length - 1) showAt(lbIndex + 1);
  });
})();

// Materials & Finishes — persistent active state (Amuneal-style)
// First card active by default; hovering another card switches active to it.
// Active card stays open until another card is hovered (no mouseleave reset).
(function() {
  const cards = document.querySelectorAll('.finish-card');
  if (!cards.length) return;
  function activate(target) {
    cards.forEach(c => c.classList.toggle('is-active', c === target));
  }
  cards.forEach(card => {
    card.addEventListener('mouseenter', () => activate(card));
    card.addEventListener('click', () => activate(card));
    card.addEventListener('focusin', () => activate(card));
  });
})();

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    e.preventDefault();
    const target = document.querySelector(a.getAttribute('href'));
    if (target) { target.scrollIntoView({ behavior: 'smooth' }); document.getElementById('nav').classList.remove('active'); }
  });
});
