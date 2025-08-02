<?php
include("header.php");
?>
<section class="bg-white py-16 px-4 sm:px-8 lg:px-20" id="sports">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-center text-green-700 mb-10">🏅 Sports at RTC Inter College</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <!-- Left: Text content -->
      <div class="text-gray-700 space-y-5">
        <p class="text-lg leading-relaxed">
          Sports and physical education are integral to student life at <span class="text-green-800 font-semibold">RTC Inter College</span>. 
          We believe that sports develop discipline, teamwork, leadership, and determination — essential qualities for success in life.
        </p>

        <p class="text-lg">Our college offers a variety of sports and games, including:</p>

        <ul class="grid grid-cols-2 gap-3 list-disc pl-5 text-base text-gray-800">
          <li>Cricket</li>
          <li>Football</li>
          <li>Volleyball</li>
          <li>Badminton</li>
          <li>Kabaddi</li>
          <li>Athletics</li>
        </ul>

        <p class="text-lg">
          Regular <span class="font-semibold text-green-700">intra-college and inter-college tournaments</span> offer students a platform to showcase their skills and compete at district, state, and national levels.
        </p>

        <p class="text-lg">
          With trained coaches, dedicated PE staff, a spacious playground, and indoor facilities, we ensure year-round physical engagement.
        </p>

        <p class="text-lg font-medium text-green-800">
          We aim to nurture confident, healthy, and strong individuals through a vibrant sports culture.
        </p>
      </div>

      <!-- Right: Image -->
      <div>
        <img src="./images/sportsHero.jpg" alt="RTC Sports" class="w-full h-auto rounded-xl shadow-lg object-cover">
      </div>
    </div>
  </div>
</section>

<?php
include("ImpLinks.php");
include("footer.php")
?>