<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RTC Inter College</title>
  <link rel="stylesheet" href="output.css">
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="relative bg-gray-100 w-screen h-screen overflow-x-hidden">
  <section class="sticky z-50 top-0">
    <!-- Top Contact Header -->
    <header class="bg-[#003366] text-white text-sm">
      <div class="flex justify-between items-center px-4 py-2 flex-wrap">
        <div class="grid sm:grid-cols-2 gap-4">
          <p><i class="fa-solid fa-square-envelope mr-1"></i> rtcintercollege@gmail.com</p>
          <p><i class="fa-solid fa-phone mr-1"></i> 123-456-789 -9</p>
        </div>
        <div class="grid sm:grid-cols-2 items-center gap-4 pr-4 mt-2 sm:mt-0">
          <p class="cursor-pointer hover:underline"><a href="login.php">Login</a></p>
          <div class="flex gap-3 pr-5">
            <a href="https://facebook.com" class="hover:scale-125 transition"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://linkedin.com" class="hover:scale-125 transition"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://instagram.com" class="hover:scale-125 transition"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </header>

    <!-- Logo and College Name -->
    <div class="flex items-center gap-4 bg-gray-100 px-4 py-2">
      <div>
        <img src="./images/logo.webp" alt="logo" class="size-20">
      </div>
      <div>
        <p class="text-3xl md:text-5xl font-bold text-blue-700 hover:text-blue-900 transition-colors duration-300 text-center sm:text-left">
 RTC INTER COLLEGE
        </p>
      </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="bg-[#004080] px-4 py-2 w-full relative">
     
    <!-- Hamburger button for mobile -->
        <button
          id="nav-toggle"
          class="md:hidden block focus:outline-none"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars text-2xl text-white"></i>
        </button>
        <!-- Navigation links -->
        <ul
          id="nav-links"
          class="hidden md:flex flex-col md:flex-row text-white md:static w-full md:w-auto bg-blue-800 md:bg-transparent z-50 md:z-auto"
        >
        <!-- Home -->
        <li class="group relative">
          <a href="index.php" class="px-4 py-2 hover:text-yellow-400 block">Home</a>
        </li>

        <!-- About -->
        <li class="group relative dropdown">
          <a href="about.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            About
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="about.php#vision&mission" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Vision & Mission</a></li>
            <li><a href="about.php#history" class="block px-4 py-2 hover:bg-[#005599] transition-colors">History</a></li>
            <li><a href="about.php#management" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Management</a></li>
            <li><a href="about.php#infrastructure" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Infrastructure</a></li>
            <li><a href="about.php#facilities" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Facilities</a></li>
            <li><a href="about.php#location" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Location</a></li>
          </ul>
        </li>

        <!-- Admission -->
        <li class="group relative dropdown">
          <a href="admission.php#admission" class="px-4 py-2 hover:text-yellow-400  flex items-center justify-between">
            Admission
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="admission.php#online-admission" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Online Admission</a></li>
            <li><a href="admission.php#eligibility" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Eligibility</a></li>
            <li><a href="admission.php#documents" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Documents Required</a></li>
            <li><a href="admission.php#fee-structure" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Fee Structure</a></li>
          </ul>
        </li>

        <!-- Faculty -->
        <li class="group relative dropdown">
          <a href="faculties.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            Faculty Members
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="faculties.php#science" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Science Faculty</a></li>
            <li><a href="faculties.php#commerce" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Commerce Faculty</a></li>
            <li><a href="faculties.php#arts" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Arts Faculty</a></li>
            <li><a href="faculties.php#other" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Other Faculty</a></li>
          </ul>
        </li>

        <!-- Syllabus -->
        <li class="group relative dropdown">
          <a href="syllabus.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            Syllabus
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="syllabus.php#science" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Science</a></li>
            <li><a href="syllabus.php#commerce" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Commerce</a></li>
            <li><a href="syllabus.php#arts" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Arts</a></li>
          </ul>
        </li>

        <!-- Sports -->
        <li class="group relative dropdown">
          <a href="sports.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            Sports
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="sports.php#annual-sports" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Annual Sports</a></li>
            <li><a href="sports.php#achievements" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Achievements</a></li>
            <li><a href="sports.php#join-club" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Join Sports Club</a></li>
          </ul>
        </li>

        <!-- Gallery -->
        <li class="group relative dropdown">
          <a href="gallery.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            Gallery
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="gallery.php#photos" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Photos</a></li>
            <li><a href="gallery.php#videos" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Videos</a></li>
            <li><a href="gallery.php#events" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Events</a></li>
          </ul>
        </li>

        <!-- Notices -->
        <li class="group relative dropdown">
          <a href="notice.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            Notices
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="notice.php#exam-notice" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Exam Notice</a></li>
            <li><a href="notice.php#holiday-notice" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Holiday Notice</a></li>
            <li><a href="notice.php#circular" class="block px-4 py-2 hover:bg-[#005599] transition-colors">New Circular</a></li>
          </ul>
        </li>

        <!-- Contact -->
        <li class="group relative dropdown">
          <a href="contact.php" class="px-4 py-2 hover:text-yellow-400 flex items-center justify-between">
            Contact
            <i class="fas fa-chevron-down ml-1 text-xs md:hidden transition-transform duration-300"></i>
          </a>
          <ul class="dropdown-menu md:absolute hidden md:group-hover:block bg-[#003366] mt-0 md:mt-2 min-w-[180px] rounded shadow-lg text-sm z-50 left-0 md:left-auto">
            <li><a href="contact.php#call-us" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Call Us</a></li>
            <li><a href="contact.php#email-us" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Email Us</a></li>
            <li><a href="contact.php#map" class="block px-4 py-2 hover:bg-[#005599] transition-colors">Map Location</a></li>
          </ul>
        </li>
      </ul>
       
</div>
    </nav>

  </section>

  
  <!-- Main Section Placeholder -->
  <main class="p-4 bg-gray-100 min-h-[500px]">
    <!-- Page content starts here -->
  