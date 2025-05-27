<template>
  <section class="bg-gray-100 py-16 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mb-12">
        Pekerja Kebanggaan
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6 text-center transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/worker-1.jpg" alt="Pekerja Beresindong 1" class="w-32 h-32 rounded-full mx-auto object-cover mb-4 border-4 border-yellow-500">
          <h3 class="text-xl font-semibold text-green-800 mb-2">Budi Santoso</h3>
          <p class="text-gray-600 text-sm mb-4">Spesialis Cleaning & Disinfeksi</p>
          <div class="flex justify-center space-x-2 text-yellow-500 text-lg">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span> (4.5)
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6 text-center transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/worker-2.jpg" alt="Pekerja Beresindong 2" class="w-32 h-32 rounded-full mx-auto object-cover mb-4 border-4 border-yellow-500">
          <h3 class="text-xl font-semibold text-green-800 mb-2">Siti Aminah</h3>
          <p class="text-gray-600 text-sm mb-4">Ahli Perbaikan Listrik & Air</p>
          <div class="flex justify-center space-x-2 text-yellow-500 text-lg">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span> (5.0)
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6 text-center transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/worker-3.jpg" alt="Pekerja Beresindong 3" class="w-32 h-32 rounded-full mx-auto object-cover mb-4 border-4 border-yellow-500">
          <h3 class="text-xl font-semibold text-green-800 mb-2">Joko Susilo</h3>
          <p class="text-gray-600 text-sm mb-4">Pakar Pengendalian Hama</p>
          <div class="flex justify-center space-x-2 text-yellow-500 text-lg">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span> (4.7)
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'FeaturedWorkers',
};
</script>

<style scoped>
/* ... */
</style>