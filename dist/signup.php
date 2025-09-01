<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <section class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
      CREATE YOUR ACCOUNT
    </h1>

    <!-- Form -->
    <form action="/signup" method="POST" class="space-y-5">
      
      <!-- Full Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
          Full Name:
        </label>
        <input type="text" id="name" name="name" 
               placeholder="John Doe" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
          Email Address:
        </label>
        <input type="email" id="email" name="email" 
               placeholder="example@mail.com" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
          Password:
        </label>
        <input type="password" id="password" name="password" 
               placeholder="********" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">
          Confirm Password:
        </label>
        <input type="password" id="confirm-password" name="confirm-password" 
               placeholder="********" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <!-- Button -->
      <button type="submit" 
              class="w-full bg-green-600 text-white font-semibold py-2 px-4 rounded-xl shadow hover:bg-green-700 transition">
        Sign Up
      </button>
    </form>

    <!-- Footer -->
    <p class="mt-6 text-sm text-center text-gray-600">
      Already have an account? 
      <a href="login.php" class="text-green-600 hover:underline">Login</a>
    </p>
  </div>
</section>

</body>
</html>