<template>
  <div class="flex flex-col min-h-screen font-sans">
    <header class="bg-white shadow-md py-4">
      <div class="container mx-auto px-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
          <img src="/images/logo.png" alt="Beresindong Logo" class="h-8 w-auto"> <div class="text-xl font-bold text-green-800">BERESINDONG</div>
        </div>

        <nav class="hidden md:block">
          <ul class="flex space-x-6">
            <li><a href="#" class="text-gray-600 hover:text-green-800 transition-colors duration-300">Preparing</a></li>
            <li><a href="#" class="text-gray-600 hover:text-green-800 transition-colors duration-300">Cleaning</a></li>
            <li><a href="#" class="text-gray-600 hover:text-green-800 transition-colors duration-300">Jadi Mitra</a></li>
            <li><a href="#" class="text-gray-600 hover:text-green-800 transition-colors duration-300">About Us</a></li>
          </ul>
        </nav>

        <div class="flex items-center space-x-4">
          <button class="bg-yellow-500 hover:bg-yellow-600 text-green-900 font-semibold py-2 px-4 rounded-full text-sm shadow-md transition-all duration-300">
            Login
          </button>
          <img src="/images/settings-icon.png" alt="Settings" class="h-6 w-6 cursor-pointer hidden md:block"> </div>

        <button class="md:hidden text-gray-600 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-4 6h4"></path>
          </svg>
        </button>
      </div>
    </header>

    <main class="flex-grow">
      <slot></slot>
    </main>

    <footer class="bg-green-800 text-white py-8">
      <div class="container mx-auto px-4 text-center">
        <div class="text-2xl font-bold mb-4">BERESINDONG</div>
        <p class="text-sm">Solusi terbaik untuk kebersihan dan perawatan rumah Anda.</p>
        <div class="flex justify-center space-x-6 mt-4">
          <a href="#" class="text-white hover:text-yellow-500 transition-colors duration-300">FB</a>
          <a href="#" class="text-white hover:text-yellow-500 transition-colors duration-300">IG</a>
          <a href="#" class="text-white hover:text-yellow-500 transition-colors duration-300">Twitter</a>
        </div>
        <p class="text-xs mt-6">&copy; 2024 Beresindong. All rights reserved.</p>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'AppLayout',
};
</script>

<style scoped>
/* Anda bisa menambahkan gaya kustom jika diperlukan, tapi Tailwind seharusnya cukup */
</style>