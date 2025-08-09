<?php
include("header.php");
?>

<section class="bg-gray-50 py-16 px-4 sm:px-8">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-4xl text-center bg-gradient-to-br from-amber-500 via-red-700 to-blue-900 text-transparent bg-clip-text font-bold mb-12">
      Academic Syllabus
    </h1>
    
    <p class="text-lg text-gray-700 text-center mb-12 leading-relaxed">
      RTC Inter College offers comprehensive syllabi for Science, Commerce, and Arts streams. 
      Our curriculum is designed to provide students with a strong foundation for higher education and career success.
    </p>

    <!-- Science Syllabus -->
    <div id="science" class="bg-white rounded-xl shadow-lg p-8 mb-8">
      <h2 class="text-3xl font-bold text-blue-700 mb-6 flex items-center">
        <i class="fas fa-flask mr-3"></i>
        Science Stream
      </h2>
      
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold text-green-700 mb-4">Class 11</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>Physics:</strong> Mechanics, Thermodynamics, Waves</li>
            <li><strong>Chemistry:</strong> Physical Chemistry, Organic Chemistry</li>
            <li><strong>Biology:</strong> Cell Biology, Plant Physiology</li>
            <li><strong>Mathematics:</strong> Algebra, Calculus, Trigonometry</li>
            <li><strong>English:</strong> Literature, Grammar, Communication</li>
            <li><strong>Hindi:</strong> Literature and Grammar</li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-xl font-semibold text-green-700 mb-4">Class 12</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>Physics:</strong> Electromagnetism, Optics, Modern Physics</li>
            <li><strong>Chemistry:</strong> Inorganic Chemistry, Analytical Chemistry</li>
            <li><strong>Biology:</strong> Human Physiology, Genetics, Ecology</li>
            <li><strong>Mathematics:</strong> Advanced Calculus, Vectors, Probability</li>
            <li><strong>English:</strong> Advanced Literature, Writing Skills</li>
            <li><strong>Hindi:</strong> Advanced Literature and Composition</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Commerce Syllabus -->
    <div id="commerce" class="bg-white rounded-xl shadow-lg p-8 mb-8">
      <h2 class="text-3xl font-bold text-blue-700 mb-6 flex items-center">
        <i class="fas fa-chart-line mr-3"></i>
        Commerce Stream
      </h2>
      
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold text-green-700 mb-4">Class 11</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>Accountancy:</strong> Basic Accounting, Journal Entries</li>
            <li><strong>Business Studies:</strong> Business Environment, Management</li>
            <li><strong>Economics:</strong> Microeconomics, Statistics</li>
            <li><strong>Mathematics:</strong> Business Mathematics, Statistics</li>
            <li><strong>English:</strong> Business Communication, Literature</li>
            <li><strong>Hindi:</strong> Literature and Grammar</li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-xl font-semibold text-green-700 mb-4">Class 12</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>Accountancy:</strong> Advanced Accounting, Financial Statements</li>
            <li><strong>Business Studies:</strong> Marketing, Finance, Human Resources</li>
            <li><strong>Economics:</strong> Macroeconomics, Indian Economy</li>
            <li><strong>Mathematics:</strong> Advanced Business Mathematics</li>
            <li><strong>English:</strong> Advanced Business Communication</li>
            <li><strong>Hindi:</strong> Advanced Literature and Composition</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Arts Syllabus -->
    <div id="arts" class="bg-white rounded-xl shadow-lg p-8 mb-8">
      <h2 class="text-3xl font-bold text-blue-700 mb-6 flex items-center">
        <i class="fas fa-palette mr-3"></i>
        Arts Stream
      </h2>
      
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold text-green-700 mb-4">Class 11</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>History:</strong> Ancient and Medieval History</li>
            <li><strong>Geography:</strong> Physical Geography, Maps</li>
            <li><strong>Political Science:</strong> Political Theory, Constitution</li>
            <li><strong>Economics:</strong> Basic Economics, Statistics</li>
            <li><strong>English:</strong> Literature, Creative Writing</li>
            <li><strong>Hindi:</strong> Literature and Grammar</li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-xl font-semibold text-green-700 mb-4">Class 12</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>History:</strong> Modern History, World History</li>
            <li><strong>Geography:</strong> Human Geography, Regional Studies</li>
            <li><strong>Political Science:</strong> International Relations, Politics</li>
            <li><strong>Economics:</strong> Development Economics, Indian Economy</li>
            <li><strong>English:</strong> Advanced Literature, Creative Writing</li>
            <li><strong>Hindi:</strong> Advanced Literature and Composition</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Additional Information -->
    <div class="bg-blue-50 rounded-xl p-8">
      <h3 class="text-2xl font-bold text-blue-800 mb-4">Additional Information</h3>
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <h4 class="text-lg font-semibold text-blue-700 mb-3">Teaching Methodology</h4>
          <ul class="space-y-2 text-gray-700">
            <li>• Interactive classroom sessions</li>
            <li>• Regular assessments and tests</li>
            <li>• Practical demonstrations</li>
            <li>• Doubt clearing sessions</li>
            <li>• Mock examinations</li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-blue-700 mb-3">Study Resources</h4>
          <ul class="space-y-2 text-gray-700">
            <li>• Comprehensive study materials</li>
            <li>• Digital learning resources</li>
            <li>• Library access</li>
            <li>• Online study portals</li>
            <li>• Expert faculty guidance</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
