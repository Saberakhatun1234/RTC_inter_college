<?php
include("header.php");
?>
   
   <div class="relative">
  <img src="./images/rtcheader.png" alt="heroAdmission" class="w-full h-72 object-cover mt-8">

  <!-- Breadcrumb text -->
 
  <div class="absolute top-1/2 left-2 ">
      <h1 class="  md:text-4xl text-bold font-bold text-white ">RTC Inter College </h1>
      <a href="index.php" class="hover:underline text-white">Home</a> / 
    <a href="contact.php" class="hover:underline">Contact</a>
</div>
</div>



<section class="bg-gray-50 py-16 px-4">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-4xl text-center bg-gradient-to-br from-amber-500 via-red-700 to-blue-900 text-transparent bg-clip-text font-bold mb-12">
      Contact Us
    </h1>
    
    <p class="text-lg text-gray-700 text-center mb-12 leading-relaxed">
      Get in touch with us for any queries, admissions, or general information. We're here to help you!
    </p>

    <div class="grid lg:grid-cols-2 gap-12">
      <!-- Contact Information -->
      <div class="space-y-8">
        <div class="bg-white rounded-xl shadow-lg p-4">
          <h2 class="text-2xl font-bold text-blue-700 mb-6">Contact Information</h2>
          
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="bg-blue-100 p-3 rounded-full">
                <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">Address</h3>
                <p class="text-gray-600">RTC Inter College<br>
                Near Railway Station<br>
                Ranchi, Jharkhand - 834001</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="bg-green-100 p-3 rounded-full">
                <i class="fas fa-phone text-green-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">Phone Numbers</h3>
                <p class="text-gray-600">
                  <a href="tel:+911234567890" class="hover:text-blue-600">+91 123-456-7890</a><br>
                  <a href="tel:+919876543210" class="hover:text-blue-600">+91 987-654-3210</a>
                </p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="bg-purple-100 p-3 rounded-full">
                <i class="fas fa-envelope text-purple-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                <p class="text-gray-600">
                  <a href="mailto:rtcintercollege@gmail.com" class="hover:text-blue-600">rtcintercollege@gmail.com</a><br>
                  <a href="mailto:admission@rtcintercollege.com" class="hover:text-blue-600">admission@rtcintercollege.com</a>
                </p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="bg-orange-100 p-3 rounded-full">
                <i class="fas fa-clock text-orange-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">Office Hours</h3>
                <p class="text-gray-600">
                  Monday - Friday: 8:00 AM - 4:00 PM<br>
                  Saturday: 8:00 AM - 2:00 PM<br>
                  Sunday: Closed
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="bg-white rounded-xl shadow-lg p-4">
          <h2 class="text-2xl font-bold text-blue-700 mb-6">Follow Us</h2>
          <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-4">
            <a href="#" class="flex items-center space-x-3 p-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
              <i class="fab fa-facebook text-xl"></i>
              <span>Facebook</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition-colors">
              <i class="fab fa-instagram text-xl"></i>
              <span>Instagram</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
              <i class="fab fa-twitter text-xl"></i>
              <span>Twitter</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
              <i class="fab fa-youtube text-xl"></i>
              <span>YouTube</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="bg-white rounded-xl shadow-lg p-4">
        <h2 class="text-2xl font-bold text-blue-700 mb-6">Send us a Message</h2>
        
        <form class="space-y-6">
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
              <input type="text" id="firstName" name="firstName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div>
              <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
              <input type="text" id="lastName" name="lastName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
          </div>
          
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          </div>
          
          <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
            <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
              <option value="">Select a subject</option>
              <option value="admission">Admission Inquiry</option>
              <option value="academic">Academic Information</option>
              <option value="fees">Fee Structure</option>
              <option value="faculty">Faculty Information</option>
              <option value="general">General Inquiry</option>
              <option value="other">Other</option>
            </select>
          </div>
          
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Please describe your inquiry..." required></textarea>
          </div>
          
          <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
            Send Message
          </button>
        </form>
      </div>
    </div>

    <!-- Map Section -->
    <div id="map" class="mt-16">
      <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">Find Us on Map</h2>
      <div class="bg-white rounded-xl shadow-lg p-8">
        <div class="bg-gray-200 h-96 rounded-lg flex items-center justify-center">
          <!-- <div class="text-center">
            <i class="fas fa-map-marked-alt text-6xl text-gray-400 mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-600 mb-2">Interactive Map</h3>
            <p class="text-gray-500">Map integration will be added here</p>
            <p class="text-sm text-gray-400 mt-2">RTC Inter College, Near Railway Station, Ranchi</p>
          </div> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14638.750772657635!2d85.476192!3d23.471727200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4faf9d550ba9d%3A0xc67798ae32818110!2sRTC%20College!5e0!3m2!1sen!2sin!4v1755082064873!5m2!1sen!2sin" width="100%" height="387px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <!-- Quick Contact -->
    <div id="call-us" class="mt-16 grid md:grid-cols-3 gap-6">
      <div class="bg-blue-600 text-white rounded-xl p-6 text-center">
        <i class="fas fa-phone text-3xl mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Call Us</h3>
        <p class="text-blue-100">+91 123-456-7890</p>
        <p class="text-blue-100 text-sm">Mon-Fri: 8AM-4PM</p>
      </div>
      
      <div class="bg-green-600 text-white rounded-xl p-6 text-center">
        <i class="fas fa-envelope text-3xl mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Email Us</h3>
        <p class="text-green-100">rtcintercollege@gmail.com</p>
        <p class="text-green-100 text-sm">24/7 Support</p>
      </div>
      
      <div class="bg-purple-600 text-white rounded-xl p-6 text-center">
        <i class="fas fa-map-marker-alt text-3xl mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Visit Us</h3>
        <p class="text-purple-100">Near Railway Station</p>
        <p class="text-purple-100 text-sm">Ranchi, Jharkhand</p>
      </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
