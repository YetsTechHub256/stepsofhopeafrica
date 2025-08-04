// Enhanced Mobile Menu with Dropdown Support
document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.querySelector('.mobile-menu-toggle');
  const menu = document.querySelector('.menu');
  
  // Toggle main menu
  toggle.addEventListener('click', function() {
    menu.classList.toggle('active');
    this.querySelector('i').classList.toggle('fa-times');
    this.querySelector('i').classList.toggle('fa-bars');
  });
  
  // Handle dropdown menus
  document.querySelectorAll('.dropdown > a').forEach(dropdown => {
    dropdown.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const dropdownMenu = this.nextElementSibling;
        dropdownMenu.classList.toggle('show');
      }
    });
  });
  
  // Close menu when clicking links
  document.querySelectorAll('.menu a:not(.dropdown > a)').forEach(link => {
    link.addEventListener('click', () => {
      menu.classList.remove('active');
      toggle.querySelector('i').classList.add('fa-bars');
      toggle.querySelector('i').classList.remove('fa-times');
    });
  });
});
