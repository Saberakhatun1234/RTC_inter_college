<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
<section class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
      LOGIN YOUR ACCOUNT
    </h1>

    <!-- Form -->
    <form action="/" method="POST" class="space-y-5">
      
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
          Enter Your Email:
        </label>
        <input type="email" id="email" name="email" 
               placeholder="yourEmail12@gmail.com" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
          Enter Your Password:
        </label>
        <input type="password" id="password" name="password" 
               placeholder="********" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Button -->
      <button type="submit" 
              class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-xl shadow hover:bg-blue-700 transition">
        Login
      </button>
    </form>

    <!-- Footer -->
    <p class="mt-6 text-sm text-center text-gray-600">
      Don’t have an account? 
      <a href="signup.php" class="text-blue-600 hover:underline">Sign Up</a>
    </p>
  </div>
</section>

    

</body>
</html>