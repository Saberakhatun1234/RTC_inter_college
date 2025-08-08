document.addEventListener("DOMContentLoaded", function () {
  const navToggle = document.getElementById("nav-toggle");
  const navLinks = document.getElementById("nav-links");
  const dropdowns = document.querySelectorAll('.dropdown');

  // Mobile menu toggle
  if(navToggle && navLinks){
    navToggle.addEventListener("click", () => {
      navLinks.classList.toggle("hidden");
      navLinks.classList.toggle("flex");
      navLinks.classList.toggle("flex-col");
      
      const icon = navToggle.querySelector("i");
      icon.classList.toggle("fa-x");
      icon.classList.toggle("fa-bars");
    });
  }

  // Mobile dropdown functionality
  dropdowns.forEach(dropdown => {
    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
    const dropdownLink = dropdown.querySelector('a');
    
    // For mobile devices, handle click events
    dropdownLink.addEventListener('click', (e) => {
      if (window.innerWidth < 768) { // Mobile breakpoint
        e.preventDefault();
        dropdownMenu.classList.toggle('show');
        dropdown.classList.toggle('active');
        
        // Close other dropdowns
        dropdowns.forEach(otherDropdown => {
          if (otherDropdown !== dropdown) {
            otherDropdown.querySelector('.dropdown-menu').classList.remove('show');
            otherDropdown.classList.remove('active');
          }
        });
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown')) {
      dropdowns.forEach(dropdown => {
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
        dropdown.classList.remove('active');
      });
    }
  });

  // Handle window resize
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
      // Reset mobile menu state on desktop
      navLinks.classList.remove('flex', 'flex-col');
      navLinks.classList.add('hidden');
      navLinks.classList.add('md:flex');
      
      const icon = navToggle.querySelector("i");
      icon.classList.remove("fa-x");
      icon.classList.add("fa-bars");
      
      // Hide all dropdowns on desktop resize
      dropdowns.forEach(dropdown => {
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
        dropdown.classList.remove('active');
      });
    }
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
});





