/* NicoNat theme — finishes page scripts (from mockup; adapted for CF7) */
// Header scroll
window.addEventListener('scroll', () => {
  document.getElementById('header').classList.toggle('scrolled', window.scrollY > 30);
});
// Mobile nav toggle
document.getElementById('mobileToggle').addEventListener('click', () => {
  document.getElementById('nav').classList.toggle('active');
});
// Scroll-reveal animations
function checkAnim() {
  const t = window.innerHeight * 0.92;
  document.querySelectorAll('.anim:not(.visible)').forEach(el => {
    if (el.getBoundingClientRect().top < t) el.classList.add('visible');
  });
}
window.addEventListener('scroll', checkAnim, { passive: true });
window.addEventListener('load', checkAnim);
setTimeout(checkAnim, 200);

// === Multi-select finishes widget ===
(function() {
  const chipsArea = document.getElementById('finishChips');
  const otherInput = document.getElementById('finishOther');
  const toggleBtn = document.getElementById('finishToggle');
  const panel = document.getElementById('finishPanel');
  const hiddenField = document.querySelector('input[name="finishes"]') || document.getElementById('finishHidden');
  const selected = new Set();

  function syncHidden() { if (hiddenField) hiddenField.value = Array.from(selected).join(', '); }
  function chip(name) {
    const el = document.createElement('span');
    el.className = 'finish-chip';
    el.dataset.value = name;
    el.innerHTML = '<span></span><button type="button" aria-label="Remove">\u00d7</button>';
    el.firstChild.textContent = name;
    el.querySelector('button').addEventListener('click', () => {
      selected.delete(name);
      const cb = panel.querySelector('input[value="'+CSS.escape(name)+'"]');
      if (cb) cb.checked = false;
      el.remove(); syncHidden(); updateLimit();
    });
    otherInput.insertAdjacentElement('beforebegin', el);
  }
  const MAX_SAMPLES = 3;
  function updateLimit() { panel.classList.toggle('at-limit', selected.size >= MAX_SAMPLES); }
  function flashLimit() {
    const box = document.querySelector('.finish-select-input');
    if (!box) return;
    box.classList.add('limit-flash');
    setTimeout(() => box.classList.remove('limit-flash'), 700);
  }
  function addFinish(name) {
    if (!name) return false;
    if (selected.has(name)) return true;
    if (selected.size >= MAX_SAMPLES) { flashLimit(); return false; }
    selected.add(name); chip(name);
    const cb = panel.querySelector('input[value="'+CSS.escape(name)+'"]');
    if (cb) cb.checked = true;
    syncHidden(); updateLimit();
    return true;
  }
  window.__addFinish = addFinish;

  toggleBtn.addEventListener('click', e => {
    e.stopPropagation();
    const open = panel.hidden;
    panel.hidden = !open;
    toggleBtn.setAttribute('aria-expanded', String(open));
    toggleBtn.classList.toggle('is-open', open);
  });
  document.addEventListener('click', e => {
    if (panel.hidden) return;
    if (!panel.contains(e.target) && e.target !== toggleBtn && !toggleBtn.contains(e.target)) {
      panel.hidden = true; toggleBtn.classList.remove('is-open');
      toggleBtn.setAttribute('aria-expanded', 'false');
    }
  });
  panel.addEventListener('change', e => {
    if (e.target.type !== 'checkbox') return;
    if (e.target.checked) {
      if (!addFinish(e.target.value)) e.target.checked = false;
    } else {
      selected.delete(e.target.value);
      const c = chipsArea.querySelector('.finish-chip[data-value="'+CSS.escape(e.target.value)+'"]');
      if (c) c.remove();
      syncHidden(); updateLimit();
    }
  });
  otherInput.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ',') {
      e.preventDefault();
      const v = otherInput.value.trim().replace(/,$/, '');
      if (v) addFinish(v);
      otherInput.value = '';
    }
  });
  otherInput.addEventListener('blur', () => {
    const v = otherInput.value.trim();
    if (v) { addFinish(v); otherInput.value = ''; }
  });
})();

// === Swatch modal ===
(function() {
  const modal = document.getElementById('swatchModal');
  const img = document.getElementById('modalImg');
  const name = document.getElementById('modalName');
  const code = document.getElementById('modalCode');
  const cat = document.getElementById('modalCat');
  const desc = document.getElementById('modalDesc');
  const vendorsWrap = document.getElementById('modalVendors');
  const vendorLinks = document.getElementById('modalVendorLinks');
  const req = document.getElementById('modalRequest');
  const close = document.getElementById('modalClose');
  let current = null;

  function open(s) {
    current = {
      name: s.dataset.name,
      code: s.dataset.code,
      cat: s.dataset.category,
      desc: s.dataset.desc || '',
      img: s.dataset.img,
      vendors: s.dataset.vendors || '',
    };
    img.src = current.img; img.alt = current.name;
    name.textContent = current.name;
    code.textContent = current.code;
    cat.textContent = current.cat;
    desc.textContent = current.desc;
    desc.style.display = current.desc ? '' : 'none';
    vendorLinks.innerHTML = '';
    const vendors = s.dataset.vendors || '';
    if (vendors) {
      vendors.split(';').forEach(pair => {
        const bits = pair.split('|');
        const vn = (bits[0] || '').trim(), vu = (bits[1] || '').trim(), vl = (bits[2] || '').trim();
        if (!vn || !vu) return;
        const a = document.createElement('a');
        a.href = vu; a.target = '_blank'; a.rel = 'noopener noreferrer';
        a.title = vn + ' — opens in a new tab';
        if (vl) {
          a.className = 'vendor-logo-link';
          const im = document.createElement('img');
          im.src = vl; im.alt = vn; im.loading = 'lazy';
          a.appendChild(im);
        } else {
          a.className = 'vendor-link';
          a.textContent = vn;
          a.innerHTML += ' <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>';
        }
        vendorLinks.appendChild(a);
      });
      vendorsWrap.hidden = false;
    } else { vendorsWrap.hidden = true; }
    document.getElementById('modalReqLabel').textContent = current.vendors ? 'Contact Vendor for Samples' : 'Request a Sample';
    modal.classList.add('open');
    modal.setAttribute('aria-hidden','false');
    document.body.classList.add('modal-open');
  }
  function dismiss() {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden','true');
    document.body.classList.remove('modal-open');
    current = null;
  }
  document.querySelectorAll('.swatch').forEach(s => {
    s.addEventListener('click', () => open(s));
    s.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(s); }
    });
  });
  close.addEventListener('click', dismiss);
  modal.addEventListener('click', e => { if (e.target === modal) dismiss(); });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modal.classList.contains('open')) dismiss();
  });
  req.addEventListener('click', () => {
    if (current && current.vendors) {
      const first = current.vendors.split(';')[0].split('|');
      const url = (first[1] || '').trim();
      if (url) window.open(url, '_blank', 'noopener');
      return;
    }
    if (current && window.__addFinish) window.__addFinish(current.name + ' (' + current.code + ')');
    dismiss();
    document.getElementById('request-samples').scrollIntoView({ behavior: 'smooth' });
  });
})();

// === Sample form submit (mockup) ===
const sampleFormEl = document.getElementById('sampleForm');
if (sampleFormEl) sampleFormEl.addEventListener('submit', e => {
  e.preventDefault();
  const form = e.currentTarget;
  if (!form.checkValidity()) { form.reportValidity(); return; }
  form.style.display = 'none';
  const c = document.getElementById('sampleConfirm');
  c.classList.add('show');
  c.scrollIntoView({ behavior: 'smooth', block: 'center' });
});
