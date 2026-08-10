/* =====================================================
   RVD COLLEGE - Global JavaScript
   Handles: Navbar, Animations, Counter, Mobile Menu,
            Lightbox, Marquee, Back to Top
   ===================================================== */

document.addEventListener('DOMContentLoaded', function () {

  /* ===== NAVBAR SCROLL ===== */
  const navbar = document.querySelector('.navbar');
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
      navbar && navbar.classList.add('scrolled');
      backToTop && backToTop.classList.add('visible');
    } else {
      navbar && navbar.classList.remove('scrolled');
      backToTop && backToTop.classList.remove('visible');
    }
  });

  /* ===== BACK TO TOP ===== */
  if (backToTop) {
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ===== MOBILE MENU ===== */
  const hamburger = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobileNav');
  const mobileClose = document.getElementById('mobileClose');

  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      mobileNav.classList.toggle('open');
      document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
    });
  }

  if (mobileClose && mobileNav && hamburger) {
    mobileClose.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mobileNav.classList.remove('open');
      document.body.style.overflow = '';
    });
  }

  /* ===== MOBILE SUBMENU TOGGLE ===== */
  document.querySelectorAll('.mobile-nav-link[data-submenu]').forEach(link => {
    link.addEventListener('click', function () {
      const submenuId = this.getAttribute('data-submenu');
      const submenu = document.getElementById(submenuId);
      const arrow = this.querySelector('.mobile-arrow');
      if (submenu) {
        submenu.classList.toggle('open');
        if (arrow) arrow.textContent = submenu.classList.contains('open') ? '▲' : '▼';
      }
    });
  });

  /* ===== SCROLL REVEAL ===== */
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
    revealObserver.observe(el);
  });

  /* ===== COUNTER ANIMATION ===== */
  function animateCounter(el, target, duration = 2000, suffix = '') {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
      start += increment;
      if (start >= target) {
        start = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(start) + suffix;
    }, 16);
  }

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.getAttribute('data-target'), 10);
        const suffix = el.getAttribute('data-suffix') || '';
        animateCounter(el, target, 2000, suffix);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.counter').forEach(el => {
    counterObserver.observe(el);
  });

  /* ===== STAGGER REVEAL for grids ===== */
  document.querySelectorAll('.features-grid, .programs-grid, .stats-grid, .testimonials-grid, .events-grid, .faculty-grid, .clubs-grid, .facilities-grid').forEach(grid => {
    Array.from(grid.children).forEach((child, i) => {
      child.classList.add('reveal');
      child.style.transitionDelay = `${i * 0.08}s`;
      revealObserver.observe(child);
    });
  });

  /* ===== GALLERY LIGHTBOX ===== */
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxClose = document.getElementById('lightboxClose');

  document.querySelectorAll('[data-lightbox]').forEach(item => {
    item.addEventListener('click', function () {
      const src = this.getAttribute('data-lightbox');
      if (lightbox && lightboxImg) {
        lightboxImg.src = src;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  if (lightboxClose && lightbox) {
    lightboxClose.addEventListener('click', () => {
      lightbox.classList.remove('active');
      document.body.style.overflow = '';
    });
  }

  if (lightbox) {
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  /* ===== ACTIVE NAV LINK ===== */
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
    const href = link.getAttribute('href') || '';
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });

  /* ===== HERO PARTICLES ===== */
  const heroParticles = document.querySelector('.hero-particles');
  if (heroParticles) {
    for (let i = 0; i < 15; i++) {
      const particle = document.createElement('div');
      particle.className = 'particle';
      const size = Math.random() * 8 + 3;
      particle.style.cssText = `
        width: ${size}px;
        height: ${size}px;
        left: ${Math.random() * 100}%;
        animation-duration: ${Math.random() * 15 + 10}s;
        animation-delay: ${Math.random() * -20}s;
        opacity: ${Math.random() * 0.4 + 0.1};
      `;
      heroParticles.appendChild(particle);
    }
  }

  /* ===== GALLERY FILTER ===== */
  const filterBtns = document.querySelectorAll('.gallery-filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-full-item[data-category]');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      const filter = this.getAttribute('data-filter');

      galleryItems.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = '';
          setTimeout(() => { item.style.opacity = '1'; item.style.transform = ''; }, 10);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.9)';
          setTimeout(() => { item.style.display = 'none'; }, 300);
        }
      });
    });
  });

  /* ===== FORM VALIDATION ===== */
  document.querySelectorAll('form[data-validate]').forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      let valid = true;

      this.querySelectorAll('[required]').forEach(field => {
        if (!field.value.trim()) {
          field.style.borderColor = 'var(--crimson)';
          valid = false;
        } else {
          field.style.borderColor = '';
        }
      });

      if (valid) {
        const btn = this.querySelector('[type="submit"]');
        if (btn) {
          const orig = btn.textContent;
          btn.textContent = '✓ Submitted Successfully!';
          btn.style.background = 'linear-gradient(135deg, #2ecc71, #27ae60)';
          setTimeout(() => {
            btn.textContent = orig;
            btn.style.background = '';
            form.reset();
          }, 3000);
        }
      }
    });
  });

  /* ===== NEWSLETTER FORM ===== */
  document.querySelectorAll('.newsletter-form').forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = this.querySelector('.newsletter-btn');
      const input = this.querySelector('.newsletter-input');
      if (btn && input && input.value.trim()) {
        btn.textContent = '✓ Subscribed!';
        setTimeout(() => {
          btn.textContent = 'Subscribe';
          input.value = '';
        }, 3000);
      }
    });
  });

  /* ===== SMOOTH ANCHOR SCROLL ===== */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ===== PROGRAMS TAB (Programs Page) ===== */
  document.querySelectorAll('.prog-tab-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const target = this.getAttribute('data-tab');
      document.querySelectorAll('.prog-tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.prog-tab-panel').forEach(p => p.classList.remove('active'));
      this.classList.add('active');
      const panel = document.getElementById(target);
      if (panel) panel.classList.add('active');
    });
  });

});
