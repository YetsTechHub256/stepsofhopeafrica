
(function(){
  const revealEls = document.querySelectorAll('.reveal');
  const counterEls = document.querySelectorAll('[data-count]');
  const backToTop = document.getElementById('backToTop');

  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.classList.add('show');
        io.unobserve(e.target);
      }
    });
  }, {threshold: 0.12});

  revealEls.forEach(el=>io.observe(el));

  const countUp = (el)=>{
    const target = parseInt(el.getAttribute('data-count'), 10) || 0;
    const suffix = el.getAttribute('data-suffix') || '';
    const dur = 900;
    const start = performance.now();

    const tick = (t)=>{
      const p = Math.min(1, (t - start) / dur);
      const val = Math.floor(target * (0.2 + 0.8*p));
      el.textContent = val.toLocaleString() + suffix;
      if(p < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  };

  const ioCount = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        countUp(e.target);
        ioCount.unobserve(e.target);
      }
    });
  }, {threshold: 0.4});

  counterEls.forEach(el=>ioCount.observe(el));

  const toggleTop = ()=>{
    if(!backToTop) return;
    if(window.scrollY > 450) backToTop.classList.add('show');
    else backToTop.classList.remove('show');
  };
  window.addEventListener('scroll', toggleTop);
  toggleTop();

  if(backToTop){
    backToTop.addEventListener('click', ()=> window.scrollTo({top:0, behavior:'smooth'}));
  }
})();
