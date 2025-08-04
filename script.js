// Enhanced mobile menu toggle functionality
function setupMobileMenu() {
  // Only run if on index page
  if (!window.location.pathname.includes('index.html') && 
      window.location.pathname !== '/' && 
      !window.location.pathname.endsWith('stepsofhopeafrica-main/')) {
    return;
  }

  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const menu = document.querySelector('.menu');

  if (mobileMenuToggle && menu) {
    // Toggle menu on button click
    mobileMenuToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      menu.classList.toggle('active');
      this.setAttribute('aria-expanded', menu.classList.contains('active'));
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
      if (!menu.contains(e.target) && e.target !== mobileMenuToggle) {
        menu.classList.remove('active');
        mobileMenuToggle.setAttribute('aria-expanded', 'false');
      }
    });
    
    // Prevent menu from closing when clicking inside
    menu.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const menu = document.querySelector('.menu');

  if (mobileMenuToggle && menu) {
    mobileMenuToggle.addEventListener('click', function() {
      menu.classList.toggle('active');
    });
  }
});

// Also initialize if script loads after DOM is loaded
if (document.readyState !== 'loading') {
  setupMobileMenu();
}
