<?php
 include("header.php")

?>
<script src="carosol.js" defer></script>

<!-- Carousel Section -->
<section class="relative w-full overflow-hidden rounded-xl mb-10 ">
  <img
    id="carousel-image"
    src="./images/infr2.jpg"
    alt="Carousel Image"
    class="w-full h-96 object-cover transition-opacity duration-700 ease-in-out sm:h-[28rem]"
  />

  <!-- Text Overlay -->
   <div id="carousel-caption"
     class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
            bg-opacity-0 text-2xl sm:text-4xl font-extrabold px-6 py-3 z-10 
            bg-clip-text text-transparent 
            bg-gradient-to-br from-amber-600 via-rose-600 to-red-700 text-center">
  Welcome to RTC Inter College!
</div>


  <!-- Prev Button -->
  <button
    id="prevBtn"
    class="z-20 absolute top-1/2 left-2 sm:left-4 transform -translate-y-1/2 font-extrabold bg-opacity-50 text-white p-2 sm:p-3 rounded-full hover:bg-opacity-80"
  >
    ❮
  </button>

  <!-- Next Button -->
  <button
    id="nextBtn"
    class="z-20 absolute top-1/2 right-2 sm:right-4 transform -translate-y-1/2 font-extrabold  bg-opacity-50 text-white p-2 sm:p-3 rounded-full hover:bg-opacity-80"
  >
    ❯
  </button>
</section>

<!-- welcome section  -->
 <section class="relative bg-gradient-to-br from-blue-50 to-white py-16 px-4 sm:px-8 lg:px-24">
  <div class="absolute inset-0 bg-[url('https://source.unsplash.com/featured/?college,campus')] bg-cover bg-center opacity-10 z-0"></div>

  <div class="relative z-10 max-w-5xl mx-auto bg-white/80 backdrop-blur-md shadow-xl rounded-xl p-10 border-l-8 border-blue-600">
    <h2 class="text-4xl sm:text-5xl font-extrabold text-blue-900 mb-6 text-center tracking-wide">
      Welcome to RTC Inter College
    </h2>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      RTC Inter College is a world-class educational institution dedicated to providing quality education and enabling well-rounded development among its students.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      Located in a peaceful and highly accessible campus, our college fosters academic distinction, individual excellence, and social responsibility.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      Our aim is to bridge the gap between conventional learning and modern education by integrating innovative teaching methods with strong values. Students here are empowered through expert faculty, advanced infrastructure, and a learner-centered approach.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      At RTC Inter College, we believe education is not just about books and exams—it's about shaping character, building confidence, and preparing students for life.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed transition duration-300 hover:text-blue-800">
      Come, learn, grow, and transform with us into future-ready citizens who make meaningful contributions to the world.
    </p>
  </div>
</section>

<!-- scrolling effect -->


