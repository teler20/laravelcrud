<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom Styling for Buttons */
    .btn-primary {
      background: linear-gradient(90deg, #00509e, #00b4d8);
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background 0.3s ease-in-out;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #004080, #0096c7);
    }
  </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800">
  <!-- Navigation Bar -->
  <header class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <h1 class="text-2xl font-bold">Modern Website</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#" class="hover:text-gray-300">Home</a></li>
          <li><a href="#about" class="hover:text-gray-300">About</a></li>
          <li><a href="#services" class="hover:text-gray-300">Services</a></li>
          <li><a href="#team" class="hover:text-gray-300">Team</a></li>
          <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-900 py-20 text-white text-center">
    <div class="container mx-auto">
      <h2 class="text-5xl font-extrabold">Welcome to Modern Website</h2>
      <p class="mt-4 text-lg">Delivering modern and professional solutions tailored to your needs.</p>
      <a href="#" class="btn-primary mt-6 inline-block">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="services" class="py-16 bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
      <div class="bg-gray-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-2xl font-semibold text-blue-700">Feature 1</h3>
        <p class="mt-2 text-gray-600">High-quality and reliable solutions.</p>
      </div>
      <div class="bg-gray-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-2xl font-semibold text-blue-700">Feature 2</h3>
        <p class="mt-2 text-gray-600">State-of-the-art technologies and tools.</p>
      </div>
      <div class="bg-gray-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-2xl font-semibold text-blue-700">Feature 3</h3>
        <p class="mt-2 text-gray-600">Expert support and guidance at every step.</p>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team" class="bg-gradient-to-r from-gray-50 to-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold text-blue-800">Meet Our Team</h2>
      <p class="mt-4 text-gray-700">Our dedicated professionals are here to help you succeed.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        <div class="bg-white shadow-md rounded-lg p-6">
          <img src="https://via.placeholder.com/150" alt="Team Member" class="mx-auto rounded-full shadow-md">
          <h3 class="mt-4 text-xl font-semibold text-blue-700">John Doe</h3>
          <p class="text-gray-500">CEO</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <img src="https://via.placeholder.com/150" alt="Team Member" class="mx-auto rounded-full shadow-md">
          <h3 class="mt-4 text-xl font-semibold text-blue-700">Jane Smith</h3>
          <p class="text-gray-500">Designer</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
          <img src="https://via.placeholder.com/150" alt="Team Member" class="mx-auto rounded-full shadow-md">
          <h3 class="mt-4 text-xl font-semibold text-blue-700">Mark Johnson</h3>
          <p class="text-gray-500">Developer</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="bg-blue-100 py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold text-blue-900">What Our Clients Say</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        <div class="bg-white shadow-lg rounded p-6">
          <p class="text-gray-600 italic">"This is the best service I've ever used!"</p>
          <h3 class="mt-4 text-xl font-semibold">- Client A</h3>
        </div>
        <div class="bg-white shadow-lg rounded p-6">
          <p class="text-gray-600 italic">"Amazing experience, highly recommend!"</p>
          <h3 class="mt-4 text-xl font-semibold">- Client B</h3>
        </div>
        <div class="bg-white shadow-lg rounded p-6">
          <p class="text-gray-600 italic">"Fantastic team and great support."</p>
          <h3 class="mt-4 text-xl font-semibold">- Client C</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact" class="bg-blue-900 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Modern Website. All rights reserved.</p>
      <p>Contact us at <a href="mailto:info@modernwebsite.com" class="text-blue-400 hover:underline">info@modernwebsite.com</a></p>
    </div>
  </footer>
</body>
</html>
