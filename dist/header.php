<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RTC Inter College</title>
  <link rel="stylesheet" href="output.css">
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="relative bg-gray-100 w-screen h-screen overflow-x-auto">
  <section class="sticky z-50 top-0">
    <!-- Top Contact Header -->
    <header class="bg-[#003366] text-white text-sm">
      <div class="flex justify-between items-center px-4 py-2 flex-wrap">
        <div class="grid sm:grid-cols-2 gap-4">
          <p><i class="fa-solid fa-square-envelope mr-1"></i> rtcintercollege@gmail.com</p>
          <p><i class="fa-solid fa-phone mr-1"></i> 123-456-789 -9</p>
        </div>
        <div class="grid sm:grid-cols-2 items-center gap-4 pr-4 mt-2 sm:mt-0">
          <p class="cursor-pointer hover:underline">Login</p>
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
          WELCOME TO RTC INTER COLLEGE
        </p>
      </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="bg-[#004080] px-4 py-2 w-full relative">
     
     <div class="">
      <button id="nav-toggle" class="md:hidden lg:hidden sm:flex" aria-label="Toggle navigation">
        <i class="fas fa-bars text-2xl text-gray-800 "></i>
      </button>
</div>
      <ul class="sm:hidden sm:flex-col  md:flex md:flex-row lg:flex lg:flex-row items-center  justify-center gap-4 text-white font-medium " id="nav-links">
        <!-- Home -->
        <li class="group relative">
          <a href="index.php" class="px-4 py-2 hover:text-yellow-400">Home</a>
        </li>

        <!-- About -->
        <li class="group relative">
          <a href="about.php" class="px-4 py-2 hover:text-yellow-400">About</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="about.php#vision&mission" class="block px-4 py-2 hover:bg-[#005599]">Vision & Mission</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">History</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Management</a></li>
            <li><a href="about.php#infrastructure" class="block px-4 py-2 hover:bg-[#005599]">Infrastructure</a></li>
            <li><a href="about.php#facilities" class="block px-4 py-2 hover:bg-[#005599]">Facilities</a></li>
            <li><a href="about.php#location" class="block px-4 py-2 hover:bg-[#005599]">Location</a></li>
          </ul>
        </li>

        <!-- Admission -->
        <li class="group relative">
          <a href="admission.php#admission" class="px-4 py-2 hover:text-yellow-400">Admission</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Online Admission</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Eligibility</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Documents Required</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Fee Structure</a></li>
          </ul>
        </li>

        <!-- Faculty -->
        <li class="group relative">
          <a href="faculties.php" class="px-4 py-2 hover:text-yellow-400">Faculty Members</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="faculties.php#science" class="block px-4 py-2 hover:bg-[#005599]">Science Faculty</a></li>
            <li><a href="faculties.php#commerce" class="block px-4 py-2 hover:bg-[#005599]">Commerce Faculty</a></li>
            <li><a href="faculties.php#arts" class="block px-4 py-2 hover:bg-[#005599]">Arts Faculty</a></li>
            <li><a href="faculties.php#other" class="block px-4 py-2 hover:bg-[#005599]">Other Faculty</a></li>
          </ul>
        </li>

        <!-- Syllabus -->
        <li class="group relative">
          <a href="syllabus.php" class="px-4 py-2 hover:text-yellow-400">Syllabus</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Science</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Commerce</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Arts</a></li>
          </ul>
        </li>

        <!-- Sports -->
        <li class="group relative">
          <a href="sports.php" class="px-4 py-2 hover:text-yellow-400">Sports</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Annual Sports</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Achievements</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Join Sports Club</a></li>
          </ul>
        </li>

        <!-- Gallery -->
        <li class="group relative">
          <a href="gallery.php" class="px-4 py-2 hover:text-yellow-400">Gallery</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Photos</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Videos</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Events</a></li>
          </ul>
        </li>

        <!-- Notices -->
        <li class="group relative">
          <a href="notice.php" class="px-4 py-2 hover:text-yellow-400">Notices</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Exam Notice</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Holiday Notice</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">New Circular</a></li>
          </ul>
        </li>

        <!-- Contact -->
        <li class="group relative">
          <a href="contact.php" class="px-4 py-2 hover:text-yellow-400">Contact</a>
          <ul class="absolute hidden group-hover:block bg-[#003366] mt-2 min-w-[180px] rounded shadow-lg text-sm z-50">
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Call Us</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Email Us</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-[#005599]">Map Location</a></li>
          </ul>
        </li>
      </ul>
       
</div>
    </nav>

  </section>




  
  <!-- Main Section Placeholder -->
  <main class="p-4 bg-gray-100 min-h-[500px]">
    <!-- Page content starts here -->
  