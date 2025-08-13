<?php
include("header.php");
?>

<section class="bg-gray-50 py-16 px-4 sm:px-2">
  <div class="max-w-full mx-auto">
    <h1 class="text-4xl text-center bg-gradient-to-br from-amber-500 via-red-700 to-blue-900 text-transparent bg-clip-text font-bold mb-12">
      College Gallery
    </h1>
    
    <p class="text-lg text-gray-700 text-center mb-12 leading-relaxed">
      Explore our campus through photos, videos, and events. Get a glimpse of the vibrant life at RTC Inter College.
    </p>

    <!-- Photos Section -->
    <div id="photos" class="mb-16">
      <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">Photo Gallery</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Campus Photos -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <img src="./images/infr3.jpg" alt="College Campus" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Campus View</h3>
            <p class="text-gray-600 text-sm">Beautiful campus with modern infrastructure</p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <img src="./images/infr2.jpg" alt="Infrastructure" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Modern Infrastructure</h3>
            <p class="text-gray-600 text-sm">State-of-the-art facilities for students</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow ">
          <img src="./images/building1.jpg" alt="building" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="tetx-lg font-semibold text-blue-700 mb-2 ">Mordern Infrastructure</h3>
            <p class="text-gray-600 text-sm">State-of-the-art facilities for students</p>
        </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow ">
          <img src="./images/building2.jpg" alt="building" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="tetx-lg font-semibold text-blue-700 mb-2 ">Mordern Infrastructure</h3>
            <p class="text-gray-600 text-sm">State-of-the-art facilities for students</p>
        </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow ">
          <img src="./images/building3.jpg" alt="building" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="tetx-lg font-semibold text-blue-700 mb-2 ">Mordern Infrastructure</h3>
            <p class="text-gray-600 text-sm">State-of-the-art facilities for students</p>
        </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow ">
          <img src="./images/building4.jpg" alt="building" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="tetx-lg font-semibold text-blue-700 mb-2 ">Mordern Infrastructure</h3>
            <p class="text-gray-600 text-sm">State-of-the-art facilities for students</p>
        </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow ">
          <img src="./images/schoolBus.jpg" alt="building" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="tetx-lg font-semibold text-blue-700 mb-2 ">Mordern Infrastructure</h3>
            <p class="text-gray-600 text-sm">State-of-the-art facilities for students</p>
        </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <img src="./images/chemistryLab.jpg" alt="Laboratory" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Science Lab</h3>
            <p class="text-gray-600 text-sm">Well-equipped laboratories for practical learning</p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <img src="./images/library.jpg" alt="Library" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Library</h3>
            <p class="text-gray-600 text-sm">Extensive collection of books and study materials</p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <img src="./images/computerLab.jpg" alt="Computer Lab" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Computer Lab</h3>
            <p class="text-gray-600 text-sm">Modern computer facilities for digital learning</p>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <img src="./images/sportsHero.jpg" alt="">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Sports Ground</h3>
            <p class="text-gray-600 text-sm">Spacious grounds for sports and activities</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Videos Section -->
    <div id="videos" class="mb-16">
      <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">Video Gallery</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <div class="w-full h-64 bg-gradient-to-br from-red-400 to-pink-600 flex items-center justify-center">
            <i class="fas fa-play-circle text-6xl text-white opacity-70"></i>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-blue-700 mb-3">Campus Tour</h3>
            <p class="text-gray-600 mb-4">Take a virtual tour of our beautiful campus and facilities</p>
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
              Watch Video
            </button>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <div class="w-full h-64 bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center">
            <i class="fas fa-play-circle text-6xl text-white opacity-70"></i>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-blue-700 mb-3">Student Life</h3>
            <p class="text-gray-600 mb-4">Experience the vibrant student life and activities</p>
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
              Watch Video
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Events Section -->
    <div id="events" class="mb-16">
      <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">Events Gallery</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="w-full h-48 bg-gradient-to-br from-purple-400 to-indigo-600 flex items-center justify-center">
            <i class="fas fa-graduation-cap text-6xl text-white opacity-50"></i>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Annual Function</h3>
            <p class="text-gray-600 text-sm">Celebrating achievements and talents</p>
            <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded mt-2">Annual Event</span>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-cyan-600 flex items-center justify-center">
            <i class="fas fa-trophy text-6xl text-white opacity-50"></i>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Sports Meet</h3>
            <p class="text-gray-600 text-sm">Annual sports competition and activities</p>
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mt-2">Sports Event</span>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="w-full h-48 bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center">
            <i class="fas fa-microscope text-6xl text-white opacity-50"></i>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Science Fair</h3>
            <p class="text-gray-600 text-sm">Showcasing scientific innovations and projects</p>
            <span class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded mt-2">Academic Event</span>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="w-full h-48 bg-gradient-to-br from-orange-400 to-red-600 flex items-center justify-center">
            <i class="fas fa-music text-6xl text-white opacity-50"></i>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Cultural Program</h3>
            <p class="text-gray-600 text-sm">Music, dance, and cultural performances</p>
            <span class="inline-block bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded mt-2">Cultural Event</span>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="w-full h-48 bg-gradient-to-br from-pink-400 to-rose-600 flex items-center justify-center">
            <i class="fas fa-chart-line text-6xl text-white opacity-50"></i>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Business Fair</h3>
            <p class="text-gray-600 text-sm">Entrepreneurial projects and business ideas</p>
            <span class="inline-block bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded mt-2">Business Event</span>
          </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="w-full h-48 bg-gradient-to-br from-indigo-400 to-purple-600 flex items-center justify-center">
            <i class="fas fa-palette text-6xl text-white opacity-50"></i>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-blue-700 mb-2">Art Exhibition</h3>
            <p class="text-gray-600 text-sm">Student artwork and creative expressions</p>
            <span class="inline-block bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded mt-2">Art Event</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-blue-600 rounded-xl  text-center text-white">
      <h3 class="text-2xl font-bold mb-4">Want to See More?</h3>
      <p class="text-blue-100 mb-6">Follow us on social media for regular updates and behind-the-scenes content</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-4xl mx-auto p-6">
  
  <a href="#" class="flex items-center justify-center bg-white text-blue-600 px-6 py-4 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
    <i class="fab fa-facebook text-2xl mr-3"></i>
    <span class="font-semibold text-lg">Facebook</span>
  </a>

  
    <a href="#" class="flex items-center justify-center bg-white text-red-500 px-6 py-4 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
          <i class="fab fa-instagram mr-3 text-2xl "></i>    <span class="font-semibold text-lg">Instagram</span>
        </a>

  
  <a href="#" class="flex items-center justify-center bg-white text-red-500 px-6 py-4 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
    <i class="fab fa-youtube text-2xl mr-3"></i>
    <span class="font-semibold text-lg">YouTube</span>
  </a>

</div>

    </div>
  </div>
</section>

<?php
include("ImpLinks.php");
include("footer.php");
?>
