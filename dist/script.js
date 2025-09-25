
document.addEventListener("DOMContentLoaded", () => {
  const navToggle = document.getElementById("nav-toggle");
  const navLinks = document.getElementById("nav-links");
  const dropdowns = document.querySelectorAll(".dropdown");

  // Helper: toggle mobile menu
  function toggleMenu() {
    navLinks.classList.toggle("hidden");
    navLinks.classList.toggle("flex");
    navLinks.classList.toggle("flex-col");

    const icon = navToggle.querySelector("i");
    icon.classList.toggle("fa-x");
    icon.classList.toggle("fa-bars");

    // Update aria-expanded for accessibility
    const expanded =
      navToggle.getAttribute("aria-expanded") === "true" || false;
    navToggle.setAttribute("aria-expanded", !expanded);
  }

  // Helper: close all dropdowns
  function closeAllDropdowns() {
    dropdowns.forEach((dropdown) => {
      dropdown.querySelector(".dropdown-menu").classList.remove("show");
      dropdown.classList.remove("active");
    });
  }

  // Mobile menu toggle
  if (navToggle && navLinks) {
    navToggle.setAttribute("aria-expanded", "false");
    navToggle.addEventListener("click", toggleMenu);
  }

  // Dropdown functionality (mobile only)
  dropdowns.forEach((dropdown) => {
    const dropdownMenu = dropdown.querySelector(".dropdown-menu");
    const dropdownLink = dropdown.querySelector("a");

    dropdownLink.addEventListener("click", (e) => {
      if (window.innerWidth < 768) {
        e.preventDefault();
        dropdownMenu.classList.toggle("show");
        dropdown.classList.toggle("active");

        // Close others
        dropdowns.forEach((other) => {
          if (other !== dropdown) {
            other.querySelector(".dropdown-menu").classList.remove("show");
            other.classList.remove("active");
          }
        });
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".dropdown")) {
      closeAllDropdowns();
    }
  });

  // Throttle resize event
  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      if (window.innerWidth >= 768 && navLinks) {
        // Reset menu state
        navLinks.classList.remove("flex", "flex-col");
        navLinks.classList.add("hidden", "md:flex");

        const icon = navToggle.querySelector("i");
        icon.classList.remove("fa-x");
        icon.classList.add("fa-bars");

        navToggle.setAttribute("aria-expanded", "false");
        closeAllDropdowns();
      }
    }, 400); // debounce delay
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      const target = document.querySelector(anchor.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });



  
});
