<template>
  <section class="bg-green-800 text-white py-16 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
        Testimoni Customer
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-700 bg-opacity-70 rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/customer-1.jpg" alt="Customer 1" class="w-24 h-24 rounded-full object-cover mb-4 border-4 border-yellow-500">
          <p class="text-white text-lg italic mb-4">
            "Sangat puas dengan layanan cleaning dari Beresindong! Rumah jadi bersih kinclong dan rapi. Timnya profesional dan ramah."
          </p>
          <p class="font-semibold text-yellow-400">- Ayu Setiawati</p>
          <p class="text-sm opacity-80">Jakarta</p>
        </div>

        <div class="bg-gray-700 bg-opacity-70 rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/customer-2.jpg" alt="Customer 2" class="w-24 h-24 rounded-full object-cover mb-4 border-4 border-yellow-500">
          <p class="text-white text-lg italic mb-4">
            "Perbaikan pipa bocor dilakukan dengan cepat dan rapi. Penyelamat di kala darurat! Rekomendasi banget."
          </p>
          <p class="font-semibold text-yellow-400">- Rizky Pratama</p>
          <p class="text-sm opacity-80">Bandung</p>
        </div>
      </div>

      <div class="text-center mt-12">
        <button class="bg-yellow-500 hover:bg-yellow-600 text-green-900 font-bold py-3 px-8 rounded-full text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          Tambah Testimoni
        </button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'CustomerTestimonials',
};
</script>

<style scoped>
/* ... */
</style>