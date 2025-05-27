<template>
  <section class="bg-white py-16 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mb-12">
        Layanan Kami
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/service-cleaning.jpg" alt="Layanan Cleaning" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-green-800 mb-3">Cleaning</h3>
            <p class="text-gray-700 text-base mb-4">
              Pembersihan menyeluruh untuk rumah, kantor, atau properti komersial Anda.
            </p>
            <a href="#" class="inline-block text-yellow-600 hover:text-yellow-700 font-semibold transition-colors duration-300">
              Lihat Detail &rarr;
            </a>
          </div>
        </div>

        <div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
          <img src="/images/service-repairing.jpg" alt="Layanan Repairing" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-green-800 mb-3">Repairing</h3>
            <p class="text-gray-700 text-base mb-4">
              Perbaikan berbagai kerusakan rumah tangga oleh tenaga ahli.
            </p>
            <a href="#" class="inline-block text-yellow-600 hover:text-yellow-700 font-semibold transition-colors duration-300">
              Lihat Detail &rarr;
            </a>
          </div>
        </div>

        <div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105 hidden lg:block">
          <img src="/images/service-pest-control.jpg" alt="Layanan Pest Control" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-green-800 mb-3">Pest Control</h3>
            <p class="text-gray-700 text-base mb-4">
              Solusi efektif untuk membasmi hama di properti Anda.
            </p>
            <a href="#" class="inline-block text-yellow-600 hover:text-yellow-700 font-semibold transition-colors duration-300">
              Lihat Detail &rarr;
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ServicesSection',
};
</script>

<style scoped>
/* ... */
</style>