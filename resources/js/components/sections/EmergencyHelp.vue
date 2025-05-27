<template>
  <section class="bg-white py-16 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mb-12">
        Emergency Help
      </h2>

      <div class="bg-gray-200 rounded-lg shadow-xl p-8 md:p-12 flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-12">
        <div class="md:w-1/2 text-center md:text-left">
          <h3 class="text-2xl font-bold text-green-800 mb-4">Butuh Bantuan Cepat?</h3>
          <p class="text-gray-700 text-lg leading-relaxed mb-6">
            Kami siap membantu Anda dalam situasi darurat dengan layanan respons cepat 24/7.
            Baik itu kebocoran, listrik padam mendadak, atau masalah mendesak lainnya.
          </p>
          <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full text-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105">
            Hubungi Sekarang
          </button>
        </div>
        <div class="md:w-1/2 flex justify-center">
          <img src="/images/emergency-sign.png" alt="Emergency Sign" class="max-w-full h-auto object-contain">
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'EmergencyHelp',
};
</script>

<style scoped>
/* ... */
</style>