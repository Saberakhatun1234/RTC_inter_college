<?php
include("header.php");
?>

<div class=" mx-auto w-full ">
<section id="admission" class="relative  h-auto ">
    <div class="w-full h-auto ">
        <img src="./images/sportsHero.jpg" alt="heroAdmission" class="w-full h-96 object-cover">
        <h1 class="text-4xl text-blue-700 hover:text-blue-900 text-center font-bold absolute top-6 w-full">Welcome to Admissions Portal of RTC Inter College</h1>
        <p class="font-bold text-gray-950 hover:text-gray-800 p-5 mt-10 ">At RTC Inter College, we believe that education is the foundation of a bright and empowered future. Our Admission Portal is your gateway to join a dynamic academic environment where tradition meets innovation.

Whether you're a curious learner stepping into your intermediate journey or a driven student aiming for academic excellence, we welcome you to be a part of our ever-growing family.

With experienced faculty, state-of-the-art infrastructure, and a student-centric approach, RTC Inter College is dedicated to nurturing minds and shaping futures.</p>
</div>
</section>


 <?php
  $totalStudents = 1234;
  $totalFaculties = 56;
  $totalCourses = 18;
?>

<section class="bg-gray-100 py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center text-green-700 mb-10">Our Achievements</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
      
      <!-- Students Counter -->
      <div class="bg-white p-6 rounded shadow hover:scale-105 transition">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Total Students</h3>
        <p id="counter-students" class="text-5xl font-extrabold text-blue-800">0</p>
      </div>
      
      <!-- Faculties Counter -->
      <div class="bg-white p-6 rounded shadow hover:scale-105 transition">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Total Faculties</h3>
        <p id="counter-faculties" class="text-5xl font-extrabold text-purple-800">0</p>
      </div>
      
      <!-- Courses Counter -->
      <div class="bg-white p-6 rounded shadow hover:scale-105 transition">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Total Courses</h3>
        <p id="counter-courses" class="text-5xl font-extrabold text-green-800">0</p>
      </div>

    </div>
  </div>

  <!-- Inject PHP values into JS -->
  <script>
    const data = {
      students: <?php echo $totalStudents; ?>,
      faculties: <?php echo $totalFaculties; ?>,
      courses: <?php echo $totalCourses; ?>
    };
  </script>

  <!-- External Script -->
  <script src="counter.js"></script>
</section>



<section class="px-4 py-8 bg-gray-100">
  <h1 class="font-bold text-3xl text-gray-800 text-center">Online Admission Form</h1>
  <form action="/" method="post" class="max-w-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 shadow-lg p-6 rounded-lg bg-white">
    
    <label class="font-bold text-lg text-gray-700">Name:</label>
    <input type="text" name="name" placeholder="Enter your name" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label class="font-bold text-lg text-gray-700">Email:</label>
    <input type="email" name="email" placeholder="Enter your email" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label class="font-bold text-lg text-gray-700">Phone Number:</label>
    <input type="tel" name="phone" placeholder="Enter your phone number" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label class="font-bold text-lg text-gray-700">Previous Result:</label>
    <input type="text" name="previous_result" placeholder="Enter previous result" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label class="font-bold text-lg text-gray-700">Previous Class:</label>
    <input type="text" name="previous_class" placeholder="Enter previous class" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label class="font-bold text-lg text-gray-700">Address:</label>
    <input type="text" name="address" placeholder="Enter address" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label class="font-bold text-lg text-gray-700">Admission Course:</label>
    <input type="text" name="course" placeholder="Enter course name" class="border border-gray-300 rounded px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <!-- Empty div for grid balance -->
      <button type="submit" class="md:col-span-2 bg-blue-600 text-white  font-bold py-2 rounded hover:bg-blue-700 transition duration-300">
     Clear all
    </button>
    
    <button type="submit" class="md:col-span-2 bg-blue-600 text-white  font-bold py-2 rounded hover:bg-blue-700 transition duration-300">
      Submit
    </button>
    
  </form>
</section>
  </div>
<?php
include("ImpLinks.php");
include("footer.php")
?>