<section class="overflow-hidden bg-blue-400">
  <div class="relative w-full">
    <div class="flex animate-marquee whitespace-nowrap  pause-on-hover">
      <!-- First set of links -->
      <div class="flex items-center gap-x-12 px-4 py-2 text-sm sm:text-base w-max">
        <a href="#" class="inline-block text-white hover:underline ">
          📢 Welcome to RTC Inter College Admission Portal!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          ✨ Admission Open for Class 11 & 12 – Apply Now!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          📚 Quality Education | 🏫 Modern Campus | 👨‍🏫 Experienced Faculty
        </a>
      </div>

      <!-- Duplicate set of links for seamless scrolling -->
      <div class="flex items-center gap-x-12 px-4 py-2 text-sm sm:text-base w-max">
        <a href="#" class="inline-block text-white hover:underline">
          📢 Welcome to RTC Inter College Admission Portal!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          ✨ Admission Open for Class 11 & 12 – Apply Now!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          📚 Quality Education | 🏫 Modern Campus | 👨‍🏫 Experienced Faculty
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  @keyframes marquee {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .animate-marquee {
    animation: marquee 20s linear infinite;
  }

  @media (max-width: 768px) {
    .animate-marquee {
      animation-duration: 30s;
    }
    /* .pause-on-hover:hover {
  animation-play-state: paused;
} */
  }
</style>


<!-- Principal Section -->
<section class="mt-10 px-4 max-w-screen-lg mx-auto flex flex-col lg:flex-row items-start gap-8">
  <!-- Principal Image -->
  <div class="w-full max-w-xs mx-auto lg:mx-0">
    <img src="https://placehold.co/400x400" alt="Principal" class="rounded-lg shadow-2xl w-full">
  </div>

  <!-- Message & Navigation -->
  <div class="flex-1 text-center lg:text-left">
    <!-- Heading -->
    <p class="text-2xl font-bold shadow p-4 bg-whitev text-lime-600 hover:text-lime-900 rounded-md inline-block">
      Message From Principal
    </p>

    <!-- Message Content -->
    <div class="h-72 overflow-y-auto p-4 mt-4 bg-gray-100 border-4 border-blue-400 rounded-lg text-left leading-relaxed text-gray-700 text-sm sm:text-base">
      <p>
        <span class="text-2xl text-blue-600 font-bold">W</span>
        <span class="text-xl">e Lorem ipsum dolor sit amet...</span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sapiente...
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem possimus magnam rerum quibusdam et sint nobis autem, veniam obcaecati nisi minima blanditiis culpa qui similique cum quis alias? Dolorem quis ipsa, aliquam perferendis provident iste molestiae a, beatae voluptates at accusantium corporis vel accusamus iusto rem tenetur blanditiis obcaecati quidem illum quaerat repellendus impedit. Dolorum, in sequi saepe porro pariatur sapiente est modi inventore omnis corporis quas. Libero excepturi, consequuntur facilis dolorem explicabo sint quos reiciendis, fugiat natus maiores vel qui eaque perspiciatis officia non quo. Veritatis pariatur, modi nobis eum, commodi qui odio, molestias placeat laboriosam dignissimos eius quos.
        <!-- rest of your message -->
      </p>
    </div>

    <!-- Navigation Dots -->
    <div class="flex justify-center lg:justify-center mt-4 gap-6">
      <a href="index.php" class="hover:scale-125 transition group flex flex-col items-center">
        <div class="bg-gray-950 rounded-full size-4 border-red-600 border-2"></div>
        <p class="hidden group-hover:block text-xs mt-1 text-gray-700">Home</p>
      </a>
      <a href="about.php" class="hover:scale-125 transition group flex flex-col items-center">
        <div class="bg-gray-950 rounded-full size-4 border-pink-600 border-2"></div>
        <p class="hidden group-hover:block text-xs mt-1 text-gray-700">About</p>
      </a>
      <a href="admission.php" class="hover:scale-125 transition group flex flex-col items-center">
        <div class="bg-gray-950 rounded-full size-4 border-green-600 border-2"></div>
        <p class="hidden group-hover:block text-xs mt-1 text-gray-700">Take Admission</p>
      </a>
    </div>
  </div>
</section>



<hr class="text-[2px] text-blue-700 mt-4">
<!-- Importent Notice -->
<div  style="background-image: url('./images/infr2.jpg');width: 100%;background-size: cover; height:auto;background-repeat: no-repeat; background-attachment: fixed; background-position: center center; ">
 <section class="mt-10 shadow-2xs lg:w-3xl lg:mx-auto md:w-2xl md:mx-auto sm:w-1xl sm:mx-auto p-2" >
  
  <h2 class="text-3xl font-bold text-center mb-4 text-red-600 hover:text-red-800">Importent notice</h2>
  
  <style>
    
    
@keyframes scroll-up-slow {
  0%   { transform: translateY(0%); }
  100% { transform: translateY(-50%); }
}

@keyframes scroll-up-fast {
  0%   { transform: translateY(0%); }
  100% { transform: translateY(-50%); }
}

.scroll-slow {
  animation: scroll-up-slow 20s linear infinite;
}

.scroll-fast {
  animation: scroll-up-fast 10s linear infinite;
}

.pause-on-hover:hover {
  animation-play-state: paused;
}
</style>
<!-- Flex Row of Two Notice Boards -->
<div class="flex flex-col lg:flex-row md:flex-row gap-8">
  <!-- Notice Board 1 -->
  <div class="flex flex-col lg:flex-row md:flex-row gap-8">

  <!-- Notice Box 1 - Slower -->
  <div class="h-60 w-80 mx-auto overflow-hidden bg-gray-100 border rounded-lg relative  ">
    <div class="scroll-slow pause-on-hover space-y-2 p-4">
      <p>📢 Notice 1: Welcome to our college!</p><hr>
      <p>📢 Notice 2: Annual sports meet is on 15th August.</p><hr>
      <p>📢 Notice 3: Midterm exams start next Monday.</p><hr>
      <p>📢 Notice 4: Submit your assignments by Friday.</p><hr>
      <p>📢 Notice 5: Campus cleaning drive on Saturday.</p><hr>
      <p>📢 Notice 6: New books available in the library.</p><hr>
      <p>📢 Notice 7: Register for the coding workshop.</p><hr>
      
      <!-- Repeat for infinite effect -->
      <p>📢 Notice 1: Welcome to our college!</p><hr>
      <p>📢 Notice 2: Annual sports meet is on 15th August.</p><hr>
      <p>📢 Notice 3: Midterm exams start next Monday.</p><hr>
      <p>📢 Notice 4: Submit your assignments by Friday.</p><hr>
      <p>📢 Notice 5: Campus cleaning drive on Saturday.</p><hr>
      <p>📢 Notice 6: New books available in the library.</p><hr>
      <p>📢 Notice 7: Register for the coding workshop.</p>
    </div>
  </div>

  <!-- Notice Box 2 - Faster -->
  <div class="h-60 w-80  mx-auto overflow-hidden bg-gray-100 border rounded-lg relative">
    <div class="scroll-fast pause-on-hover space-y-2 p-4">
      <p>📢 Notice A: Admissions are now open.</p><hr>
      <p>📢 Notice B: Attend the orientation on Monday.</p><hr>
      <p>📢 Notice C: Collect your ID cards.</p><hr>
      <p>📢 Notice D: Library membership drive ongoing.</p><hr>
      <p>📢 Notice E: Career counseling this Friday.</p><hr>
      <p>📢 Notice F: PTM scheduled next week.</p><hr>
      <p>📢 Notice G: Cultural fest auditions open.</p><hr>
      
      <!-- Repeat for infinite effect -->
      <p>📢 Notice A: Admissions are now open.</p><hr>
      <p>📢 Notice B: Attend the orientation on Monday.</p><hr>
      <p>📢 Notice C: Collect your ID cards.</p><hr>
      <p>📢 Notice D: Library membership drive ongoing.</p><hr>
      <p>📢 Notice E: Career counseling this Friday.</p><hr>
      <p>📢 Notice F: PTM scheduled next week.</p><hr>
      <p>📢 Notice G: Cultural fest auditions open.</p>
    </div>
  </div>

</div>
</div>
<div>
  <h2 class="text-center text-4xl font-bold text-red-700 hover:text-pink-700 transition-colors">Full Guidelines for Student</h2>
  <div class="flex flex-col lg:flex-row md:flex-row gap-8 ">
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">🎓 Entrance Exams <i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-300 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">✅ Selection <i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105  transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">💻 Teaching Offline & Online<i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">📝 Exams<i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">📊 Result</span>
  </div>
</div> 

</div>


</section>
</div>

<hr class="text-[2px] text-blue-700 mt-4">


<!-- Our Courses Section -->
<section class="py-16 px-4 sm:px-8 bg-white">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-blue-800 hover:text-pink-700 transition-colors mb-4">Our Courses</h2>
      <p class="text-xl text-gray-600">We provide various courses including:</p>
</div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-8">
      <!-- ARTS -->
      <div class="bg-white shadow-xl rounded-2xl p-8 border-l-4 border-blue-500 hover:shadow-2xl transition-all duration-300">
        <div class="flex items-center mb-6">
          <i class="fas fa-palette text-3xl text-blue-600 mr-4"></i>
          <h2 class="text-3xl font-bold text-blue-700">ARTS</h2>
</div>
        <div class="grid grid-cols-1 gap-3">
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">History</span>
          </a>
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">Geography</span>
          </a>
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">Political Science</span>
          </a>
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">English Core</span>
          </a>
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">English Elective</span>
          </a>
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">Hindi Core</span>
          </a>
          <a href="#" class="block p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-200 border-l-4 border-blue-200 hover:border-blue-400">
            <span class="font-semibold text-blue-800">Hindi Elective</span>
          </a>
</div>
  </div>

  <!-- SCIENCE -->
      <div class="bg-white shadow-xl rounded-2xl p-8 border-l-4 border-green-500 hover:shadow-2xl transition-all duration-300">
        <div class="flex items-center mb-6">
          <i class="fas fa-flask text-3xl text-green-600 mr-4"></i>
          <h2 class="text-3xl font-bold text-green-700">SCIENCE</h2>
        </div>
        <div class="grid grid-cols-1 gap-3">
          <a href="#" class="block p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 border-l-4 border-green-200 hover:border-green-400">
            <span class="font-semibold text-green-800">Physics</span>
          </a>
          <a href="#" class="block p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 border-l-4 border-green-200 hover:border-green-400">
            <span class="font-semibold text-green-800">Chemistry</span>
          </a>
          <a href="#" class="block p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 border-l-4 border-green-200 hover:border-green-400">
            <span class="font-semibold text-green-800">Biology</span>
          </a>
          <a href="#" class="block p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 border-l-4 border-green-200 hover:border-green-400">
            <span class="font-semibold text-green-800">Mathematics</span>
          </a>
          <a href="#" class="block p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 border-l-4 border-green-200 hover:border-green-400">
            <span class="font-semibold text-green-800">English</span>
          </a>
          <a href="#" class="block p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-200 border-l-4 border-green-200 hover:border-green-400">
            <span class="font-semibold text-green-800">Computer Science</span>
          </a>
        </div>
  </div>

  <!-- COMMERCE -->
      <div class="bg-white shadow-xl rounded-2xl p-8 border-l-4 border-yellow-500 hover:shadow-2xl transition-all duration-300">
        <div class="flex items-center mb-6">
          <i class="fas fa-chart-line text-3xl text-yellow-600 mr-4"></i>
          <h2 class="text-3xl font-bold text-yellow-700">COMMERCE</h2>
        </div>
        <div class="grid grid-cols-1 gap-3">
          <a href="#" class="block p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors duration-200 border-l-4 border-yellow-200 hover:border-yellow-400">
            <span class="font-semibold text-yellow-800">Accountancy</span>
          </a>
          <a href="#" class="block p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors duration-200 border-l-4 border-yellow-200 hover:border-yellow-400">
            <span class="font-semibold text-yellow-800">Business Studies</span>
          </a>
          <a href="#" class="block p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors duration-200 border-l-4 border-yellow-200 hover:border-yellow-400">
            <span class="font-semibold text-yellow-800">Economics</span>
          </a>
          <a href="#" class="block p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors duration-200 border-l-4 border-yellow-200 hover:border-yellow-400">
            <span class="font-semibold text-yellow-800">English</span>
          </a>
          <a href="#" class="block p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors duration-200 border-l-4 border-yellow-200 hover:border-yellow-400">
            <span class="font-semibold text-yellow-800">Mathematics</span>
          </a>
          <a href="#" class="block p-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors duration-200 border-l-4 border-yellow-200 hover:border-yellow-400">
            <span class="font-semibold text-yellow-800">Entrepreneurship Studies</span>
          </a>
        </div>
  </div>
</div>
</div>
</section>

<!-- section of reviews from our students -->
<section style="background-image:url('./images/infr2.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;" class="py-10 px-4">


  <div class="text-center mb-8">
    <h2 class="text-3xl sm:text-4xl font-bold text-yellow-700 hover:text-pink-700">
      Reviews from Our Students
    </h2>
  </div>

  <div class=" ">
  <div id="reviewsWrapper" class="flex flex-wrap justify-center">
    <!-- Reviews will be injected by JavaScript -->
  </div>
</div>

</section>


<?php
include("ImpLinks.php");
 include("footer.php")
 
?>